<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Shoppyadmin extends CI_Controller
{
	function index()
    {
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
        $category=$this->input->post('catagory');
        $description=$this->input->post('description');
        $brand=$this->input->post('brand');
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
            $ins=$this->Admin_model->product_insert($sellerid,$name,$category,$description,$brand,$price,$stock,$file_name);
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
        $this->session->set_userdata('id',$id);
        $msg=$this->session->set_flashdata('success','Login successfull');
        redirect('Shoppyadmin/admin_view');
        }
        else
        {
        echo $msg1=$this->session->set_flashdata('error','Login faild');
        redirect('Shoppyadmin');
        }
    }
    function admin_logout()
    {
        $this->session->sess_destroy();
        redirect('Shoppyadmin');
    }
	function admin_view()
    {
        $this->load->model('Admin_model');
        $a['users'] = $this->Admin_model->total_user();
        $a['order'] = $this->Admin_model->total_order();
        $a['product'] = $this->Admin_model->total_product();
		$this->load->view('admin_profile',$a);
	}
    function admin_allproduct()
    {
        $this->load->model('Admin_model');
        $a['data']=$this->Admin_model->admin_allproduct();
        $this->load->view('admin_allproduct',$a);
    }
    function admin_allorder()
    {
        $this->load->model('Admin_model');
        $b['order']=$this->Admin_model->admin_allorder();
        // print_r($a); 
        $this->load->view('admin_allorder',$b);  
    }
    function seller_info(){
        $this->load->model('Admin_model');
        $sell['seller']=$this->Admin_model->seller_info();
        $this->load->view('admin_allseller',$sell);

    }
    function delete_product($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->delete_product($id);
        redirect('Shoppyadmin/admin_allproduct');
    }
    function admin_alluser(){
        $this->load->model('Admin_model');
        $u['user']=$this->Admin_model->all_user();
        $this->load->view('admin_alluser',$u);
    }
    function delivery_action($id,$status){
        $this->load->model('Admin_model');
        $u=$this->Admin_model->get_delivery_report($id,$status);
        // print_r($u['delivery_report']);
        redirect('Shoppyadmin/admin_allorder');
    }
}
