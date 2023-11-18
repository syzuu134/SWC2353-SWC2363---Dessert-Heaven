<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if($row = mysqli_fetch_assoc($result)){


        $_SESSION['email'] = ['email'];
        $_SESSION['role_as'] = $row['role_as'] ;

        if($row['role_as'] == 1){
            $_SESSION['message'] = "Welcome to Dashboard";
            header('Location: admin\admin.php');

        }
        else {
            $_SESSION['message'] = "Logged in Successfully";
            header('Location: mainpage.php');
        }
    }
    else {
        $error[] = 'Incorrect email or password!';
    }
    $select = "SELECT id FROM user_form WHERE email = ? ";

        $stmt = $conn->prepare($select);
        $stmt->bind_param('s', $email);

        if (!$stmt->execute()) {
        // Handle the error if the execution fails
        die("Error executing query: " . $stmt->error);
        }

        $stmt->bind_result($id);

        if (!$stmt->fetch()) {
        // Handle the case where no results are fetched
        die("No user found with the provided email");
        }

        // Close the statement
        $stmt->close();

        // Store values in session
        $_SESSION['user_id'] = $id;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userLogin.css">
    <title>Document</title>
</head>
<body>
<div class="bg-image"></div>
    
    <div class="form-container">

        <form action="" method="post">
            <?php
            
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>

            <h3><img src="image\logobulat.png" alt="" >Login Now</h3>
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit" value="LOGIN" class="form-btn" name="submit">
            <p>Don't have an account? <a href="userregister.php">Register Now</a></p>
        </form>
    </div>

</body>
</html>