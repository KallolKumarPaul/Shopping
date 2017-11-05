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
<li><a href="http://localhost/Shopping/index.php/Shoppy/profile_view">Home</a></li>
<li><a class="active" href="<?php echo base_url()?>index.php/Shoppy/seller_edit">Edit Profile</a></li>
<li><a href="<?php echo base_url()?>index.php/Shoppy/seller_add_item">Add Item</a></li>
<li><a href="<?php echo base_url()?>index.php/Shoppy/analyze_seller">Analyze Account</a></li>
</ul>
</div>
      </div>
</div>
      <div class="section2">
        <form action="<?php echo base_url()?>index.php/Shoppy/seller_update" method="POST">
        <input type="text" placeholder="Name" value="<?php echo $res[0]['name']?>" name="name" style="width:70%;">
        <input type="text" placeholder="Email" value="<?php echo $res[0]['email']?>" name="email" style="width:70%;">
        <input type="text" placeholder="Designation" value="<?php echo $res[0]['designation']?>" name="designation" style="width:70%;">
        <input type="text" placeholder="Status" value="<?php echo $res[0]['status']?>" name="status" style="width:70%;">
        <input type="password" placeholder="Password" value="<?php echo $res[0]['password']?>" name="password" style="width:70%;"><br>
        <input style="margin-left:125px;" type="submit" value="Submit">
      </form>
</div>
      <script>
    function ab(){
      $('#image_upload').click();
      $("#sub").css({ 'display': "block" });
    }
    </script>
    <style>
    .section2{
      width: 500px;
      margin-left: 500px;
    }
    .section2 input{
      margin-bottom: 10px;
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
    #foo{
      padding-top: 650px;
    }
    </style>
  </body>

  <br>
  <div id="foo">
<?php
  include('footer.php');
   ?>
 </div>
</html>
