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
    function admin_view(){
      $this->load->view('admin_main');
    }
  
        function profile_view(){
          $this->load->view('seller_profile');
        }

        function seller_log(){
          $this->load->view('header_logout');
          $this->load->view('seller_login');
        }

        function seller_signup(){
          $this->load->view('header_logout');
            $this->load->view('seller_signup');
        }

        function load_cart(){
          $this->load->view('cart');
        }
        function add_cart($item){
          $this->session->set_userdata('item',$item);
          redirect('Shoppy/index');
        }
        function logout(){
            $this->session->sess_destroy();
            redirect('Shoppy/seller_log');
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

        function add_item(){
          $this->load->view('product');
        }

          function seller_log_back(){
            $this->load->model('Model1');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $status = $this->Model1->get_log($email, $password);
            if($status == "Not_exist"){
                $msg = "Email you provide is not exist in our database";
                $this->session->set_flashdata('msg',$msg);
                redirect('Shoppy/seller_log');
            }
            else if($status == "Valid"){
              $this->session->set_userdata('mail',$email);
              redirect('Shoppy/profile_view');
            }
            else if($status == "Invalid"){
              $msg = "Wrong email or password";
              $this->session->set_flashdata('msg',$msg);
              redirect('Shoppy/seller_log');
            }
          }
          function signup_insert(){
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('Model1');
            $status = $this->Model1->insert($name, $email, $password);
            if($status == 0){
              $msg = "Insertion Failed for some technical issue, Please try again.";
              $this->session->set_flashdata('insert_failed',$msg);
              redirect('Shoppy/seller_signup');
            }else {
              redirect('Shoppy/seller_log');
            }
          }

          function image_upload(){
          $a = $this->do_upload();
          $name = $a['upload_data']['file_name'];
          $this->db->set('image', $name);
          $mail = $this->session->userdata('mail');
          $this->db->where('email', $mail);
          $this->db->update('seller');
          redirect('Shoppy/profile_view');
          }
        function do_upload(){
        $config['upload_path'] = './public/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = FALSE;
        $config['remove_spaces'] = TRUE;
        if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('img')) {
           $error = array('error' => $this->upload->display_errors());
           print_r($error);
        } else {
            return array('upload_data' => $this->upload->data());
        }
    }

  	function add_to_cart($pid){
  		echo "$pid";
  	}


  }
 ?>
