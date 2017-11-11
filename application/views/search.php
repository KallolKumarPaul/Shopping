<?php
if ($this->session->userdata('id')!='')
{
	include('header.php');
}
else
{
	include('header_logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">
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
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->

						<div class="shipping text-center"><!--shipping-->
							<img src="<?php echo base_url()?>public/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<form action="<?php echo base_url()?>/index.php/Shoppy/search" method="post">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Search Items</h2> 
							<?php if(isset($search))
 {
 	foreach($search as $val)
 	{
	// print_r($val);
?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo base_url()?>public/upload/<?php echo $val['image'] ?>" alt="productImage" height="200px" width="200px"/>
											<h2>Rs.<?php echo $val['price']?></h2>
											<p><?php echo $val['name']?></p>
											<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$val['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$val['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
											<a href="<?php echo base_url().'index.php/Shoppy/product_details_view/'.$val['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Details</a>
										</div> 
										<div class="product-overlay">
											<div class="overlay-content">
												<img src="<?php echo base_url()?>public/upload/<?php echo $val['image']; ?>" height="200px" width="200px"/>
												<h2>Rs.<?php echo $val['price']?></h2>
												<p><?php echo $val['name']?></p>
												<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$val['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$val['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
												<a href="<?php echo base_url().'index.php/Shoppy/product_details_view/'.$val['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Details</a>
											</div>
										</div>
								</div>
								
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
									</ul>
								</div>
							</div>
						</div>
						<?php } }?>
						<!-- <ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul> --> -->
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	<script src="<?php echo base_url()?>public/js/jquery.js"></script>
	<script src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>public/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url()?>public/js/price-range.js"></script>
    <script src="<?php echo base_url()?>public/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()?>public/js/main.js"></script>
</body>
</html>
<?php 
include('footer.php');
?>
