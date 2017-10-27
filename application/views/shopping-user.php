<!DOCTYPE html>
<html>
<head>
<title>Sign up</title>
<body background="" height="100%" width="100%">
<form action="<?php echo base_url()?>index.php/Shoppingcart/user_insert" method="post" enctype="multipart/form-data">
<table border="0" align="center">
<tr>
<th><h4><center><span id="p1">Registration</span></center></h4></th>
</tr>
<tr>
<td>
<input type="text" name="name" id="name" placeholder="Enter name" required="this "><br>
</td>
</tr>
<tr>
<td>
<input type="text" id="email" name="email" placeholder="Enter your email id">
</td>
</tr>
<tr>
<td>
<input type="password" id="password" name="password" placeholder="Enter your password">
</td>
<tr>
<td>
<input type="text" id="address" name="address" placeholder="Enter your address">
</td>
</tr>
<tr>
<td>
<input type="text" id="pincode" name="pincode" placeholder="Enter your pincode">
</td>
</tr>
<tr>
<td>
<select name="city" id="city">
	<option value="">Select</option>
	<option value="Kolkata">Kolkata</option>
	<option value="Mumbai">Mumbai</option>
	<option value="Delhi">Delhi</option>
	<option value="Chennai">Chennai</option>
	<option value="Others">Others</option></select>
	<input type="text" name="city1" id="city1" style="display:none" placeholder="Enter your city name">
</td>
</tr>
<tr>
<td>
<label><input type="radio" name="gen[]" id="m" value="Male">Male</label>
	<label><input type="radio" name="gen[]" id="f" value="Female">Female</label>
	<label><input type="radio" name="gen[]" id="o" value="Others">Others</label>
</td>
<tr>
<td>
<input type="text" name="mobile" id="mobile" placeholder="Enter your mobile no" class="numbersonly">
</td>
</tr>
<tr>
<td><input type="Submit" name="submit" id="submit" value="Submit">
<input type="Reset" name="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</head>
</html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/cssprimary.css">
<script src="<?php echo base_url();?>public/js/jquery-3.2.1.js"></script>
<script src="<?php echo base_url();?>public/js/jquery-ui.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$("#submit").click(function()
		{
			if($("#name").val()=="")
			{
				alert("Name can't be blanked");
				$("#name").focus();
				return false;
			}
			if($("#email").val()=="")
			{
				alert("Plese submit E-mail id");
				$("#email").focus();
				return false;
			}
			var main=$("#email").val();
			var at=main.indexOf("@");
			var dot=main.lastIndexOf(".");
			if(at<1 || dot<at+2 || dot+1>=main.length)
			{
				alert("Your E-mail is invalid");
				$("#email").focus();
				return false;
			}
			if($("#password").val()=="")
			{
				alert("Plese submit a password");
				$("#password").focus();
				return false;
			}
			if($("#address").val()=="")
			{
				alert("Plese write your own address");
				$("#address").focus();
				return false;
			}
			if($("#pincode").val()=="")
			{
				alert("Plese enter your pincode");
				$("#pincode").focus();
				return false;
			}
			if($("#city").val()=="")
			{
				alert("Select your City name");
				$("#city").focus();
				return false;
			}
			if($("#city").val()=='Others')
			{
				if($("#city1").val()=="")
				{
				alert("Write your City name");
				$("#city1").focus();
				return false;
				}
			}
			var flag1=0;
			var gen=$('[name="gen[]"]');
			for(var i=0;i<gen.length;i++)			
			{
				if(gen[i].checked)
				{
					flag1++;
				}
			}
			if(flag1==0)
			{
				alert("Select your Gender");
				return false;
			}
			if($("#mobile").val()=='')
			{
				alert("Enter your mobile no");
				$("#mobile").focus();
				return false;
			}
		});
		$("#city").change(function()
		{
				var a=$("#city").val();
				if(a=='Others')
				{
					$("#city1").show();
				}
				else
				{
					$("#city1").hide();
				}
		});
	});
</script>