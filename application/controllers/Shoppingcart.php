<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Shoppingcart extends CI_Controller
{
	public function index()
	{
		$this->load->view('main');
	}
    function main()
    {
        // $this->load->view('header_logout');
        $this->load->view('main');
        // $this->load->view('footer');
    }
    function login()
    {
        $this->load->view('login');
    }
    function user_insert()
    {
            $this->load->model('Shopping_model');
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $password=md5($this->input->post('password'));
            $address=$this->input->post('address');
            $pincode=$this->input->post('pincode');
            $mobile=$this->input->post('mobile');
            $location=$this->input->post('city');
            $gender=implode(",",$this->input->post('gen'));
            $ins=$this->Shopping_model->user_insert($name,$email,$password,$address,$pincode,$mobile,$location,$gender);
            redirect('Shoppingcart/login');
    }
	function myorder()
    {
			$this->load->model('Model2');
			$a = $this->Model2->pre_order_info();
            $re = '';
			foreach ($a as $value)
            {
				$re .= $value['product_id'].",";
			}
			if($temp['order_data'] = $this->Model2->pr_info($re))
				{
                    $this->load->view('myorder',$temp);
                }
            else
            {

                $this->load->view('myorder');
            }
	}
    function login_user()
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
                redirect('Shoppingcart/profile');
                // $this->load->view('main');
            }
            else
            {
                $msg1=$this->session->set_flashdata('error','Login faild');
                redirect('Shoppingcart/login');
            }
    }
    function profile()
    {
        if($this->session->userdata('id')!='')
        {
        $this->load->model('Shopping_model');
        $id=$this->session->userdata('id');
        $data['profile']=$this->Shopping_model->get_profile_data($id);
        $this->load->view('user_profile',$data);
        }
        else
        {
            redirect('Shoppingcart/main');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('Shoppy') ;

    }
    function profile_input()
    {
        if ($this->input->post('logout'))
        {
            $this->session->sess_destroy();
            redirect('Shoppingcart/main');
        }
        if ($this->input->post('imageupload'))
        {
            $this->load->model('Shopping_model');
            $data=$this->Shopping_model->get_profile_data($id);
            $id=$this->session->userdata('id');
            $config['upload_path']='public/upload/';
            $config['allowed_types']='gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('img'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Shoppingcart', $error);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $file_name=$data['upload_data']['file_name'];
                $ins=$this->Shopping_model->image_insert($file_name);
                echo "$ins";
                redirect('Shoppingcart/main');
            }
        }
    }
    function get_profile($id)
    {
        $this->load->model('Shopping_model');
        $data['profile']=$this->Shopping_model->get_profile_data($id);
        $this->load->view('edit_user',$data);
    }
    function edituser()
    {
        if($this->session->userdata('id')!='')
        {
            $this->load->model('Shopping_model');
            $id=$this->session->userdata('id');
            $data['edituser']=$this->Shopping_model->get_profile_data($id);
            // $this->load->view('header');
            $this->load->view('user_edit_profile',$data);
        }
        else
        {
            redirect('Shoppingcart/profile');
        }
    }
    function edit()
    {
        if ($this->input->post('update'))
        {
            $this->load->model('Shopping_model');
            $name=$this->input->post('name');
            $address=$this->input->post('address');
            $pincode=$this->input->post('pincode');
            $location=$this->input->post('city');
            $gender=implode(",",$this->input->post('gen'));
            $mobile=$this->input->post('mobile');
            echo $mobile;
            if($_FILES['img']=='')
            {
                $file_name='';
            }
            $config['upload_path']='public/upload/';
            $config['allowed_types']='gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('img'))
            {
                $error = array('error' => $this->upload->display_errors());
                // $this->load->view('user_edit_profile', $error);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $file_name=$data['upload_data']['file_name'];

            }
            $ins=$this->Shopping_model->update($name,$address,$pincode,$location,$gender,$mobile,$file_name);
                echo "$ins";
            redirect('Shoppingcart/profile');
                // $this->load->view('main');
        }
    }
}
