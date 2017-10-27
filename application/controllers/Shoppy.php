<?php
  class Shoppy extends CI_Controller{

    function index(){
      $this->load->view('main');
    }

    function seller_log(){
      $this->load->view('seller_login');
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
    function search_view(){
        $this->load->view('search');
    }
      function seller_log_back(){
        $this->load->model('Model1');
        $email['mail'] = $this->input->post('email');
        $password = $this->input->post('password');
        $status = $this->Model1->get_log($email, $password);
        if($status == "Not_exist"){
            $msg['m'] = "Email you provide is not exist in our database";
          $this->load->view('seller_login',$msg);
        }
        else if($status == "Valid"){
          $this->load->view('seller_profile',$email);
        }
        else if($status == "Invalid"){
          $msg['m'] = "Wrong email or password";
          $this->load->view('seller_login',$msg);
        }
      }
  }
 ?>
