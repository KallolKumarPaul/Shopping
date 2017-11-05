<?php
include('admin_header.php');
?>
 <table border="2">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Image</th>
				<th colspan="2">Action</th>
            </tr>
<?php
	foreach($seller as $d){
            echo "<tr>
                <td>
                    ".$d['id']."
                    </td>
                    <td>
                    ".$d['name']."
                    </td>
                    <td>
                    ".$d['email']."
                    </td>
                    <td><img src='".base_url()."public/upload/".$d['image']."' height='100px' width='200px'>
                    </td>
                     <td><a href=".base_url()."index.php/Shoppyadmin/delete_product/".$d['id'].">Block</a>
                    </td>
                    </tr>";
            }?>

                    