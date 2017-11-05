<?php
class Chat_info extends CI_Model{
  function get_info($data){
    $a = $this->db->query("SELECT name FROM product WHERE id='$data'")->result_array();
     return $a[0]['name'];
  }
}
 ?>
