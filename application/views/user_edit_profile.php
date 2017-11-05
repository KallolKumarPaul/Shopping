<?php
if ($this->session->userdata('id')!='') {
  include('header.php');
}
else
{
  include('header_logout.php');
}
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         
        
        <title>Bootply snippet - Edit profile form</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="User information form snippet with timezones">
        <link href="<?php echo base_url()?>public/css13/bootstrap.min.css" rel="stylesheet">
        <link rel="apple-touch-icon" href="https://www.bootply.com/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://www.bootply.com/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://www.bootply.com/bootstrap/img/apple-touch-icon-114x114.png">

<link href="<?php echo base_url()?>public/css13/font-awesome.min.css" type="text/css" rel="stylesheet">
        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
            /* CSS used here will be applied after bootstrap.css */
        </style>
    <script id="_carbonads_projs" type="text/javascript" src="<?php echo base_url()?>public/js13/C6AILKT.json"></script></head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body style="">
      <?php
        if(isset($edituser) && count($edituser)!=0)
{
foreach($edituser as $val)
{
  $g=explode(",",$val['gender']);?>
   <form class="form-horizontal" role="form" action="<?php echo base_url()?>index.php/Shoppingcart/edit" method="post" enctype="multipart/form-data">
        <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="<?php echo base_url().'public/upload/'.$val['image'];?>" class="avatar img-circle" alt="avatar" height="100px" width="100px">
          <h6>Choose a Profile Picture</h6>
          <input type="file" name="img"/>
        </div>
      </div>
        <h1>Personal info</h1>
        <div class="form-group">
            <label class="col-lg-3 control-label"></label>
            <div class="col-lg-8">
              <h3><?php echo $val['email'];?></h3>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" value="<?php echo $val['name'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="address" value="<?php echo $val['address'];?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Pincode:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="pincode" value="<?php echo $val['pincode'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Location:</label>
            <div class="col-md-8">
                <select name="city" id="cty">
                
                <option value="Kolkata"<?php echo ($val['location']=='Kolkata')?'selected':'Kolkata'?>>Kolkata</option>
                <option value="Mumbai"<?php echo ($val['location']=='Mumbai')?'selected':''?>>Mumbai</option>
                <option value="Delhi"<?php echo ($val['location']=='Delhi')?'selected':''?>>Delhi</option>
                <option value="Chennai"<?php echo ($val['location']=='Chennai')?'selected':''?>>Chennai</option>
                <option value="Others"<?php echo ($val['location']=='Others')?'selected':''?>>Others</option>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Gender:</label>
            <div class="col-md-8">
              <label><input type="radio" name="gen[]" id="m" value="Male"<?php echo(in_array('Male',$g)?'checked':'')?>>Male</label>
              <label><input type="radio" name="gen[]" id="f" value="Female"<?php echo (in_array('Female',$g)?'checked':'')?>>Female</label>
              <label><input type="radio" name="gen[]" id="o" value="Others"<?php echo (in_array('Others',$g)?'checked':'')?>>Others</label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Mobile:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="mobile" value="<?php echo $val['mobile'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" name="update" class="btn btn-primary" value="Save Changes">
              <input type="reset" class="btn btn-primary" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
        <?php }} ?>
        <script async="" src="<?php echo base_url()?>public/js13/analytics.js.download"></script><script type="text/javascript" src="<?php echo base_url()?>public/js13/jquery.min.js.download"></script>


        <script type="text/javascript" src="<?php echo base_url()?>public/js13/bootstrap.min.js.download"></script>
        <script type="text/javascript">
        $(document).ready(function() {
        });
        
        </script>
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview');
        </script>
        
        
        <style>
            .ad {
              position: absolute;
              bottom: 70px;
              right: 48px;
              z-index: 992;
              background-color:#f3f3f3;
              position: fixed;
              width: 155px;
              padding:1px;
            }
            
            .ad-btn-hide {
              position: absolute;
              top: -10px;
              left: -12px;
              background: #fefefe;
              background: rgba(240,240,240,0.9);
              border: 0;
              border-radius: 26px;
              cursor: pointer;
              padding: 2px;
              height: 25px;
              width: 25px;
              font-size: 14px;
              vertical-align:top;
              outline: 0;
            }
            
            .carbon-img {
              float:left;
              padding: 10px;
            }
            
            .carbon-text {
              color: #888;
              display: inline-block;
              font-family: Verdana;
              font-size: 11px;
              font-weight: 400;
              height: 60px;
              margin-left: 9px;
              width: 142px;
              padding-top: 10px;
            }
            
            .carbon-text:hover {
              color: #666;
            }
            
            .carbon-poweredby {
              color: #6A6A6A;
              float: left;
              font-family: Verdana;
              font-size: 11px;
              font-weight: 400;
              margin-left: 10px;
              margin-top: 13px;
              text-align: center;
            }
        </style>
</body>
</html>
<?php
include('footer.php');
?>