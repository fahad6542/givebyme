<?php
/*
Added By Fahad
 *  */
class Document extends CI_Controller
{
    public function __construct()
    {
            parent::__construct();
            if (! $this->session->userdata('userdata'))
            {
                redirect('login'); // the user is not logged in, redirect them!
            }
        $this->load->helper('form');
        $this->load->model('Document_model');
        $this->load->model('Company_model');
        $this->load->helper('url_helper');
    }
    
    //Display create form
    public function create($pid=0){
        $user = $this->session->userdata('userdata');
        
        $sql = "SELECT pid,title,pro_type,status \n"
        . "FROM projects \n"
        . "WHERE status=1 AND added_by=".$user["uid"] . " AND pid=".$pid;
        $query = $this->db->query($sql);
        
        if ($query->num_rows()>0) {
            
            $data['project']=$project=$query->row_array();
            
            $data['documentList'] =array();
            $result = $this->db->query("SELECT * FROM document WHERE added_by=".$user["uid"] . " AND project=".$project["pid"]);
            
            if ($result) {
                $data['documentList'] = $result->result_array();
            }
        
            $partialViewData["currentTab"]="document";
            $partialViewData["project"]=(array)$project;
            $data['nav_tabs']= $this->load->view('user_dashboard/partial/navTabs',$partialViewData,TRUE);
        
            $this->load->view('user_dashboard/header');
            $this->load->view('user_dashboard/document/create', $data);
            $this->load->view('user_dashboard/footer');
        }else{
            $this->session->set_flashdata('error', 'Unable to find your offer');
            redirect("/my-dashboard");
        }
    }
    
    public function save(){
       
        $document = new Document_model();
        $document->copyDocument($this->input->post());
        
        $user = $this->session->userdata('userdata');
        
        $document->added_by=$user["uid"];
        $document->available_to=0;
        
        
//upload image
        $config1['upload_path']          = './uploads/document/';
        $config1['allowed_types']        = 'docx|doc|pdf|txt';
        $config1['max_size']             = 2000;
        $config1['max_width']            = 1024;
        $config1['max_height']           = 768;
        $config1['file_name']            = $_FILES['file_name']['name'];

        $this->load->library('upload',$config1);
        
        if ( ! $this->upload->do_upload('file_name'))
        {
            $this->session->set_flashdata('error', 'Unable to save. Due to '.$this->upload->display_errors());
            redirect("document/create/".$document->project);
        }
        
        $data = array('upload_data' => $this->upload->data());
        $document->file_name=$data["upload_data"]["file_name"];
       //echo "<pre>"; print_r($document);        die(); 
        if ($this->db->insert('document',$document)) {
            $this->session->set_flashdata('success', 'File uploaded.');
            redirect("document/create/".$document->project);
        }else{
            $this->session->set_flashdata('error', 'Unable to save.');
            redirect("document/create/".$document->project);
        }
         
    }
    
    public function delete($id) {
        $user = $this->session->userdata('userdata');
        $sql="SELECT * FROM document WHERE added_by=".$user["uid"]." AND id=".$id;
        $res = $this->db->query($sql);
        $dataDocument = $res->row_array();
        
	$file= '././uploads/document/'.$dataDocument["file_name"];
        //print_r($dataDocument); die();
        $this->db->where('id', $id);
        $result=$this->db->delete('document');
        if ($result) {
            if (file_exists($file)) {
               unlink($file);
            } 
            $this->session->set_flashdata('success', 'Document deleted.');
            redirect("document/create/".$dataDocument["project"]);
        }else{
            $this->session->set_flashdata('error', 'Unable to delete.');
            redirect("document/create/".$dataDocument["project"]);
            
        }
    }
}