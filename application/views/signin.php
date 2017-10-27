<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center>
<hr></hr>
<div id="main">
<form action="<?php echo base_url()?>index.php/Shoppingcart/login_user" method="post">
		<label><input type="text" class="inp" id="email" placeholder="Email" name="email"><br>
		<label> <input type="password" class="inp" placeholder="Password" name="password"></label><br>
		<input type="checkbox" name="remember">Remember Me
		<center><input type="submit" class="btn" id="btn" name="submit" value="Login">
</center>
</form>
</div>
<span id="sd"></span>
</body>
</html>
<style type="text/css">
body
{
	font-family: sans-serif;
	/*background-color:  #88d7ec;*/
}
.inp
{
	height: 25px;
}
#sd
{
	margin-top: 100px;
	font-size: 20px;
}
input
{
	border-radius: 6px;
	font-size: 12px;
	margin-bottom: 10px;
	/*box-shadow: 2px 4px white;*/
}
#main
{
	background-color: #4ECAEE;
	margin-top: 100px;
	margin-bottom: 100px;
	box-shadow: 3px 2px 6px white;
	border: 4px solid #81B1BF;
	border-radius: 12px;
	margin-right: 400px;
	margin-left: 400px;		
}
hr
{
	margin-left: 100px;
	margin-right: 100px;
}
.btn:hover
{
	background-color:  #20da4d; 
}
</style>