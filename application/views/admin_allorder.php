<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Shopper Dashboard.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url()?>public/css1/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url()?>public/css1/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url()?>public/css1/custom.css">
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="<?php echo base_url()?>public/img1/favicon.ico"> -->
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
                  <div class="brand-text brand-big hidden-lg-down"><span>E-</span><strong>Shopper</strong></div>
                  <div class="brand-text brand-small"><strong>E-Shopper</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
               <!--  <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li> -->
                
                <!-- Logout    -->
                <li class="nav-item"><a href="<?php echo base_url()?>index.php/Shoppyadmin/admin_logout" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php echo base_url()?>public/image/home/logo.png" alt="..." class="public/img1-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">E-Shopper</h1>
              <p>Admin</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="<?php echo base_url()?>index.php/Shoppyadmin/admin_view"><i class="icon-home"></i>Home</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Details</a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="<?php echo base_url()?>index.php/Shoppyadmin/admin_allproduct">Product Table</a></li>

                <li><a href="<?php echo base_url()?>index.php/Shoppyadmin/admin_allorder">Order Table</a></li>
                <li><a href="<?php echo base_url()?>index.php/Shoppyadmin/product">Add Product</a></li>
                <li><a href="<?php echo base_url()?>index.php/Shoppyadmin/seller_info">Seller Info</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <table border="2">
            <tr>
                <th>Id</th>
                <th>User Name</th>
                <th>Product ID</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>

<?php
foreach($order as $d){
  
  $a=$this->db->query("SELECT status from `user_order` where id=$d[id]")->result_array();
  if($a[0]['status']==0)
    $status="Approved";
  else if($a[0]['status']==1)
    $status="Out for Delivery";
  else
    $status="Delivered";
  // print_r($a);die;
            echo "<tr>
                    <td>
                    ".$d['id']."
                    </td>
                    <td>
                    ".$d['user_name']."
                    </td>
                    <td>
                    ".$d['product_id']."
                    </td>
                    <td>
                    ".$d['address']."
                    </td>
                    <td>
                     <span><a href=".base_url()."index.php/Shoppyadmin/delivery_action/".$d['id']."/".$a[0]['status'].">".$status."</a></span>
                    </tr>";
            }
            ?>

        </div>
            </div>
          </section>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url()?>public/js1/tether.min.js"></script>
    <script src="<?php echo base_url()?>public/js1/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>public/js1/jquery.cookie.js"> </script>
    <script src="<?php echo base_url()?>public/js1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="<?php echo base_url()?>public/js1/charts-home.js"></script>
    <script src="<?php echo base_url()?>public/js1/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>