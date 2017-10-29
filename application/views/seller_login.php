<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <?php include('header_logout')?> -->
<body onload="typeWriter()">
  <div id="main">

    <script>
    var i = 0;
    var txt = 'Sell Everything you want on a click';
    var speed = 50;
    function typeWriter() {
      if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
    }
    </script>

  <h1 id="demo" style="margin-left:430px;"></h1>
  <div id="head"></div>
  <div id="img1"><img src="<?php echo base_url()?>public/images/shop/Shopping.png"></img></div>
  <div id="log">
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
          <div id="msg"><?php if($this->session->flashdata('msg')!==''){
            echo $this->session->flashdata('msg');
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
