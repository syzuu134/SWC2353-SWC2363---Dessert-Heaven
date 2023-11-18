<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $insert_query = mysqli_query($conn, "INSERT INTO `messages`(name, email, number, message) VALUES('$name','$emailFrom','$phone','$message')") or die('query failed') ;

    if($insert_query){
        $message = 'Message has been sent! Thank you for your feedback';
    }
    else{
        $message = 'Message could not been sent';
    }
    echo $message;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactus.css">
    <title>Contact Us</title>
</head>
<body>
<header>
    <?php include ('header.php');?>
</header>

    <div class="contactUs">
        <div class="title">
            <h2>Get In Touch</h2>
        </div>  
        <div class="box-contact">
            <div class="contact form">
                <h3>Send a Message</h3>
                <form action="" method="POST">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>Enter Your Name</span>
                                <input type="text" name="name" placeholder="Full Name" required>
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="email" name="email" required>
                            </div>
                            <div class="inputBox">
                                <span>Phone No.</span>
                                <input type="text" name="phone" placeholder="011-12345678" required>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message here..."></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send Message" name="submit">
                            </div>
                        </div>
                    </div>
                </form>   
            </div>
        
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <p>Cheras, Kuala Lumpur <br>MALAYSIA</p>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:dessertheaven@gmail.com">dessertheaven@gmail.com</a>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-phone"></i></span>
                        <a href="tel:+6011-12345679">011-23456789</a>
                    </div>
                    <ul class="sci">
                        <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-square-x-twitter"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8867828618713!2d101.7379371!3d3.1246294999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc374474dbfff9%3A0x56b3472b2d8897b!2sThe%20Sky%20Residensi!5e0!3m2!1sen!2smy!4v1699689747233!5m2!1sen!2smy" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/d938dc7e27.js" crossorigin="anonymous"></script>
    
    <?php include ('footer.php');?>

</body>
</html>