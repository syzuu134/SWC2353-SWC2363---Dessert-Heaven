<?php

@include 'C:\xampp\htdocs\Web app\Project0723\config.php';

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `messages` WHERE id = $delete_id") or die('query failed');
    if($delete_query){
        $message[] = 'Message has been deleted';
    }
    else{
        $message[] = 'Message could not be deleted';
    };
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin.css" rel="stylesheet">
    <title>Document</title>
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
         <th>Message</th>
         <th>edit</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `messages`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><?php echo $fetch_cart['id']; ?></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td><?php echo $fetch_cart['email']; ?></td>
            <td><?php echo $fetch_cart['number']; ?></td>
            <td><?php echo $fetch_cart['message']; ?></td>
            <td>
                <a href="contact.php?delete=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this message?');">
                <i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>
        <?php
            };
        }else{
            echo "<div class='empty'>No message yet</div>";
        }
         ?>

      </tbody>

   </table>
</section>

</div>
   
<!-- custom js file link  -->
<script src="admin.js"></script>
<script src="https://kit.fontawesome.com/d938dc7e27.js" crossorigin="anonymous"></script>

</body>
</html>