<?php
if($this->session->userdata('id')!=''){
  include('header.php');
}
else{
  include('header_logout.php');
}
 ?>
 <html>
 <body>
   <table>
     <tr>
	<th>Product Id</th>
	<th colspan='2'>Product Name</th>
	<th>Product Price</th>
	<th>Image</th>
	<th>"Order Status"</th>
		</tr>";
 <?php
 $id = $this->session->userdata('id');
 $msg = '';
 $b = $this->db->query("SELECT status FROM `user_order` where id=$id")->result_array();

 if($b[0]['status']==0){
 	$msg = "Order Approved";
 }
 if($b[0]['status']==1){
 	$msg = "Your order is out for delivery";
 }
 if($b[0]['status']==2){
 	$msg = "Your order is successfully delivered";
 }

 if(isset($order_data)){
   foreach ($order_data as $row) {
     echo "<tr>
	<td>$row[id]</td>
	<td colspan='2'>$row[name]</td>
	<td>$row[price]</td>
	<td><img src='".base_url()."$row[image]' height='30%'width='40%'></td>
	<td>".$msg."</td>
		</tr>";
   }
 }
 else{
   echo "<center><h1 style='margin-bottom:100px;'>No Order details to show.</h1></center>";
 }
  ?>
</table>
</body>
<style type="text/css">
table{
	table-layout: fixed;
	width: 100%;
	text-align: center;
	vertical-align: middle;
}
	a{
		text-decoration: none;
	}
</style>
    </html>
<?php
include('footer.php');
 ?>
