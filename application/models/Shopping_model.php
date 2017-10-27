<?php
class Shopping_model extends CI_Model
{
	function user_insert($name,$email,$password,$address,$pincode,$location,$gender,$mobile)
	{
		$data=array('name' =>$name,'email' =>$email,'password'=>md5($password),'address' =>$address,'pincode'=>$pincode,'location'=>$location,'gender' =>$gender,'mobile'=>$mobile);
		return $this->db->insert('user',$data);
	}
	function login($email,$password)
	{
		$data=array('email' =>$email ,'password'=>md5($password));
		return $this->db->get_where('user',$data)->result_array();
	}
	function get_profile_data($id)
	{
		return $this->db->get_where('user',array('id'=>$id))->result_array();
	}
	function image_insert($file_name)
	{	
		$id=$this->session->userdata('id');
		$this->db->where('id',$id);
		$data=array('image'=>$file_name);
		return $this->db->update('user',$data);
	}
	function update($name,$address,$pincode,$location,$gender,$mobile,$file_name)
	{
		$id=$this->session->userdata('id');
		if($file_name!='')
		{
			$this->db->where('id',$id);
			$data=array('name' =>$name,'address'=>$address,'pincode'=>$pincode,'location'=>$location,'gender'=>$gender,'mobile'=>$mobile,'image'=>$file_name);
	        $this->db->update('user', $data);
	    }
	    else
	    {
	    	$this->db->where('id',$id);
			$data=array('name' =>$name,'address'=>$address,'pincode'=>$pincode,'location'=>$location,'gender'=>$gender,'mobile'=>$mobile);
	        $this->db->update('user', $data);
	    }
	}
}
    
