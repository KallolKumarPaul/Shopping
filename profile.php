<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body><center>
	<?php
	if(isset($user_details)){
		foreach($user_details as $ud){
			echo "Hi,".$ud['name'].
			" welcome to your profile<br><br>"."Your Email --".$ud['email'];
	echo "<br>
			<img src=".base_url()."/uploads/".$ud['image']." height='100' width='100'><br>
		<a href=".base_url()."Db_Controller/load_update/".$ud['id'].">Update</a>
		<a href=".base_url()."Db_Controller/logout/".">Logout</a>";
	}
}
?>
</center>
</body>
</html>