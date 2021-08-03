<?php class User extends CI_Controller
{
	var $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('email');
		$this->load->helper('form');
	}

	public function all_Users()
	{
		$user = $this->session->userdata('userdata');
		if ($user['usertype'] == "admin") {
			$result = $this->main_model->getWhere('user', array(
				"usertype" => 'user',
				"status"=>1
			));
			$data['users'] = $result->result_array();
			$this->load->view('admin_dashboard/header');
			$this->load->view('admin_dashboard/users', $data);
			$this->load->view('admin_dashboard/footer');
		}else{
			redirect('login');
		}
	}

	function register()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
		$this->form_validation->set_rules('streetAddress', 'Street Address', 'required');
		$this->form_validation->set_rules('city', 'City Address', 'required');
		$this->form_validation->set_rules('countryBirth', 'Birth Country is Required', 'required');
		$this->form_validation->set_rules('countryResident', 'Resident Country is Required', 'required');
		$this->form_validation->set_rules('income', 'Anual Income is Required', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} else {
			if ($this->input->post('save')) {
				$isRegistered = $this->main_model->getWhere('user', array('email' => $this->input->post('email')))->num_rows();
				if ($isRegistered == 0) {
					$data = array(
						"firstname" => $this->input->post('name'),
						"email" => $this->input->post('email'),
						"password" => $this->input->post('password'),
						"cpassword" => $this->input->post('cpassword'),
						"streetaddress" => $this->input->post('streetAddress'),
						"city" => $this->input->post('city'),
						"birthcountry" => $this->input->post('countryBirth'),
						"residentcountry" => $this->input->post('countryResident'),
						"income" => $this->input->post('income'),
                       	"status"=>1,
                       	"account_type"=>2 //can upload campain
					);
					$result = $this->main_model->insert('user', $data);
					if ($result) {
						$this->session->set_flashdata('success', 'Registration Successfull');
						redirect('login');
					} else {
						redirect('register');
					}
				} else {
					$this->session->set_flashdata('error', 'This email is already Registerd');
					redirect('/');
				}
			}
		}
	}

	function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		// $this->load->view('login');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
			$this->session->set_flashdata('erroe', 'Please enter details first');
		} else {
			if ($this->input->post('login')) {
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$query = $this->main_model->getWhere('user', array(
					'email' => $email,
					'password' => $password,
                    'status' => 1
				));
				$result = $query->row_array();
                                                              
				if ($result) {
					$this->session->set_flashdata('success', 'Welcome to Lavniworld');
                    $this->session->set_userdata('userdata', $result);
					$user = $this->session->userdata('userdata');
                             
                    if ($user['usertype'] == "admin") {
						redirect('admin');
					}elseif ($user['usertype'] == "user") {
						redirect('dashboard');
					}
					
				} else {
					$this->session->set_flashdata('error', 'Invalid Username or Password');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}


	function forget_password()
	{
		$this->load->view('forgetpassword');
	}

	function terms()
	{
		$this->load->view('terms');
	}

	function how_it_works()
	{
		$this->load->view('how_it_works');
	}

	function risk()
	{
		$this->load->view('risk');
	}
            //status disable
	function remove()
	{
            $this->db->where('uid', $this->uri->segment(3));
            $result=$this->db->update('user',array('status'=>0) );
    
            if ($result) {
                    $this->session->set_flashdata('info', 'User Disabled');
                    $this->all_Users();
            }
	}

        
        function activate()
	{
            $this->db->where('uid', $this->uri->segment(3));
            $result=$this->db->update('user',array('status'=>1) );
    
            if ($result) {
                    $this->session->set_flashdata('info', 'User Activated');
                    $this->all_Users();
            }
	}
        
	function view()
	{
		$result = $this->main_model->getWhere('user', array(
			"uid" => $this->uri->segment(3)
		));
		$data['user'] = $result->row_array();
		$this->load->view('admin_dashboard/header');
		$this->load->view('admin_dashboard/view_user', $data);
		$this->load->view('admin_dashboard/footer');
	}

	function active()
	{
		$data = array(
			"status" => 1
		);
		$uid = $this->uri->segment(3);
		$result = $this->main_model->update('user', 'uid', $uid, $data);
		if ($result) {
			$this->session->set_flashdata('info', 'User Activated');
			$this->view();
		}
	}

	function settings()
	{
		$user = $this->session->userdata('userdata');
		$data['user'] = $user;
		$data['countries'] = $this->countries;
		if ($user['usertype'] == "admin") {
			$this->load->view('admin_dashboard/header');
			$this->load->view('profile', $data);
			$this->load->view('admin_dashboard/footer');
		} elseif($user["account_type"] == "1" ) {
			$this->load->view('investor/header');
			$this->load->view('profile', $data);
			$this->load->view('investor/footer');
                }else{
                    $this->load->view('user_dashboard/header');
                    $this->load->view('profile', $data);
                    $this->load->view('user_dashboard/footer');
                }
	}

	function change_password()
	{
		$user = $this->session->userdata('userdata');
		if ($user) {
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required');
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('error', 'Required fields are missing');
				if ($user['usertype'] == "admin") {
					$this->load->view('admin_dashboard/header');
					$this->load->view('change-password');
					$this->load->view('admin_dashboard/footer');
                                }elseif($user["account_type"] == "1" ) {
                                    $this->load->view('investor/header');
                                    $this->load->view('change-password');
                                    $this->load->view('investor/footer');
                                } else {
					$this->load->view('user_dashboard/header');
					$this->load->view('change-password');
					$this->load->view('user_dashboard/footer');
				}
			} else {
				// echo "<pre>";
				// print_r($this->input->post());
				if ($this->input->post('password') && $this->input->post('password')) {
					$password = $this->input->post('password');
					$cpassword = $this->input->post('cpassword');
					if ($password != $cpassword) {
						$this->session->set_flashdata('error', 'Password not matched');
						redirect('change-password');
					}
					$result = $this->main_model->update('user', 'uid', $user['uid'], array(
						"password" => $password
					));
					if ($result) {
						$this->session->set_flashdata('success', 'Password Changed');
						redirect('change-password');
					} else {
						$this->session->set_flashdata('error', 'unable to change password');
					}
				} else {
					$this->session->set_flashdata('erroe', 'Required fields are missing');
					redirect('change-password');
				}
			}
		} else {
			redirect('login');
		}
	}

	function update_profile()
	{
		$user = $this->session->userdata('userdata');
		if ($user) {
			$this->form_validation->set_rules('name', 'Name', 'required');
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('error', 'Required fields are missing');
				if ($user['usertype'] == "admin") {
					$this->load->view('admin_dashboard/header');
					$this->load->view('change-password');
					$this->load->view('admin_dashboard/footer');
				} else {
					$this->load->view('user_dashboard/header');
					$this->load->view('change-password');
					$this->load->view('user_dashboard/footer');
				}
			} else {
				$profileImage = $this->uploadImages($this->input->post("name"));
				if ($this->input->post('name')) {
					$data = array();
					$data["firstname"] = $this->input->post('name');
					$data["image"] = $profileImage;
					if($user['usertype'] == "user"){
						$data["streetaddress"] = $this->input->post('streetaddress');
						$data["birthcountry"] = $this->input->post('countryBirth');
						$data["residentcountry"] = $this->input->post('countryResident');
					}
					$result = $this->main_model->update('user', 'uid', $user['uid'], $data);
					if ($result) {
						// get user data here & set in session
						$result = $this->main_model->getWhere('user', array(
							"uid" => $user['uid']
						));
						$this->session->set_userdata('userdata', $result->row_array());
						$this->session->set_flashdata('success', 'Password Changed');
						redirect('settings');
					} else {
						$this->session->set_flashdata('error', 'unable to change password');
						redirect('settings');
					}
				} else {
					$this->session->set_flashdata('erroe', 'Required fields are missing');
					redirect('settings');
				}
			}
		} else {
			redirect('login');
		}
	}

	function uploadImages($userName)
	{
		if(isset($_FILES['userImages'])){
			$path = "./assets/uploads/users/";
			if (!is_dir($path)) {
				mkdir($path, 0777, true);
			}
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['file_name'] = 'lavnicapital_' . $userName . '_' . rand(10,99999999);
			$config['overwrite'] = true;

			$this->load->library('upload');
			$dataInfo = array();
			$files = $_FILES;
			$_FILES['userImages']['name'] = $files['userImages']['name'];
			$_FILES['userImages']['type'] = $files['userImages']['type'];
			$_FILES['userImages']['tmp_name'] = $files['userImages']['tmp_name'];
			$_FILES['userImages']['error'] = $files['userImages']['error'];
			$_FILES['userImages']['size'] = $files['userImages']['size'];
			$this->upload->initialize($config);
			$this->upload->do_upload('userImages');
			$data = $this->upload->data();
			$images = $path . $data['file_name'];
			return $images;
		}else{
			$user = $this->session->userdata('userdata');
			return $user['image'];
		}
	}
}