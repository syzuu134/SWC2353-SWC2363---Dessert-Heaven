<?php @include 'config.php'; ?>
<style>

/*  All */
* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-transform: capitalize;
    text-decoration: none;
    transition: 0.2s linear;
  }
  
  :root {
    --brown : #833517;
    --cream: #e8dccc;
  }

  
  .btn{
    margin-top: 1rem;
    display: inline-block;
    padding: 0.8rem 3rem;
    background: var(--brown);
    color: #fff;
    font-size: 1.7rem;
    cursor: pointer;
  }
  
  .btn:hover{
    background: #222;
  }
  
  html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
  }
  
  /* header*/
  .header{
    position: fixed;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.8rem 9%;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    z-index: 999;
    top: 0;
    left: 0;
    right: 0;
    background: var(--brown);
  }
  
  .navbar, #dropdown {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    padding: 0;
  }
  
  .navbar li,
  #dropdown li {
    padding: 0 20px;
    list-style-type: none; /* to remove bullet*/
    position: relative;
  }
  
  .navbar li a,
  #dropdown li a{
    text-decoration: none;
    font-size: 1.7rem;
    font-weight: 600;
    color: black;
    transition: 0.3s ease;
    margin: 0 1rem;
  }
  
  .navbar li a:hover,
  .navbar li a.activePg,
  #dropdown li a:hover {
    color: 	rgb(218,165,32);
  }
  
  .navbar li a.activePg::after,
  .navbar li a:hover::after,
  #dropdown li a:hover::after{
    content: "";
    width: 30%;
    height: 2px;
    background-color: black;
    position: absolute;
    bottom: -4px;
    left: 20px;
  }
  
  #productmenu:hover #dropdown {
    display: block;
    background-color: aliceblue;
  }
  
  #dropdown {
    display: none;
    overflow: hidden;
    position: absolute;
  }
  
  #dropdown li a{
    text-decoration: none;
    text-align: left;
  }
  
  .header img {
    width: 200px;
    height: 80px;
  }
  
  .header .icons div{
    font-size: 2.5rem;
    margin-left: 1.7rem;
    cursor: pointer;
    color: white;
  }
  
  .header .icons div:hover{
    color: black;
  }
  
  #menu-btn {
    display: none;
  }

.header .icons .cart{
  margin-left: 2rem;
  font-size: 2rem;
  color:var(--white);
}

.header .icons .totalCart span{
  padding:.1rem .5rem;
  border-radius: .5rem;
  background-color: var(--white);
  color:var(--blue);
  font-size: 2rem;
}
</style>

<header class="header">
        <img src="image\logoheader.png" alt="logo" class="logo">
        
        <nav class="navbar">
            <li><a href="mainpage.php">Home</a></li>
            <div id="productmenu">
                <li><a href="product.php">Our Product</a></li>
                <ul id="dropdown">
                <li><a href="mainProduct.php">Main Product</a></li>
                <li><a href="giftbox.php">Gift box</a></li>
                </ul>
            </div>
            <li><a href="contactus.php">Contact Us</a></li>
        </nav>
        
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>

            <?php
      
            $select_rows = mysqli_query($conn, "SELECT * FROM `cart_items`") or die('query failed');
            $row_count = mysqli_num_rows($select_rows);

            ?>
            <a href="cart.php"><div id="cart-btn" name="add_to_cart" class="fas fa-shopping-cart"></div></a>
            <a href="cart.php" class="totalCart"> <span><?php echo $row_count; ?></span> </a>
            <a href="userLogin.php"><div id="login-btn" class="fas fa-user"></div></a>
          </div>
</header>