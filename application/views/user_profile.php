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
<html>
<head>
<title>Profile</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Prominent Profile Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- js -->
<script src="<?php echo base_url()?>public/js12/jquery.min.js"></script>
<!-- //js --> 
<!-- font-awesome icons -->
<link href="<?php echo base_url()?>public/css12/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="<?php echo base_url()?>public/css12/style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
	<div class="main">
		<h1></h1>
		<div class="w3_main_grids">
			<div class="w3layouts_profile_grid1">
				<div class="w3l_profile_grid1_padd">
					<div class="w3ls_menu_grids">
						<div class="w3ls_menu_grid">
							<span class="menu-icon">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</span>
							<!-- menu -->
								<ul class="w3_agile_nav1">
									<!-- <li><a href="<?php echo base_url()?>">Home</a></li> -->
									<li><a href="<?php echo base_url()?>index.php/Shoppingcart/edituser">Edit</a></li>
									<li><a href="<?php echo base_url()?>index.php/Shoppingcart/logout">Log out</a></li>
									
								</ul> 	
								<!-- script-for-menu -->
								 <script>
								   $( "span.menu-icon" ).click(function() {
									 $( "ul.w3_agile_nav1" ).slideToggle( 120, function() {
									 // Animation complete.
									  });
									 });
								</script>
								<!-- /script-for-menu -->
							<!-- //menu -->
						</div><?php
						if(isset($profile) && count($profile)!=0)
						{
						foreach($profile as $val)
						{?>
						<div class="w3ls_menu_grid">
							<h2>E-Shopper</h2>
							<h3>Profile</h3>
						</div>
						<div class="w3ls_menu_grid">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="agileits_profile">
						<img src="<?php echo base_url().'public/upload/'.$val['image'];?>" height="100px" width="80px"/>
						<h3><?php echo $val['name'];?></h3>
						<p><?php echo $val['email'];?></p>
					</div>
				</div>
			</div>
			<div class="agileinfo_profile_grid2">
				<div class="wthree_circle_effect">
					<div class="w3_agileits_circle_effect">
						<i></i>
						<p>User_Id</p>
						<h3><?php echo $val['id'];?></h3>
					</div>
					<div class="w3_agileits_circle_effect">
						<i class="agile_red"></i>
						<p>Address</p>
						<h3><?php echo $val['address'];?></h3>
					</div>
					<div class="w3_agileits_circle_effect">
						<i class="agileits_w3layouts_yellow"></i>
						<p>Pincode</p>
						<h3><?php echo $val['pincode'];?></h3>
					</div>

					<div class="clear"> </div>
				</div>
				<div class="wthree_circle_effect">
					<div class="w3_agileits_circle_effect">
						<i class="agile_red"></i>
						<p>Location</p>
						<h3><?php echo $val['location'];?></h3>
					</div>
					<div class="w3_agileits_circle_effect">
						<i class="agile_red"></i>
						<p>Gender</p>
						<h3><?php echo $val['gender'];?></h3>
					</div>
					<div class="w3_agileits_circle_effect">
						<i class="agile_red"></i>
						<p>Mobile</p>
						<h3><?php echo $val['mobile'];?></h3>
					</div>
				</div>
				
				<div class="second circle">
					<strong></strong>
				</div>

			</div>
		</div>		
		<script src="<?php echo base_url()?>public/js12/circle-progress.js"></script>
		<script src="<?php echo base_url()?>public/js12/examples.js"></script>
	</div>
</body>
</html>
<?php }} ?>
<?php
include('footer.php');
?>