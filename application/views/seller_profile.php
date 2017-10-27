<?php
include('header.php');
if (isset($mail)) {
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <div id="bar">
      <?php echo $mail ?>
    </div>
  </body>
</html>
<?php
  }
 ?>
 <?php
 include('footer.php');
  ?>
