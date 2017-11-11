<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title> 
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
    <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<?php
if ($this->session->userdata('id')!='') {
	include('header.php');
}
else
{
	include('header_logout.php');
}
?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="<?php echo base_url()?>index.php/Shoppy/product_view/1">Cloths</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppy/product_view/2">Accessories</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="<?php echo base_url()?>index.php/Shoppy/product_view/3">Cloths</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppy/product_view/4">Accessories</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#kids">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											KIDS
										</a>
									</h4>
								</div>
								<div id="kids" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="<?php echo base_url()?>index.php/Shoppy/product_view/5">Cloths</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppy/product_view/6">Accessories</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppy/product_view/7">Baby Foods</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#electronics">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Electronics
										</a>
									</h4>
								</div>
								<div id="electronics" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="<?php echo base_url()?>index.php/Shoppy/product_view/8">Laptop</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppy/product_view/9">Mobile</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppy/product_view/10">Camera</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url()?>index.php/Shoppy/product_view/11">Shoes</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url()?>index.php/Shoppy/product_view/12">Sunglasses</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
<!-- 						<div class="price-range">
							<h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div> -->

						<div class="shipping text-center"><!--shipping-->
							<img src="<?php echo base_url()?>public/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
										<?php if(isset($product) && $product!=''){
						foreach($product as $prdt){ 
						?>
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo base_url()?>public/upload/<?php echo $prdt['image']; ?>"/>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information">

								<img src="<?php echo base_url()?>public/images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $prdt['name']?></h2>
								<p>Web Id:<?php echo $prdt['id']?></p>
								<img src="" alt="" />
								<span>
									<span><?php echo $prdt['price']?></span>
									<label>Quantity:</label>
									<input type="text" value="<?php echo $prdt['stock']?>" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"><a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$prdt['id']?>"></i>
										Add to cart
									</button>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> <?php echo $prdt['brand']?></p>
								<a href="www.facebook.com"><img src="<?php echo base_url()?>public/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Specification</a></li>
								<li><a href="#stock" data-toggle="tab">Product Stock</a></li>
								<!-- <li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li> -->
							</ul>
						</div>
							<div class="tab-pane fade active in" id="details" >
								<div class="col-sm-12">
									<p>Specification: <?php echo $prdt['description']?></p>
								</div>
							</div>
							<div class="tab-pane fade active in" id="stock" >
								<div class="col-sm-12">
									<p>Stock: <?php echo $prdt['stock'];?></p>
									<?php }} ?>
								</div>
							</div>

						</div>
					</div><!--/category-tab-->



				</div>
			</div>
		</div>
	</section>
<?php
include('footer.php');
?>
    <script src="<?php echo base_url()?>public/js/jquery.js"></script>
	<script src="<?php echo base_url()?>public/js/price-range.js"></script>
    <script src="<?php echo base_url()?>public/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>public/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()?>public/js/main.js"></script>
</body>
</html>
