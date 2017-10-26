<?php
defined('BASEPATH') OR EXIT('No Direct script execution allowed :D');
class Db_Controller extends CI_Controller{
	public function index(){
		$this->load->view('Registration');
	}
		function getData(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$city = $this->input->post('city');
		$pre_skill = $this->input->post('sk');
		$skill = implode(',',$pre_skill);
		$gender_pre = $this->input->post('gender');
		$gender = implode('',$gender_pre);
		$image = $this->do_upload();
			#Load model
		$this->load->model('Data_handling');
		$st = $this->Data_handling->insert($name, $email, $password, $city, $skill, $gender, $image);

		if($st == 1){
			// $this->session->flash_data()
			$this->load->view('Login');
		}
		else{
			echo "Data Insertion Failed";
			}
		}

		function update($id){
		$name = $this->input->post('name');
		$city = $this->input->post('city');
		$pre_skill = $this->input->post('sk');
		$skill = implode(',',$pre_skill);
		$gender_pre = $this->input->post('gender');
		$gender = implode('',$gender_pre);
		$this->load->model('Data_handling');
		$st = $this->Data_handling->update($id, $name, $city, $skill, $gender);
		if($st == 1){
			// $this->session->flash_data()
			$user_info['user_details'] = $this->Data_handling->get_info($id);
			$this->load->view('profile', $user_info);
		}
		else{
			echo "Data Update Failed";
			}

		}

	public function do_upload(){

	$config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    // $config['remove_spaces'] = TRUE;
    if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('image')) {
        $error = array('error' => $this->upload->display_errors());
            print_r($error);
    } else {

        $data = $this->upload->data();
        return $data['file_name'];
    }
	}

	// Login part
	function load_login(){
		$this->load->view('Login');
	}

	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		// check if those are valid or not
		$this->load->model('Data_handling');
		$this->load->library('session');
		$status = $this->Data_handling->check($email, $password);
		if($status == '0'){
			$msg = "Email you provide is not in our database";
			$this->session->set_flashdata('msg',$msg);
			redirect('Db_Controller/load_login');
		}

		$id = substr($status,5);
		$log_status = substr($status,0,5);

		if($log_status == 'valid'){
			$this->session->set_userdata('id',$id);
			$this->load->model('Data_handling');
			$user_info['user_details'] = $this->Data_handling->get_info($id);
			$this->load->view('profile', $user_info);
		}
		else if($status == 'invalid'){
			$msg = "Your login credententials are invalid";
			$this->session->set_flashdata('msg',$msg);
			redirect('Db_Controller/load_login');
		}
	}
	function load_update($id){
		$this->load->model('Data_handling');
		$upd['user_detail'] = $this->Data_handling->get_info($id);
		$this->load->view('update',$upd);
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('Db_Controller/load_login');
	}
}
?>