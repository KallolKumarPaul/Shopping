<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
  <div style="margin-left:600px; font-size:24px; color:red"><?php if($this->session->flashdata('order_msg')!='') echo $this->session->flashdata('order_msg')?></div>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>

          <?php
          if($data!=''){
            $c = count($data);
      ?>

					<tbody>
            <?php
            $sub = 0;
            while($c>0){
              $sub = $sub + $data[$c-1]['price'];
              ?>
              <tr>
                <td class="cart_product">
                  <a href=""><img src="<?php echo base_url()?>public/images/cart/one.png" alt=""></a>
                </td>
                <td class="cart_description">
                  <h4><a href=""><?php echo $data[$c-1]['name'] ?></a></h4>
                  <p>Product ID: <?php echo $data[$c-1]['id'] ?></p>
                </td>
                <td class="cart_price">
                  <p><?php echo $data[$c-1]['price'] ?></p>
                </td>
                <td class="cart_quantity">
                  <div class="cart_quantity_button">
                    <a class="cart_quantity_up" href=""> + </a>
                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                    <a class="cart_quantity_down" href=""> - </a>
                  </div>
                </td>
                <td class="cart_total">
                  <p class="cart_total_price"><?php echo $sub ?></p>
                </td>
                <td class="cart_delete">
                  <a class="cart_quantity_delete" href="<?php echo base_url().'index.php/Shoppy/delete_item/'.$data[$c-1]['id']?>"><i class="fa fa-times"></i></a>
                </td>
              </tr>
              <style>
              .cart_delete .cart_quantity_delete{
                background-color: red;
              }
              </style>

<?php
  $c--;
            }
          }

             ?>


					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>

							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>

							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
        <?php
        $percent = 17/100*$sub;
        $sub_total = $percent + $sub + 100;
         ?>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span><?php echo "₹".$sub ?></span></li>
							<li>GST<span>17%</span></li>
							<li>Shipping Cost <span>₹100</span></li>
							<li>Total <span><?php echo "₹".$sub_total?></span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="<?php echo base_url()?>index.php/Shoppy/checkout">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
<?php
include('footer.php');
?>
    <script src="<?php echo base_url()?>public/js/jquery.js"></script>
	<script src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>public/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url()?>public/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()?>public/js/main.js"></script>
</body>
</html>
