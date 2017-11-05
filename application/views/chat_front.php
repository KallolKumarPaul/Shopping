
<!DOCTYPE html>
<html>
<head>
	<title>Chatbot</title>
	<script src="https://unpkg.com/rivescript@latest/dist/rivescript.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>public/bot_js/main.js"></script>
</head>
<body>
	<center>
	<input type="text" placeholder="Enter your message" name="msg" id="msg">
	<p>tips: Enter to send message</p>
	<div id="wrapper">
	<div id="bot"></div>
	</div>
	<br>
	<div id="d1" placeholder="Enter your order id" style="display: none">
	<form action='index.php' method="post">
	<input type="text" id="data" name="data" value=""/>
	<input type="submit" name="btn1" value="Confirm">
	</form>
	</div>
	</center>
	<style media="screen">
#wrapper{
	border: 2px solid green;
    border-radius: 5px;
		margin-left:500px;
		margin-right: 500px;
		padding-bottom: 200px;
}
	</style>
</body>
</html>
