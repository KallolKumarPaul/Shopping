<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center>
<hr></hr>
<div id="main">
<form action="<?php echo base_url()?>index.php/Shoppyadmin/admin_login" method="post" enctype="multipart-formdata">
		<label><input type="text" id="email" placeholder="Email" name="email" value="admin@gmail.com"><br>
		<label> <input type="password"  placeholder="Password" name="password" value="admin"></label><br>
		<center><input type="submit" class="btn" id="btn" name="submit" value="Login">
</center>
</form>
</div>
<span id="sd"></span>
</body>
</html>
