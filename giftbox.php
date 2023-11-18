<?php

@include 'config.php';

session_start();

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart_items` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart_items`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainProduct.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Gift box</title>
</head>
<body>
    <header>
        <?php include ('header.php');?>
    </header>

    <!-- main body -->
    <section id="product1" class="section-p1">
        <h1 align="center">Gift Box</h1>
    
    <div id="container">
        <?php
        $select_products = mysqli_query($conn, "SELECT * FROM cart_product WHERE category='Gift Box' ");
        if(mysqli_num_rows($select_products) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_products)){
            ?>
            <div id="cont">
            <form action="" method="post">
                <div id="img">
                    <img src="admin/uploaded_img/<?php echo $fetch_product['image'];?>" alt="">
                </div>
                <div id="caption">
                <h5><?php echo $fetch_product['name']; ?></h5>
                <div class="review">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price"><h4>RM<?php echo $fetch_product['price']; ?></h4></div>
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                </div>
                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                
            </form>
            </div>
            <?php
            };
         };

        ?>
        
        <?php
        $select_products = mysqli_query($conn, "SELECT * FROM cart_product WHERE category='gift box cake' ");
        if(mysqli_num_rows($select_products) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_products)){
            ?>
            <div id="cont">
            <form action="" method="post">
                <div id="img">
                    <img src="admin/uploaded_img/<?php echo $fetch_product['image'];?>" alt="">
                </div>
                <div id="caption">
                    <h5><?php echo $fetch_product['name']; ?></h5>
                <div class="review">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price"><h4>RM<?php echo $fetch_product['price']; ?></h4></div>
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                </div>
                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                
            </form>
            </div>
            <?php
            };
         };

        ?>
    </div>
</section>
    <script src="https://kit.fontawesome.com/d938dc7e27.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <?php include ('footer.php');?>
</body>
</html>