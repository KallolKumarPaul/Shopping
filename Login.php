<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<?php 
	if('' != $this->session->userdata('msg')){
		echo $this->session->userdata('msg');
	}
	?>
	<center>
	<form action="<?php echo base_url()?>Db_Controller/login" method="POST">
	<input type="text" name="email" placeholder="Email"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="submit" name="submit" value="Submit">
	</form>
	</center>
</body>
</html>