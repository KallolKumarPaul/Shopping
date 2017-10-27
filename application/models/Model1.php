<?php
class Model1 extends CI_Model{
  function data(){
    $query = "SELECT * FROM product";
    $a = $this->db->query($query)->result_array();
    return $a;
  }
  function search_result($data){
    $this->db->like('name', $data);
    $res = $this->db->get('product')->result_array();
    return $res;
  }
  function get_log($email, $password){
    $mail = implode("",$email);
      $query = "SELECT password FROM seller WHERE email='$mail'";
      $res = $this->db->query($query);
      $row = $res->num_rows();
      $pass = $res->result_array();
      if($row == 0){
        return "Not_exist";
      }
      else{
        if($password == $pass[0]['password']){
          return "Valid";
        }
        else{
          return "Invalid";
        }
      }
  }
}
 ?>
