<?php
class Data_handling extends CI_Model{
	function insert($name, $email, $password, $city, $skill, $gender, $image){
		$data = array('name' =>$name,'email'=>$email,'password'=>$password, 'city'=>$city, 'skill'=>$skill, 'gender'=>$gender, 'image'=>$image);
		$status = $this->db->insert('admin',$data);
		return $status;
	}

	function update($id, $name, $city, $skill, $gender){
		$this->db->where('id',$id);
		$data = array('name'=>$name, 'city'=>$city, 'skill'=>$skill, 'gender'=>$gender);
		$status = $this->db->update('admin',$data);
		return $status;
	}


	function check($email, $password){
		$a = $this->db->get_where('admin', array('email'=> $email));
		$rows = $a->num_rows();

		if($rows == 0){
			return 0;
		}
		else{
			$sql = "SELECT password,id from admin WHERE email = ?";
			$res = $this->db->query($sql,array($email));
			foreach($res->result_array() as $p){
			$pass = $p['password'];
			$id = $p['id'];
			}
			
			if(md5($password) == $pass){
				return 'valid'.$id;
			}
			else{
				return 'invalid';
			}
		}
	}
	function get_info($id){
		$query = "SELECT * FROM admin WHERE id = ?";
		$result = $this->db->query($query, array($id));
		return $result->result_array();
	}
}
?>