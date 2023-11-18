<?php

@include 'C:\xampp\htdocs\Web app\Project0723\config.php';

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `order` WHERE id = $delete_id") or die('query failed');
    if($delete_query){
        $message[] = 'Product has been deleted';
    }
    else{
        $message[] = 'Product could not be deleted';
    };
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin.css" rel="stylesheet">
    <title>View Order</title>
</head>
<body>

<?php include 'adminheader.php'; ?>

<div class="container">

    <section class="display-product-table">

   <table>

      <thead>
         <th>No.</th>
         <th>Name</th>
         <th>Email</th>
         <th>Phone No.</th>
         <th>Address</th>
         <th>Product</th>
         <th>Price (RM)</th>
         <th>edit</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `orders`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><?php echo $fetch_cart['id']; ?></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td><?php echo $fetch_cart['number']; ?></td>
            <td><?php echo $fetch_cart['email']; ?></td>
            <td><?php echo $fetch_cart['flat'],$fetch_cart['street'],$fetch_cart['postal_code'],$fetch_cart['city'],$fetch_cart['state'],$fetch_cart['country']; ?></td>
            <td><?php echo $fetch_cart['total_products']; ?></td>
            <td><?php echo $fetch_cart['total_price']; ?></td>
            <td>
                <a href="contact.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are you sure you want to remove this order?');">
                <i class="fas fa-trash"></i>Complete</a>
            </td>
        </tr>
        <?php
            };
        }else{
            echo "<div class='empty'>No orders yet</div>";
        }
         ?>

      </tbody>

   </table>
</section>

</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://kit.fontawesome.com/d938dc7e27.js" crossorigin="anonymous"></script>

</body>
</html>