<?php
include('header.php');
if($this->session->userdata('mail')!=='')
$mail = $this->session->userdata('mail');
$res = $this->db->get_where('seller', array('email' => $mail))->result_array();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>

    <div id="bar">
      <div id="mail"><?php
      if($this->session->userdata('mail')!=='')
      echo $this->session->userdata('mail');
      ?>
    </div>
<div id="logout"> <a href='logout'>Logout</a></div>
    </div>
    <div id="main">
    <div id="section1">
        <div id="btn"><a href=''><button>Edit Profile</button></a></div>
        <div id="btn"><a href='<?php echo base_url()?>index.php/Shoppy/add_item'><button>Add Item</button></a></div>
        <div id="btn"><a href=''><button>Analyze Account</button></a></div>
      </div>
      <div id="section2" >
        <img alt="Click Here to upload a Image" onclick="ab()" onclick="ab()" src="<?php echo base_url()."public/uploads/".$res[0]['image']?>" style="position:relative;margin-left:300px;margin-top:-80px;" width="100px" height="100px"/>
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
        <h2 style="margin-left:300px"><?php echo $res[0]['name']?></h2>
        <h2>Address</h2>
        <h2>Payment Info</h2>
      </div>
    </div>
  </body>
</html>
 <?php
 include('footer.php');
  ?>
