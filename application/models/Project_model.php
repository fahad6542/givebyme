<?php

/* 
 * Added by Fahad
 * fields must match the database  * 
 */
//table projects
class Project_model extends CI_Model
{
    public $pid;
    public $title; //company name
    public $pro_type; //=project/company
    public $description;
    public $industries;
    public $country;
    public $images;
    public $investmentType;
    public $projectValue;
    public $maximumInvestments;
    public $investmentCategory;
    public $estimatedReturn;
    public $minimumInvestment;
    public $dividendBasis;
    public $paymentMethod;
    public $numberOfRooms;
    public $yearOfConstruction;
    public $yearOfReConstruction;
    public $noOfFloors;
    public $durationForComplete;
    public $contractor;
    public $assetClass;
    public $partner;
    public $location;
    public $lat;
    public $lng;
    public $yieldFor1stYear;
    public $yieldFor2ndYear;
    public $yieldFor3rdYear;
    public $projectedIRR;
    public $grossIncome;
    public $netIncom;
    public $totalExpenses;
    public $totalDividendYield;
    public $currentInvestmentAmount;
    public $added_by;
    public $company;
    public $insertedOn;
    public $lastEditedOn;
    public $web_url;
    public $pstate;
    public $city;
    public $email;
    public $contact_no;
    public $social_links;
    public $logo;
    public $video_url;
    public $status;
    public $dealtype;
    public $cid;//cause ID


    public function __construct()
    {
            parent::__construct();
            
            $this->paymentMethod="PayPal";
            $this->lat="N/A"; 
            $this->lng="N/A";
            $this->yieldFor1stYear="N/A"; 
            $this->yieldFor2ndYear="N/A";
            $this->yieldFor3rdYear="N/A";
            $this->projectedIRR="N/A";
            $this->grossIncome="N/A";
            $this->netIncom="N/A";
            $this->totalExpenses="N/A";
            $this->totalDividendYield="N/A";
            $this->currentInvestmentAmount=0;
            $this->dividendBasis="N/A";
            $this->status=1;
    }
    
    public function copyProject($projectArray){
        foreach ($projectArray as $key => $value) {
            if ($key=='fb' OR $key=='tw' OR $key=='insta') {
                continue;
            }elseif ($key=="img") {
                $this->images= implode(",", $value);
            }else{
                $this->$key=$this->checkEmpty($value);
            }
            
        }
       // $this->social_links=$this->SocialLinksToJson($projectArray);
        return $this;
    }
    
     //helper functions
        
    public function SocialLinksToJson($LinkArray){
        $arr = array('fb' => $LinkArray["fb"], 'tw' => $LinkArray["tw"], 'insta' => $LinkArray["insta"]);
        return json_encode($arr);
    }
    
    private function checkEmpty($value){
        if($value){
            return $value;
		}else{
			return "N/A";
		}
	}
    
    
    
}
