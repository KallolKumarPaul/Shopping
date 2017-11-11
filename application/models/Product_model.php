<?php
class Product_model extends CI_Model
{ 
  function get_product()
  {
    $query = "SELECT * FROM product ORDER By RAND() limit 10 "; 
    $a = $this->db->query($query)->result_array();
    return $a;
  }
  function get_each_product($p_id)
  {
    $query="SELECT * FROM product WHERE id='$p_id'";
    $a = $this->db->query($query)->result_array();
    return $a;
  }
  function search_result($data) 
  {
    $this->db->like('name', $data);
    $res = $this->db->get('product')->result_array();
    return $res;
  }
  function product_view($a)
  {
    if($a == 1)
    {
      $query="SELECT * FROM product WHERE category='maleclothes'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
    if($a == 2)
    {
      $query="SELECT * FROM product WHERE category='maleaccessories'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
    if($a == 3)
    {
      $query="SELECT * FROM product WHERE category='femaleclothes'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
    if($a == 4)
    {
      $query="SELECT * FROM product WHERE category='femaleaccessories'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
    if($a == 5)
    {
      $query="SELECT * FROM product WHERE category='kidsclothes'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
    if($a == 6)
    {
      $query="SELECT * FROM product WHERE category='kidsaccessories'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
    if($a == 7)
    {
      $query="SELECT * FROM product WHERE category='kidsfoods'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
    if($a == 8)
    {
      $query="SELECT * FROM product WHERE category='laptop'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
    if($a == 9)
    {
      $query="SELECT * FROM product WHERE category='mobile'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
    if($a == 10)
    {
      $query="SELECT * FROM product WHERE category='camera'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
    if($a == 11)
    {
      $query="SELECT * FROM product WHERE category='shoes'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
    if($a == 12)
    {
      $query="SELECT * FROM product WHERE category='sunglass'";
      $a=$this->db->query($query)->result_array();
      return $a;
    }
  }
}
 ?>
