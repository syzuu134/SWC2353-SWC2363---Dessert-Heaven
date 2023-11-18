<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart_product` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart_product`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mainpage.css">
    <title>Product</title>
</head>
<body>
    <?php include ('header.php');?>

    <section class="home" id="home">

        <div class="slides-container">

            <div class="slidep active">
                <div class="content">
                    <span>Limited Sales</span>
                    <h3>Up to 10% off</h3>
                    <a href="#" class="btn">Shop Now</a>
                </div>
                <div class="img">
                    <img src="image\bnnr1pdpg-removebg-preview.png" alt="">
                </div>
            </div>

            <div class="slidep">
                <div class="content">
                    <span>Limited Sales</span>
                    <h3>Up to 30% off</h3>
                    <a href="#" class="btn">Shop Now</a>
                </div>
                <div class="img">
                    <img src="image\bnnr2pdpg.jpg" alt="">
                </div>
            </div>

            <div class="slidep">
                <div class="content">
                    <span>Limited Sales</span>
                    <h3>Up to 20% off</h3>
                    <a href="#" class="btn">Shop Now</a>
                </div>
                <div class="img">
                    <img src="image\bnnr3pdpg-removebg-preview.png" alt="">
                </div>
            </div>

        </div>
        <div id="next-slide" class="fas fa-angle-right" onclick="next()"></div>
        <div id="prev-slide" class="fas fa-angle-left" onclick="prev()"></div>
    </section>

    <!-- menu section starts  -->

    <section class="products">

    <h1 class="title"> our <span>best sellers</span> <a href="product.php">View all >></a> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="mainProduct.php" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
                
                <a href="mainProduct.php" class="fas fa-eye"></a>
            </div>
            <div class="img">
                <img src="image/download (6).jpeg" alt="">
            </div>
            <div class="content">
                <h3>Chocolate Brownies</h3>
                <div class="price">RM19.00</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
        <div class="icons">
            <a href="mainProduct.php" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            
            <a href="mainProduct.php" class="fas fa-eye"></a>
        </div>
        <div class="img">
            <img src="image/download (7).jpeg" alt="">
        </div>
        <div class="content">
            <h3>Chocolate Cookies</h3>
            <div class="price">RM19.00</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        </div>

        <div class="box">
        <div class="icons">
            <a href="mainProduct.php" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            
            <a href="mainProduct.php" class="fas fa-eye"></a>
        </div>
        <div class="img">
            <img src="image/cake3.jpg" alt="">
        </div>
        <div class="content">
            <h3>Strawberry Span <br>Cake</h3>
            <div class="price">RM109.90</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        </div>

        <div class="box">
        <div class="icons">
            <a href="mainProduct.php" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            
            <a href="mainProduct.php" class="fas fa-eye"></a>
        </div>
        <div class="img">
            <img src="image/cake4.jpg" alt="">
        </div>
        <div class="content">
            <h3>Dark Chocolate nutella cake</h3>
            <div class="price">RM119.90</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        </div>
    </div>
    </section>


    <?php include ('footer.php');?>
    <script src="https://kit.fontawesome.com/d938dc7e27.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        let slides = document.getElementsByClassName("slidep");
        let index = 0;
        
        function next(){
            slides[index].classList.remove('active');
            index = (index + 1) % slides.length;
            slides[index].classList.add('active');
        }
        
        function prev(){
            slides[index].classList.remove('active');
            index = (index - 1 + slides.length) % slides.length;
            slides[index].classList.add('active');
        }</script>
</body>
</html>