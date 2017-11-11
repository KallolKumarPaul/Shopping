<?php
class Model1 extends CI_Model{
  function data(){
    $query = "SELECT * FROM product";
    $a = $this->db->query($query)->result_array();
    return $a;
  }
 
  function insert($name, $email, $password){
    $data = array('name' => $name, 'email'=>$email, 'password'=>$password);
    $a = $this->db->insert('seller',$data);
    return $a;
  }
  function search_result($data)
  { 
    $this->db->like('name', $data);
    $res = $this->db->get('product')->result_array();
    return $res; 
  }
  function search($search)
  {
    $query="SELECT * from product WHERE name LIKE '%$search%'";
    $a=$this->db->query($query)->result_array();
    return $a;
  }
  function get_log($email, $password){
      $query = "SELECT password,id FROM seller WHERE email='$email'";
      $res = $this->db->query($query);
      $row = $res->num_rows();
      $pass = $res->result_array();
      if($row == 0){
        return "Not_exist";
      }
      else{
        if($password == $pass[0]['password']){
          return "Valid".$pass[0]['id'];
        }
        else{
          return "Invalid";
        }
      }
  }
}
 ?>