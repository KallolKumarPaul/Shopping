<?php
class Product_model extends CI_Model{
  function get_product()
  {
    // echo "hello";die;
    $query = "SELECT * FROM product";
    $a = $this->db->query($query)->result_array();
    return $a;
  }
  function search_result($data){
    $this->db->like('name', $data);
    $res = $this->db->get('product')->result_array();
    return $res;
  }
}
 ?>
