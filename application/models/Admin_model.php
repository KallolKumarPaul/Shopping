<?php
class Admin_model extends CI_Model
{ 
	function product_insert($sellerid,$name,$category,$description,$brand,$price,$stock,$file_name)
	{
		$data=array('seller_id'=>$sellerid,'name'=>$name,'category'=>$category,'description'=>$description,'brand'=>$brand,'price'=>$price,'stock'=>$stock,'image'=>$file_name);
		// print_r($data);
		return $this->db->insert('product',$data);
	}
	function adminlogin($email,$password)
	{
		$data=array('email' =>$email ,'password'=>$password);

		// return 1;
		return $this->db->get_where('admin',$data)->result_array();
	}
	function admin_allproduct()
	{
		$query="SELECT * FROM product";
		return $this->db->query($query)->result_array();
		// return $query;
	}
	
	function admin_allorder()
	{
		$query="SELECT id,user_name,product_id,address FROM `user_order`";
		return $this->db->query($query)->result_array();
	}
	function total_user(){
		// $this->db->select('id');
		return $this->db->get('user')->result_array();
		// return $cnt;
	}

		function total_order(){
		return $this->db->get('user_order')->result_array();
			
	}
	function total_product(){
		return $this->db->get('product')->result_array();

	}
	function seller_info(){
		return $this->db->query('SELECT * FROM `seller`')->result_array();
	}
	function delete_product($id){
		return $this->db->query("DELETE FROM `product` WHERE id=$id");
	}
	function all_user(){
		$qry="SELECT * FROM `user`";
		return $this->db->query($qry)->result_array();
	}
	function get_delivery_report($id,$status){
		// echo $id;
		// echo $status;
		// $qry="UPDATE user_order SET status=(case when status=0 then 1 else 2 end) WHERE id='$id'"; 
		$qry="update user_order ";
		if($status==0)
			$qry.="set status=1 ";
		else{
			$qry.="set status=2 ";
		}
		$qry.="where id='$id'";
		return $this->db->query($qry);
	}
}
?>
