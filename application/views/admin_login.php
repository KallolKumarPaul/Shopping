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
                <!-- <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li> -->
                
                <!-- Logout    -->
               <!--  <li class="nav-item"><a href="<?php echo base_url()?>index.php/Shoppyadmin/admin_logout" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li> -->
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
      </nav>
<body>
<center>
<hr></hr>
<div id="main">
<form action="<?php echo base_url()?>index.php/Shoppyadmin/admin_login" method="post" enctype="multipart-formdata">
		<label><input type="text" id="email" placeholder="Email" name="email" value="eshop@eshopper.com"><br>
		<label> <input type="password"  placeholder="Password" name="password" value="admin"></label><br>
		<center><input type="submit" class="btn" id="btn" name="submit" value="Login">
</center>
</form>
</div>
<span id="sd"></span>
</body>
</html>
<?php
include('admin_footer.php');
?>
