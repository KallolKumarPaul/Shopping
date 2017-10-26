<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<center>
	<form action="<?php echo base_url()?>Db_Controller/getData" method="POST" enctype="multipart/form-data">
	<input type="text" name="name" placeholder="Name"><br>
	<input type="text" name="email" placeholder="Email"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<select name="city">
		<option>Select a City</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Delhi">Delhi</option>
		<option value="Bangalore">Bangalore</option>
		<option value="Jaipur">Jaipur</option>
		<option value="Ranchi">Ranchi</option>
		<option value="Kolkata">Kolkata</option>
		<option value="Jaisalmir">Jaisalmir</option>
</select><br>
Select skill: C<input type="checkbox" name="sk[]" value="C">
					  C++<input type="checkbox" name="sk[]" value="C++">
					  PHP<input type="checkbox" name="sk[]" value="PHP">
					  Java<input type="checkbox" name="sk[]" value="Java">
	<br>
	Gender: Male<input type="radio" value="Male" name="gender[]">Female<input type="radio" value="Female" name="gender[]">Others<input type="radio" value="Others" name="gender[]"><br>
	<input type="file" name="image"><br>
	<input type="submit" name="submit" value="Submit">
	</form>
</center>
</body>
</html>