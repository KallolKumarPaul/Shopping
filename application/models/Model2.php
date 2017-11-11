<?php
  class Model2 extends CI_Model{
    function update_order($p_id){
      $a = '';
      if($this->session->userdata('id')!=''){
      $id = $this->session->userdata['id'];
      $data = array('User_id' => $id, 'product_id'=> $p_id);
      $this->db->insert('cart',$data);
    }
    else {
      if($this->session->userdata('product_id')==''){
      $a .= $p_id;
      $this->session->set_userdata('product_id',$a);
    }else {
      $b = $this->session->userdata('product_id');
      $a .= ",".$p_id;
      $b .= $a;
      $this->session->set_userdata('product_id',$b);
    }
    }
    }
    function pr_info($pr){
      if($pr!=''){
      $str = rtrim($pr,',');
      $query = "SELECT * FROM `product` WHERE id IN ($str)";
      return $this->db->query($query)->result_array();
    }
    else{

    }
    }
    function sales_info($id){
      $query = "SELECT * FROM `product` WHERE seller_id = $id";
      return $this->db->query($query)->result_array();
    }

    function get_details(){
      $id = $this->session->userdata['id'];
      $query = "SELECT product.name, product.id, product.price, product.image from product INNER JOIN cart ON cart.product_id=product.id WHERE cart.User_id=$id";
      return $this->db->query($query)->result_array();
    }
    function details_unlogged($ar){
      $query = "SELECT *
          FROM `product`
         WHERE `id` IN ($ar)";
      return $this->db->query($query)->result_array();
    }
    function delete($p_id){
      $this->db->where('product_id', $p_id);
      $this->db->delete('cart');
    }
    function get_product(){
      $id = $this->session->userdata['id'];
      $query="SELECT * FROM product WHERE id='$id'";
      return $this->db->query($query)->result_array();
    }
    function order_confirm($id, $user_id, $name, $add1, $add2, $phone){
      return $this->db->insert('user_order',array('product_id'=> $id , 'user_id'=>$user_id, 'user_name' => $name, 'address'=>$add1, 'address2'=>$add2, 'phone'=>$phone));

    }
    function order_confirm_unlogged($ids, $name, $add1, $add2, $phone){
      $d = explode(',',$ids);
      foreach ($d as $id) {
         $a = $this->db->insert('user_order',array('product_id'=> $id , 'user_name' => $name, 'address'=>$add1, 'address2'=>$add2, 'phone'=>$phone));
      }
      return $a;
    }
    function update($name, $email, $designation, $status, $password){
      $data = array('name'=>$name, 'email'=>$email, 'designation'=>$designation,'status'=>$status, 'password'=>$password);
      return $this->db->update('seller',$data);
    }
    function pre_order_info(){
      $a = $this->session->userdata('id');
      $query = "SELECT * FROM  `user_order` WHERE user_id = '$a'";
      return $this->db->query($query)->result_array();
    }
  }
 ?>
