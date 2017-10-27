<?php
class Admin_model extends CI_Model
{
	function product_insert($sellerid,$name,$category,$price,$stock,$file_name)
	{
		$data=array('seller_id'=>$sellerid,'name'=>$name,'category'=>$category,'price'=>$price,'stock'=>$stock,'image'=>$file_name);
		print_r($data);
		return $this->db->insert('product',$data);
	}
	function adminlogin($email,$password)
	{
		$data=array('email' =>$email ,'password'=>$password);
		// return 1;
		return $this->db->get_where('admin',$data)->result_array();	
	}
	// function get_profile_data($id)
	// {
	// 	return $this->db->get_where('admin',array('id'=>$id))->result_array();
	// }
}
?>