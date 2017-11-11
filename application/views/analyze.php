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


  <style>
  * {box-sizing: border-box}

  .container {
    width: 100%;
    background-color: #ddd;
  }

  .skills {
    text-align: right;
    padding-right: 20px;
    line-height: 40px;
    color: white;
  }
  #sec{
    width: 900px;
    margin-left: 250px;
  }
  </style>

    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <div class="main">
    <div class="section1">
      <div class="spul">
      <ul>
<li><a href="http://localhost/Shopping/index.php/Shoppy/profile_view">Home</a></li>
<li><a href="<?php echo base_url()?>index.php/Shoppy/seller_edit">Edit Profile</a></li>
<li><a href="<?php echo base_url()?>index.php/Shoppy/seller_add_item">Add Item</a></li>
<li><a class="active" href="<?php echo base_url()?>index.php/Shoppy/analyze_seller">Analyze Account</a></li>
</ul>
</div>
      </div>
<div id="sec">

      <?php if($product!='')
              {
            ?>
        <div class="main">
            <h1>Total Sales</h1>
            <?php foreach($product as $pt)
                  {
                    $report = round(($pt['sold']/$pt['stock'])*100);
            ?>
            <style>
            .report{width:20%; background-color: #4CAF50;}
            </style>
            <p><?php echo $pt['category'] ?></p>
            <div class="container">
              <div class="skills report"><?php echo $report."%" ?></div>
            </div>
        <?php
        }
          }
         ?>
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
    .section1{
      float: left;
      margin-bottom: -40px;
    }

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

    </style>
  </div>
  </body>

  <br>
<div class="footer">
  <?php
  include('footer.php');
   ?>
</div>
</html>
