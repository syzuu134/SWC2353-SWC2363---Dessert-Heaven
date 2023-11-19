<?php

session_start();
include('config.php');

if(isset($_POST['register_btn'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    //Check if email already registered
    $check_email_query = "SELECT email FROM user_form WHERE email='$email' ";
    $check_email_query_run = mysqli_query($conn, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION['message'] = "Email already registered";
        header('Location: userregister.php');
    }

    if($password == $cpassword){
        // Insert user data
        $insert_query = "INSERT INTO user_form (name, email, password) VALUES ('$name', '$email', '$password')";
        $insert_query_run = mysqli_query($conn, $insert_query);

        if($insert_query_run) {
            $_SESSION['message'] = "Registered Successfully";
            header('Location: loginform.php');
        }
        else {
            $_SESSION['message'] = "Something is wrong";
            header('Location: userregister.php');
        }
    }

    else {
        $_SESSION['message'] = "Password do not match";
        header('Location: userregister.php');
    }
}

else if(isset($_POST['login-btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $login_query = "SELECT * FROM user_form WHERE email = '$email' AND password='$password' ";
    $login_query_run = mysqli_query($conn, $login_query);

    if(mysqli_num_rows($login_query_run) > 0) {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['name'];
        $useremail = $userdata['email'];

        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail
        ];

        $_SESSION['message'] = "Logged in Successfully";
        header('Location: mainpage.php');
    }
    else {
        $_SESSION['message'] = "Invalid Credentials";
        header('Location: loginform.php');
    }
}

?>