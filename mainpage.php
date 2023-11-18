<?php

@include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <title>Dessert Heaven</title>
</head>
<body>
    <header class="header">
    <?php include ('header.php');?>

    </header>

    <section id="home" class="home">
        <div class="slides-container">

            <div class="slide">
                <div class="content">
                    <span>Welcome to Dessert Heaven</span>
                    <h3>Where sweet dreams come true</h3>
                    <a href="mainProduct.php" class="btn">Shop Now!</a>
                </div>
                <div class="img">
                    <img src="image\banner.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="banner-container">

        <div class="banner">
            <img src="image\imgbnnr1.jpg" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Up to 10% off</h3>
                <a href="mainProduct.php" class="btn">Shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="image\imgbnnr2.jpg" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Up to 30% off</h3>
                <a href="mainProduct.php" class="btn">Shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="image\imgbnnr4.jpeg" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Up to 20% off</h3>
                <a href="giftbox.php" class="btn">Shop now</a>
            </div>
        </div>
</section>

<!--Product section-->
    <section class="products">

        <h1 class="title"> our <span>products</span> <a href="product.php">View all >></a> </h1>

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

            <div class="box">
            <div class="icons">
                <a href="mainProduct.php" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="mainProduct.php" class="fas fa-eye"></a>
            </div>
            <div class="img">
                <img src="https://down-my.img.susercontent.com/file/my-11134207-7qul4-ljhzi7rv8thy2a" alt="">
            </div>
            <div class="content">
                <h3>Chocolate Gift Box + Bear</h3>
                <div class="price">RM29.90</div>
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
                <img src="https://down-my.img.susercontent.com/file/f76aac7afae604ab987f910be98eb6d8" alt="">
            </div>
            <div class="content">
                <h3>Chocolate Gift <br>Box</h3>
                <div class="price">RM41.90</div>
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsQK2qpUhR9PBCpDxIznx5wQE5B_5r8A5ljg&usqp=CAU" alt="">
            </div>
            <div class="content">
                <h3>Ferrero Rocher <br>Gift Box</h3>
                <div class="price">RM46.40</div>
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSueCpbLAXXaFv9a0OityE-GxiLGFF2NS7zgQ&usqp=CAU" alt="">
            </div>
            <div class="content">
                <h3>Belgian handmade chocolates</h3>
                <div class="price">RM240.00</div>
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
</body>
</html>


                    <!--
                    <h3>quick links</h3>
                    <a href="#"> <i class="fas fa-arrow-right"></i>Home</a>
                    <a href="#"> <i class="fas fa-arrow-right"></i>Product</a>
                    <a href="#"> <i class="fas fa-arrow-right"></i>My Order</a>
                    <a href="#"> <i class="fas fa-arrow-right"></i>About</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                </div>
        
                <div class="box">
                    <h3>Our location</h3>
                    <button type="button"><a href="#"> <i class="fas fa-chevron-right"><i class="fas fa-chevron-right"></i> Send us an Email</i></a></button>
                    <img decoding="async" src="img/payment.png" class="payments" alt="">
                </div>
            </div>
        </section>
        <script src="main.js"></script>
        <section class="credit">created by Dailywebdesign || all rights reserved</section>
        -->