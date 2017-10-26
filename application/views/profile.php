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
<form action="<?php echo base_url()?>index.php/Shoppingcart/user_insert" method="post" enctype="multipart/form-data">
<table border="0" align="center">
<tr>
<th><h4><center><span id="p1">Registration</span></center></h4></th>
</tr>
<tr>
<td>
<input type="text" name="name" id="name" placeholder="Enter name" required="this " value="<?php echo $val['name'];?>"><br>
</td>
</tr>
<tr>
<td>
<input type="text" id="email" name="email" placeholder="Enter your email id" value="<?php echo $val['email'];?>">
</td>
</tr>
<tr>
<td>
<input type="text" id="address" name="address" placeholder="Enter your address" value="<?php echo $val['address'];?>">
</td>
</tr>
<tr>
<td>
<input type="text" id="pincode" name="pincode" placeholder="Enter your pincode" value="<?php echo $val['pincode'];?>">
</td>
</tr>
<tr>
<td><center><span id="p4">Location</span><br>
<input type="text" name="text" value="<?php echo $val['location'];?>" readonly></center></td>
</tr>
<tr>
<td><center><span id="p4">Gender</span><br>
<input type="text" name="text" value="<?php echo $val['gender'];?>" readonly></center></td>
</tr>
<tr>
<td>
<input type="text" name="mobile" id="mobile" placeholder="Enter your mobile no" class="numbersonly" value="<?php echo $val['mobile'];}}?>">
</td>
</tr>
<tr>
	<th><center><a href="<?php echo base_url()?>index.php/Shoppingcart/logout/<?php echo $val['id'];?>">Sign Out</a></center></th>
</tr>
</table>
</form>
</body>
</head>
</html>

