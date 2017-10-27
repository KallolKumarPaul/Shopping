<?php
  class Shoppy extends CI_Controller
  {
    function index()
    {
		$this->load->model('product_model');
		// echo "hi";die;
		$data['product']=$this->product_model->get_product();
      // $this->load->view('header_logout');
      $this->load->view('main',$data);
      // $this->load->view('footer');
    }
    function seller_log(){
      $this->load->view('seller_log');
    }

    function seller_signup(){
        $this->load->view('seller_signup');
    }

    function search_data(){
      $data = $this->input->post('data');
      $this->load->model('model1');
      $result = $this->model1->search_result($data);
      foreach ($result as $value) {
        echo $value['name'];
      }
    }
  	function checkout()
  	{
   		 $this->load->view('checkout');
  	}
  	function add_to_cart($pid){
  		echo "$pid";
  	}
  }
 ?>
