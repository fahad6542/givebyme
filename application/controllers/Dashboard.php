<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function search()
    {
        $ptitle=trim($this->input->post('ptitle'));
        $industryName=$this->input->post('industryName');
        $industries=array();
        $data["pageHeading"]="Search Resuts";

        if (!is_null($industryName) and $industryName!="" and $industryName!=" ") {
            $sql = "SELECT iid FROM `industries` \n"
                . "WHERE industryName LIKE '%".$industryName."%'";
            $recSet=$this->db->query($sql);
            $industries= $recSet->result_array();
        }
            

        $sql = "SELECT p.pid,p.title,p.images,p.projectValue,p.pro_type,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type \n"
            . "FROM `projects` AS p \n"
            . "LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid\n"

            . "INNER JOIN user ON p.added_by = user.uid\n";
            
        $sql=$sql." WHERE p.status=1";
        $whereClause="";
        if (!is_null($ptitle) and $ptitle!="" and $ptitle!=" ") {
            $whereClause.=" OR p.title LIKE '%".$ptitle."%' \n";
        }

        if (count($industries)>0) {
            foreach ($industries[0] as $value) {
                $whereClause.=" OR FIND_IN_SET (".$value.",p.industries)>0\n";
            }
        }

        if ($whereClause!="") {
            $orPos=strpos($whereClause, "OR");
            $whereClause= substr($whereClause, $orPos+2);
            $sql=$sql." AND ( " .$whereClause .") ";
        }

        $sql=$sql." ORDER BY p.title ";
        //echo $sql; die();
        $recSet=$this->db->query($sql);
        $data['projects'] = $recSet->result_array();

        $data["ptitle"]=$ptitle;
        $data["industryName"]=$industryName;
        //filling the search fileds
        $this->db->select('industryName');
        $query = $this->db->get('industries');
        $data['indJsonLst']=json_encode(array_column($query->result(), 'industryName'));
        $data['proJsonLst']=json_encode(array_column($recSet->result(), 'title'));
               

        $this->load->view('header1', $data);
        $this->load->view('search', $data);
        $this->load->view('footer');
    }


    public function getResult()
    {
        $title=trim($this->input->post('ptitle'));
        $pro_type=$this->input->post('pro_type'); //deal type
        $industries=$this->input->post('industry');
        $country=$this->input->post('country');
        $location=$this->input->post('location');
        $account_type=$this->input->post('account_type');
        $sql = "SELECT p.pid,p.title,p.images,p.projectValue,p.pro_type,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type \n"

    . "FROM `projects` AS p \n"

    . "LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid\n"

            . "INNER JOIN user ON p.added_by = user.uid\n";
            
        $sql=$sql." WHERE p.status=1";
        $whereClause="";
        if (!is_null($title) and $title!="" and $title!=" ") {
            $whereClause.=" OR p.title LIKE '%".$title."%' \n";
        }
        if (!is_null($pro_type)) {
            $whereClause.= " OR p.pro_type IN ('". implode("','", $pro_type) ."')\n";
        }
        if (!is_null($industries)) {
            foreach ($industries as $value) {
                $whereClause.=" OR FIND_IN_SET (".$value.",p.industries)>0\n";
            }
        }
            
        if (!is_null($country)) {
            $whereClause.="OR p.country IN ('" . implode("','", $country)."')\n";
        }
        if (!is_null($location)) {
            $whereClause.= "OR p.location LIKE '%".$location."%' \n";
        }
        if (!is_null($account_type)) {
            $whereClause.=" OR user.account_type IN (".implode(",", $account_type).")";
        }
            
        if ($whereClause!="") {
            $orPos=strpos($whereClause, "OR");
            $whereClause= substr($whereClause, $orPos+2);
            $sql=$sql." AND ( " .$whereClause .") ";
        }

        $sql=$sql." ORDER BY p.title ";
        //echo $sql;
        $recSet=$this->db->query($sql);
        $projects = $recSet->result_array();
            
        $found=0;
        foreach ($projects as $key => $project) :
                $found++;
        $data['project']=$project;
        $string = $this->load->view('partial/productBox', $data, true);
        echo $string;
        endforeach;
        
        if ($found<1) {
            echo "<div class='col-lg-4 col-sm-4 col-xs-12'>
                            <div class='row project-item'>Sorry, no results found.Please try again.</div></div>";
        }
    }

    public function index()
    {
        $user = $this->session->userdata('userdata');

        if ($user) {
            if ($user['usertype'] == "admin") {
                redirect('admin');
            //} else if ($user['usertype'] == "user") {
            //	$this->initialData();
                // redirect('dashboard');
            } else {
                $this->initialData();
                // $this->load->view('index');
            }
        } else {
            $this->initialData();
        }
    }

    public function my_dashboard()
    {
        $user = $this->session->userdata('userdata');
        if ($user["account_type"]==1) {
            redirect("InvDashboard");
        } elseif ($user["account_type"]==2 || $user["account_type"]==3 || $user["account_type"]==4) {
            redirect("EntDashboard");
        }
        $transections_result = $this->main_model->getWhere('transactions', array(
                    "uid" => $user['uid'],
                    "paymentStatus" => "completed"
            ));
        $data['project_count'] = $transections_result->num_rows();

        $this->db->select_sum('total');
        $this->db->from('transactions');
        $this->db->where('(uid = ' . $user['uid'] . ') ');
        $query = $this->db->get();
        $data['total_investment'] = $query->row_array()['total'];

        $last_investment = $this->db->order_by('tid', "desc")->limit(1)->get('transactions')->row_array();
        $data['user_data'] = $this->session->userdata('userdata');
        $data['last_investment'] = $last_investment;
        $this->load->view('user_dashboard/header');
        $this->load->view('user_dashboard/index', $data);
        $this->load->view('user_dashboard/footer');
    }

    public function initialData()
    {
        $industries_result = $this->main_model->getAllRecords('industries');
        $data['industries'] = $industries_result->result_array();
        $data["pageHeading"]="Recent Campaigns";

        $sql = "SELECT * FROM `account_type`\n"
                . "WHERE id NOT IN (1,5)";
        $acc_type=$this->db->query($sql);
        $data['account_type'] = $acc_type->result_array();
                
        $sql = "SELECT id,name FROM `country`\n"
                . "WHERE  is_active=1";
        $recSet=$this->db->query($sql);
        $data['countryLst'] = $recSet->result_array();
        
        //organizations
        $sql = "SELECT p.pid,p.title,p.images,p.projectValue,p.pro_type,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime \n"

            . "FROM `projects` AS p \n"

            . "LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid\n"

            . "WHERE p.status=1 AND p.pro_type='organization' ORDER BY p.pid DESC";

        $recSet=$this->db->query($sql);
        $data['organizations'] = $recSet->result_array();

        //companies
        $sql = "SELECT p.pid,p.title,p.images,p.projectValue,p.pro_type,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime \n"

            . "FROM `projects` AS p \n"

            . "LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid\n"

            . "WHERE p.status=1 AND p.pro_type='company' ORDER BY p.pid DESC";

        $recSet=$this->db->query($sql);
        $data['companies'] = $recSet->result_array();

        //filling the search fileds
        $this->db->select('industryName');
        $query = $this->db->get('industries');
        $data['indJsonLst']=json_encode(array_column($query->result(), 'industryName'));
        $data['proJsonLst']=json_encode(array_column($recSet->result(), 'title'));
        $data["ptitle"]="";
        $data["industryName"]="";

        $this->load->view('header', $data);
        $this->load->view('index', $data);
        $this->load->view('footer');
    }
}
