<?php
if ($this->session->userdata('id')!='') {
	include('header.php');
}
else
{
	include('header_logout.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">
	<!-- <section id="slider"><!--slider-->
		<!-- div class="container">
			<div class="row">
				<div class="col-sm-12"> --> 
					<!-- <div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<p>Live with a modern look personality with soclicheclothing that offers women dresses online in large discounts prices and with the whole sale also.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div> 

								<div class="col-sm-6">
									<img src="<?php echo base_url()?>public/images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo base_url()?>public/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
 -->
				<!-- 			<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Buy what you don’t have yet, or what you really want, which can be mixed with what you already own. Buy only because something excites you, not just for the simple act of shopping.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url()?>public/images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo base_url()?>public/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<p>Online shopping gives me a reason to live for another 3-5 business days </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url()?>public/images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo base_url()?>public/images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider--> -->
 
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


<!-- 
						<div class="price-range">
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div> -->

						<div class="shipping text-center"><!--shipping-->
							<img src="<?php echo base_url()?>public/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

					</div>
				</div>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php
						if($this->session->userdata('product')!=''){
							$d=$this->session->userdata('product');
							foreach ($d as $value) {?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo base_url()?>public/upload/<?php echo $value['image']; ?>" height="200px" width="40px"/>
											<h2>Rs.<?php echo $value['price'];?></h2>
											<p><?php echo $value['name'];?></p>
											<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$value['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$value['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
											<a href="<?php echo base_url().'index.php/Shoppy/product_details_view/'.$value['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<img src="<?php echo base_url()?>public/upload/<?php echo $value['image']; ?>" height="180px" width="200px"/>
												<h2>Rs.<?php echo $value['price']?></h2>
												<p><?php echo $value['name']?></p>
												<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$value['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$value['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
												<a href="<?php echo base_url().'index.php/Shoppy/product_details_view/'.$value['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Details</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
									</ul>
								</div>
							</div>
						</div>
<?php }} ?>
						<!-- 							<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul> -->
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
