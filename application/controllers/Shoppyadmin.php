<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Shoppyadmin extends CI_Controller 
{
	function index(){
		$this->load->view('admin_login');
	}
	function product()
    {
        $this->load->view('product');
    }
    function product_insert()
    {
        $this->load->model('Admin_model');
        $sellerid=$this->input->post('sellerid');
        $name=$this->input->post('name');
        $category=implode(",",$this->input->post('catagory'));
        $price=$this->input->post('price');
        $stock=$this->input->post('stock');
        $config['upload_path']='public/upload/';
        $config['allowed_types']='gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('image'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('Shoppyadmin', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $file_name=$data['upload_data']['file_name'];
            $ins=$this->Admin_model->product_insert($sellerid,$name,$category,$price,$stock,$file_name);
            echo "$ins";

            // $this->load->view('signin');        
            redirect('Shoppyadmin/product');
        }
    }
    function admin_login()
    {
        $this->load->model('Admin_model');
        $email=$this->input->post('email');
        $password=md5($this->input->post('password'));
        $login=$this->Admin_model->adminlogin($email,$password);
        // print_r($login);die;
        if(count($login)==1)
        {
        $id = $login[0]['id'];
        // echo $id;die;
        $this->session->set_userdata('id',$id);
        // echo $this->session->userdata('id');
        $msg=$this->session->set_flashdata('success','Login successfull');
        // $this->load->view('profile');
        redirect('Shoppyadmin/product');
        }
        else
        {
        echo $msg1=$this->session->set_flashdata('error','Login faild');
        redirect('Shoppyadmin');
        }
        // }
    }
}
?>