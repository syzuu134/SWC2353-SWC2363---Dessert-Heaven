
<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $password = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'User already exist!';
    }
    else {
        if($password != $cpass){
        $error[] = 'Password not matched!';
        }
        else {
            $insert = "INSERT INTO user_form(name, email,number, password) VALUES ('$name', '$email','$number', '$password')";
            mysqli_query($conn, $insert);
            header('Location: userLogin.php');
        }
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userLogin.css">
    <title>Login page</title>
</head>
<body>
<div class="bg-image"></div>

<div class="form-container">
    <form action="authcode.php" method="post">
        <h3><img src="image\logobulat.png" alt="" >Register Now</h3>
        <?php

        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            }
        }
        ?>
        <input type="text" name="name" required placeholder="Enter your name">
        <input type="email" name="email" required placeholder="Enter your email">
        <input type="number" name="number" required placeholder="Enter your phone number(Without '-')">
        <input type="password" name="password" required placeholder="Enter your password">
        <input type="password" name="cpassword" required placeholder="Confirm your password">
        <input type="submit" value="Register now !" class="form-btn" name="register_btn">
        <p>Already have an account? <a href="userLogin.php">Login Now</a></p>
    </form>
</div>
    
</body>
</html>