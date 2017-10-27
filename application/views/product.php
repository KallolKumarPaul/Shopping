<!DOCTYPE html>
<html>
<head>
	<title>product</title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/Shoppyadmin/product_insert" method="post" enctype="multipart/form-data">
		<center>
<table>
	<tr>
		<td>
Seller_id<input type="text" name="sellerid"><br>
Name<input type="text" name="name"><br>
<input type="radio" value="maleclothes" name="catagory[]">Male Clothes<br>
<input type="radio" value="maleaccessories" name="catagory[]">Male Accessories<br>
<input type="radio" value="femaleclothes" name="catagory[]">Fe-male Clothes<br>
<input type="radio" value="femaleaccessories" name="catagory[]">Fe-male Accessories<br>
<input type="radio" value="kidsclothes" name="catagory[]">Kids Clothes<br>
<input type="radio" value="kidsaccessories" name="catagory[]">Kids Accessories<br>
<input type="radio" value="laptop" name="catagory[]">Laptop<br>
<input type="radio" value="camera" name="catagory[]">Camera<br>
<input type="radio" value="shoes" name="catagory[]">Shoes<br>
Price<input type="text" name="price"><br>
Stock<input type="text" name="stock"><br>
Image<input type="file" name="image"><br>
<input type="Submit" name="submit" value="Insert">
</td>
</tr>
</table>
</center>
</form>
</body>
</html>