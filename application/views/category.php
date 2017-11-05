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
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
	</section><!--/slider-->

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
											<li><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_mensclothes">Cloths</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_mensaccesories">Accessories</a></li>
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
											<li><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_femaleclothes">Cloths</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_femaleaccessories">Accessories</a></li>
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
											<li><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_kidsclothes">Cloths</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_kidsaccessories">Accessories</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_kidsfoods">Baby Foods</a></li>
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
											<li><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_laptop">Laptop</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_mobile">Mobile</a></li>
											<li><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_camera">Camera</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_shoes">Shoes</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url()?>index.php/Shoppyadmin/product_sunglass">Sunglasses</a></h4>
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
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php if(isset($product) && $product!=''){

						foreach($product as $prdt){
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo base_url()?>public/upload/<?php echo $prdt['image'] ?>" alt="productImage" height=30% width=10%/>
											<h2>Rs.<?php echo $prdt['price']?></h2>
											<p><?php echo $prdt['name']?></p>
											<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$prdt['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$prdt['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
											<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$prdt['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Rs.<?php echo $prdt['price']?></h2>
												<p><?php echo $prdt['name']?></p>
												<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$prdt['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												<a href="<?php echo base_url().'index.php/shoppy/add_to_cart/'.$prdt['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
												<a href="<?php echo base_url().'index.php/shoppy/product_datails/'.$prdt['id']?>" class="btn btn-default add_to_cart"><i class="fa fa-shopping-cart"></i>Details</a>
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
