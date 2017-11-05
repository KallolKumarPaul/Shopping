<?php
include('admin_header.php');
?>
 <table border="2">
            <tr>
                <th>Id</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>Mobile No</th>
                <th>Location</th>
                <th>Gender</th>
                <th>Image</th>
                <th colspan="2">Action</th>
            </tr>
            <?php

            foreach($user as $s){
            echo "<tr>
                <td>
                    ".$s['id']."
                    </td>
                    <td>
                    ".$s['name']."
                    </td>
                    <td>
                    ".$s['email']."
                    </td>
                    <td>
                    ".$s['address']."
                    </td>
                    <td>
                    ".$s['pincode']."
                    </td>
                    <td>
                    ".$s['mobile']."
                    </td>
                    <td>
                    ".$s['location']."
                    </td>
                    <td>
                    ".$s['gender']."
                    </td>
                    <td><img src='".base_url()."public/upload/".$s['image']."' height='100px' width='200px'>
                    </td>
                     <td><a href=".base_url()."index.php/Shoppyadmin/delete_product/".$s['id'].">Delete</a>
                    </td>
                    </tr>";
            }?>

           <?php
include('admin_footer.php');
?>