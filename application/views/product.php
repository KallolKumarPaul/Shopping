<?php
include('admin_header.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="<?php echo base_url()?>/public/css/style1.css"/>
	<title>product</title>
</head>
<body>
	<div class="p_main">
		<h1>Add a Item for Sell</h1>
	<form action="<?php echo base_url()?>index.php/Shoppyadmin/product_insert" method="post" enctype="multipart/form-data">
		<center>
<input type="text" placeholder="Seller Id" name="sellerid"><br>
<input type="text" placeholder="Product Name" name="name" required><br>
<select name="catagory">
		<option>Select a Catagory</option>
		<option value="maleclothes">Male Clothes</option>
		<option value="maleaccessories">Male Accessories</option>
		<option value="femaleclothes">Female Clothes</option>
		<option value="femaleaccessories">Female Accessories</option>
		<option value="kidsclothes">Kids Clothes</option>
		<option value="kidsaccessories">Kids Accessories</option>
		<option value="kidsfoods">Kids Foods</option>
		<option value="laptop">Laptop</option>
		<option value="mobile">Mobile</option>
		<option value="camera">Camera</option>
		<option value="shoes">Shoes</option>
		<option value="sunglass">Sunglass</option>
</select>
<br>
<input type="text" placeholder="Description" name="description" required><br>
<input type="text" placeholder="Brand" name="brand" required><br>
<input type="text" placeholder="Price" name="price" required><br>
<input type="text" placeholder="Stock" name="stock" required><br>
<input type="file" placeholder="Image" name="image" required><br>
<input type="Submit" id="submit" name="submit" value="Insert">
</center>
</form>
</div>
</body>
</html>
<?php
include('admin_footer.php');
 ?>
