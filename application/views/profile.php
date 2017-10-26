<?php
echo $this->session->flashdata('success');
if(isset($profile) && count($profile)!=0)
{
foreach($profile as $val)
{?>
<!DOCTYPE html>
<html>
<head>
<title>Sign up</title>
<body background="" height="100%" width="100%">
<form action="<?php echo base_url()?>index.php/Shoppingcart/profile_input" method="post" enctype="multipart/form-data">
<table border="0" align="center">
<tr>
<th><h4><center><span id="p1">Profile</span></center></h4></th>
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
<input type="text" name="name" id="name" placeholder="Enter name" required="this " value="<?php echo $val['name'];?>" readonly></center>
</td>
</tr>
<tr>
<td><center>
<input type="text" id="email" name="email" placeholder="Enter your email id" value="<?php echo $val['email'];?>" readonly></center>
</td>
</tr>
<tr>
<td><center>
<input type="text" id="address" name="address" placeholder="Enter your address" value="<?php echo $val['address'];?>" readonly></center>
</td>
</tr>
<tr>
<td><center>
<input type="text" id="pincode" name="pincode" placeholder="Enter your pincode" value="<?php echo $val['pincode'];?>" readonly></center>
</td>
</tr>
<tr>
<td><center><input type="text" name="text" value="<?php echo $val['location'];?>" readonly></center></td>
</tr>
<tr>
<td><center>
<input type="text" name="text" value="<?php echo $val['gender'];?>" readonly></center></td>
</tr>
<tr>
<td><center>
<input type="text" name="mobile" id="mobile" placeholder="Enter your mobile no" class="numbersonly" value="<?php echo $val['mobile'];}}?>" readonly></center>
</td>
</tr>
<tr>
	<th><center><input type="submit" name="logout" value="Log Out">
	<input type="submit" name="imageupload" value="upload"></center></th>
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
