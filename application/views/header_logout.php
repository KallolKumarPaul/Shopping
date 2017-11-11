<html>
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <title>Home | E-Shopper</title>
    <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url()?>public/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body> 
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>public/images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									India
								</button>								
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Rupees									
								</button>								
							</div>
						
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url()?>index.php/Shoppy/load_cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="<?php echo base_url()?>index.php/Shoppingcart/login"><i class="fa fa-lock"></i> Login</a></li>
								<li><a href="<?php echo base_url()?>index.php/Shoppingcart/login"><i class="fa fa-lock"></i>Sign Up</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url()?>" class="active">Home</a></li>
								<li class="dropdown"><a href="">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url()?>">Products</a></li> 
										<!-- <li><a href="<?php echo base_url()?>index.php/Shoppy/checkout">Checkout</a></li> -->
										<li><a href="<?php echo base_url()?>index.php/Shoppy/load_cart">Cart</a></li>
                                    </ul>
                                </li>
								<li class="dropdown"><a href="#">Sell<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url()?>index.php/Shoppy/seller_log">Login</a></li>
										<li><a href="<?php echo base_url()?>index.php/Shoppy/seller_signup">Registration</a></li>
                                    </ul>
                                </li>

								<li><a href="<?php echo base_url()?>index.php/Shoppy/contact">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<form action="<?php echo base_url()?>/index.php/Shoppy/search" method="post"> 
						<div class="search_box pull-right">
							<input type="text" id="search" name="searchtext" placeholder="Search"/>
						</div>
            <div id="sear"> 
            	</form>
					</div>
				</div>
			</div>
    </div>
		</div><!--/header-bottom-->
    <script src="<?php echo base_url()?>public/js/jquery.js"></script>
<script src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo base_url()?>public/js/price-range.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url()?>public/js/main.js"></script>
<script src="<?php echo base_url()?>public/js/main1.js"></script>
</header><!--/header-->
<body>
</body>
</html>
