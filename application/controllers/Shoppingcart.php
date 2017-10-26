<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Shoppingcart extends CI_Controller 
{
	public function index()
	{
		$this->load->view('shopping-user');
	}
    function main()
    {
        $this->load->view('header');
        $this->load->view('main');
        $this->load->view('footer');
    }
    function registration_view()
    {
        $this->load->view('header');
        $this->load->view('shopping-user');
        $this->load->view('footer');
    }
    function login()
    {
        $this->load->view('header');
        $this->load->view('signin');
        $this->load->view('footer');
    }
    function user_insert()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Shopping_model');
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $password=md5($this->input->post('password'));
            $address=$this->input->post('address');
            $pincode=$this->input->post('pincode');
            $location=$this->input->post('city');
            $gender=implode(",",$this->input->post('gen'));
            $mobile=$this->input->post('mobile');
            $ins=$this->Shopping_model->user_insert($name,$email,$password,$address,$pincode,$location,$gender,$mobile);
            redirect('Shoppingcart/main');

            // $this->load->view('main');
        }
        else
        {
            redirect('Shoppingcart/registration_view');
        }
    }
    function login_user()
    {
        if ($this->input->post('submit')) 
        {
            $this->load->model('Shopping_model');
            $email=$this->input->post('email');
            $password=md5($this->input->post('password'));
            $login=$this->Shopping_model->login($email,$password);
            if(count($login)==1)
            {
                $id = $login[0]['id'];
                $this->session->set_userdata('id',$id);
                $msg=$this->session->set_flashdata('success','Login successfull');
                redirect('Shoppingcart/main');
            }
            else
            {
                $msg1=$this->session->set_flashdata('error','Login faild');
                redirect('Shoppingcart/login');
            }
        }
    }
    public function profile()
    {  
        if($this->session->userdata('id')!='')
        {
        $this->load->model('Shopping_model');
        $id=$this->session->userdata('id');
        $data['profile']=$this->Shopping_model->get_profile_data($id);
        $this->load->view('header');
        $this->load->view('profile',$data);
        $this->load->view('footer');
        }
        else
        {
            redirect('Shoppingcart/main');
        }
    } 
    public function get_profile($id)
    {
        $this->load->model('Shopping_model');
        $data['profile']=$this->Shopping_model->get_profile_data($id);
        $this->load->view('edit_user',$data);
        $this->load->view('passchnge',$data);

    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Shoppingcart/main');
    }
}