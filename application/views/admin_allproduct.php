<?php
include('admin_header.php');
?>

        <br>
<!--         <h1>All Products</h1>
        <hr></hr>
 -->        <table border="2">
            <tr>
                <th>Id</th>
                <th>Seller Id</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th colspan="2">Action</th>
            </tr>
            <?php

            foreach($data as $d){
            echo "<tr>
                <td>
                    ".$d['id']."
                    </td>
                    <td>
                    ".$d['seller_id']."
                    </td>
                    <td>
                    ".$d['name']."
                    </td>
                    <td>
                    ".$d['category']."
                    </td>
                    <td>
                    ".$d['description']."
                    </td>
                    <td>
                    ".$d['brand']."
                    </td>
                    <td>
                    ".$d['price']."
                    </td>
                    <td>
                    ".$d['stock']."
                    </td>
                    <td><img src='".base_url()."public/upload/".$d['image']."' height='100px' width='200px'>
                    </td>
                     <td><a href=".base_url()."index.php/Shoppyadmin/delete_product/".$d['id'].">Delete</a>
                    </td>
                    </tr>";
            }?>

           <?php
include('admin_footer.php');
?>