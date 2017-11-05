<?php
class Chatbot extends CI_Controller{
  function index(){
    $this->load->view('chat_front');
  }
  function get_data(){
    $data = $this->input->post('data');
    $a = $data[0];
    $this->load->model('Chat_info');
    $info = $this->Chat_info->get_info($a);
    echo $info;
  }
}
 ?>
