<!DOCTYPE html>
<html lang="en">
<head>
<body onload="type()">

  <script>
  var i = 0;
  var txt = 'Sign Up today for grow your bussiness';
  var speed = 50;
  function type() {
    if (i < txt.length) {
      document.getElementById("dem").innerHTML += txt.charAt(i);
      i++;
      setTimeout(type, speed);
    }
  }
  </script>
  <div id="main">
<h1><div id="dem"></div></h1>
  <h1 id="demo" style="margin-left:430px;"></h1>
  <div id="head"></div>
  <div id="img2"><img src="<?php echo base_url()?>public/images/shop/seller-signup.jpg"></img></div>
  <div id="log1">
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
          <div id="img"> <img src="<?php echo base_url()?>public/images/shop/badge.png" style="height: 100px;
          width: 100px;"></div>

					<div class="signup-form"><!--login form-->
						<h2>Get a account absolutly free</h2>
						<form action="<?php echo base_url()?>index.php/Shoppy/signup_insert" method="POST">
              <input type="text" name="name" placeholder="Name"/>
              <input type="text" name="email" placeholder="Email"/>
							<input type="password" name="password" placeholder="Password"/>
							<input type="submit" name="submit" id="login-btn" value="Sign Up"></button>
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
