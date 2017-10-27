<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php')?>
<body>
  <div id="main">
  <h1 style="margin-left:500px;">Sell Everything</h1>
  <div id="img1"><img src="<?php echo base_url()?>public/images/shop/Shopping.png"></img></div>
  <div id="log">
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
          <div id="msg"><?php if(isset($m)){
            echo $m;
          } ?></div>
          <div id="img"><img src="<?php echo base_url()?>public/images/shop/badge.png" style="height: 100px;
          width: 100px;"></div>
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="<?php echo base_url()?>index.php/Shoppy/seller_log_back" method="POST">
							<input type="text" name="email" placeholder="Email"/>
							<input type="password" name="password" placeholder="Password"/>
							<span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
							<input type="submit" name="submit" id="login-btn" value="Login"></button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<!-- <h2 class="or">OR</h2> -->
				</div>
				<div class="col-sm-4">

				</div>
			</div>
		</div>
  </div>
	</section>
</div><!--/form-->
<?php include('footer.php')?>
</body>
</html>
