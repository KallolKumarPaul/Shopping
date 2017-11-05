<?php
include('header.php');
if($this->session->userdata('id')!=='')
$id = $this->session->userdata('id');
$res = $this->db->get_where('seller', array('id' => $id))->result_array();
  ?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="<?php echo base_url()?>/public/css/style1.css"/>
  <link rel="stylesheet" href="<?php echo base_url()?>/public/css/style2.css"/>

    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <div class="main">
    <div class="section1">
      <div class="spul">
      <ul>
<li><a class="active" href="http://localhost/Shopping/index.php/Shoppy/profile_view">Home</a></li>
<li><a href="<?php echo base_url()?>index.php/Shoppy/seller_edit">Edit Profile</a></li>
<li><a href="<?php echo base_url()?>index.php/Shoppy/seller_add_item">Add Item</a></li>
<li><a href="<?php echo base_url()?>index.php/Shoppy/analyze_seller">Analyze Account</a></li>
</ul>
</div>

      </div>
      <div class="section2">
      <div class="profile">
      <div class="content">
      <div class="back"></div>
      <div class="proPage ExitPage"><svg class="icon icon-exit"><use xlink:href="#icon-exit"></use></svg></div>
      <div class="proPage homePage"><svg class="icon icon-menu"><use xlink:href="#icon-menu"></use></svg></div>
      <div class="profilePic" onclick="ab()" style="background:url(<?php echo base_url()."/public/uploads/".$res[0]['image']?>);"></div>
      <nobr><h3><?php echo $res[0]['name']?></h3><nobr>
      <h4><?php echo $res[0]['designation']?></h4>
      <p><?php echo $res[0]['status']?></p>
      <div class="rates">
      <div class="box boxview">
      <div class="iconCon">
      <svg class="icon icon-eye"><use xlink:href="#icon-eye"></use></svg>
      </div>
      <h4 class="counter">332</h4>
      </div>
      <div class="box boxbuddy">
      <div class="iconCon">
      <svg class="icon icon-user"><use xlink:href="#icon-user"></use></svg>
      </div>
      <h4 class="counter">332</h4>
      </div>
      <div class="box boxhearth">
      <div class="iconCon">
      <svg class="icon icon-heart"><use xlink:href="#icon-heart"></use></svg>
      <div class="ball"></div>
      </div>
      <h4 class="counter h4h">332</h4>
      </div>
      </div>
      </div>
      </div>
    </div>


  <form action="<?php echo base_url()?>index.php/Shoppy/image_upload" method="post" enctype="multipart/form-data">
        <input type="file" name="img" id="image_upload" style="display:none">
        <input type="submit" id="sub" name="sub" value="Upload" style="display:none">
      </form>

      <script>
    function ab(){
      $('#image_upload').click();
      $("#sub").css({ 'display': "block" });
    }
    </script>
    <style>
    .spul ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        border: 1px solid #555;
    }

    .spul li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
    }

  .spul  li {
        text-align: center;
        border-bottom: 1px solid #555;
    }

  .spul  li:last-child {
        border-bottom: none;
    }

  .spul  li a.active {
        background-color: #4CAF50;
        color: white;
    }

  .spul  li a:hover:not(.active) {
        background-color: #555;
        color: white;
    }
    #foo{
      padding-top: 650px;
    }
    </style>
    <div id="foo">
      <?php
      include('footer.php');
       ?>
     </div>
  </body>
</html>
