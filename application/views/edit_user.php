<?php
echo $this->session->flashdata('success');
if(isset($edituser) && count($edituser)!=0)
{
foreach($edituser as $val)
{
	$g=explode(",",$val['gender']);?>
<!DOCTYPE html>
<html>
<head>
<title>Sign up</title>
<body background="" height="100%" width="100%">
<form action="<?php echo base_url()?>index.php/Shoppingcart/edit" method="post" enctype="multipart/form-data">
<table border="0" align="center">
<tr>
<th><h4><center><span id="p1">Update Profile</span></center></h4></th>
</tr>
<tr>
<td>
<label class="fileContainer">
    Click here to trigger the file uploader!
    <input type="file" name="img"/>
</label>
</td>
</tr>
<tr>
    <td><center><img class="img-circle" src="<?php echo base_url().'public/upload/'.$val['image']?>" height="80px" width="80px"></center></td>
</tr>
<tr>
<td><center>
<input type="text" name="name" id="name" placeholder="Enter name" value="<?php echo $val['name'];?>"></center>
</td>
</tr>
<tr>
<td><center>
<input type="text" id="email" name="email" placeholder="Enter your email id" value="<?php echo $val['email'];?>" readonly></center>
</td>
</tr>
<tr>
<td><center>
<input type="text" id="address" name="address" placeholder="Enter your address" value="<?php echo $val['address'];?>"></center>
</td>
</tr>
<tr>
<td><center>
<input type="text" id="pincode" name="pincode" placeholder="Enter your pincode" value="<?php echo $val['pincode'];?>"></center>
</td>
</tr>
<tr>
<td><center><span id="p2">Location</span><br>
<select name="city" id="cty">
	<option value=""<?php echo ($val['location']=="")?'selected':''?>>Select</option>
	<option value="Kolkata"<?php echo ($val['location']=='Kolkata')?'selected':'Kolkata'?>>Kolkata</option>
	<option value="Mumbai"<?php echo ($val['location']=='Mumbai')?'selected':''?>>Mumbai</option>
	<option value="Delhi"<?php echo ($val['location']=='Delhi')?'selected':''?>>Delhi</option>
	<option value="Chennai"<?php echo ($val['location']=='Chennai')?'selected':''?>>Chennai</option>
	<option value="Others"<?php echo ($val['location']=='Others')?'selected':''?>>Others</option></select>
	<input type="text" name="city1" id="cti" style="display:none" placeholder="Enter your city name">
</td>
</tr>
<tr>
<td><center><span id="p2">Gender</span><br>
	<label><input type="radio" name="gen[]" id="m" value="Male"<?php echo(in_array('Male',$g)?'checked':'')?>>Male</label>
	<label><input type="radio" name="gen[]" id="f" value="Female"<?php echo (in_array('Female',$g)?'checked':'')?>>Female</label>
	<label><input type="radio" name="gen[]" id="o" value="Others"<?php echo (in_array('Others',$g)?'checked':'')?>>Others</label>
</center>
</td>
</tr>
<tr>
<td><center>
<input type="text" name="mobile" id="mobile" placeholder="Enter your mobile no" class="numbersonly" value="<?php echo $val['mobile'];}}?>"></center>
</td>
</tr>
<tr>
	<th><center><input type="submit" name="update" value="Update">
	</th>
</tr>
</table>
</form>
</body>
</head>
</html>
<style type="text/css">
	.fileContainer
{
    overflow: hidden;
    position: relative;
}
.fileContainer [type=file] 
{
    cursor: inherit;
    display: block;
    font-size: 999px;
    filter: alpha(opacity=0);
    min-height: 100%;
    min-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
}
.img-circle {
    border-radius: 50%;
}
</style>
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
			// if($("#city").val()=='Others')
			// {
			// 	if($("#city1").val()=="")
			// 	{
			// 	alert("Write your City name");
			// 	$("#city1").focus();
			// 	return false;
			// 	}
			// }
			if($("#mobile").val()=='')
			{
				alert("Enter your mobile no");
				$("#mobile").focus();
				return false;
			}
		});
		// $("#city").change(function()
		// {
		// 		var a=$("#city").val();
		// 		if(a=='Others')
		// 		{
		// 			$("#city1").show();
		// 		}
		// 		else
		// 		{
		// 			$("#city1").hide();
		// 		}
		// });
	});
</script>