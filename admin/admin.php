<?php

@include 'C:\xampp\htdocs\Web app\Project0723\config.php';

if(isset($_POST['add_product'])){
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $category = $_POST['category'];
    $category = filter_var($category, FILTER_SANITIZE_STRING);
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'uploaded_img/'.$p_image;

    $insert_query = mysqli_query($conn, "INSERT INTO `cart_product`(name, price, category, image) VALUES('$p_name','$p_price','$category','$p_image')") or die('query failed') ;

    if($insert_query){
        move_uploaded_file($p_image_tmp_name, $p_image_folder);
        $message[] = 'product add succesfully';
    }
    else{
        $message[] = 'could not add the product';
    }
};

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `cart_product` WHERE id = $delete_id") or die('query failed');
    if($delete_query){
        $message[] = 'Product has been deleted';
    }
    else{
        $message[] = 'Product could not be deleted';
    };
};

if(isset($_POST['update_product'])){
    $update_p_id = $_POST['update_p_id'];
    $update_p_name = $_POST['update_p_name'];
    $update_p_price = $_POST['update_p_price'];
    $update_p_image = $_FILES['update_p_image']['name'];
    $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
    $update_p_image_folder = 'uploaded_img/'.$update_p_image;

    $update_query = mysqli_query($conn, "UPDATE `cart_product` SET name = '$update_p_name', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");

    if($update_query){
        move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
        $message[] = 'Product updated successfully';
        header('location: admin.php');
    }
    else{
        $message[] = 'Product could not be updated';
        header('location: admin.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin.css" rel="stylesheet">
    <title>Main Menu for admin</title>
</head>
<body>

<?php

if (isset($message)){
    foreach($message as $message){
        echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display=`none` ;"></i></div>';
    };
}
?>

<?php 
include 'adminheader.php' ;

?>

<div class="container">
    <section>
        <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
            <h3>Add a new product</h3>
            <input type="text" name="p_name" placeholder="Enter the product name" class="box" required>
            <input type="number" name="p_price" min="0" step="0.01" placeholder="Enter the product price" class="box" required>
            <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
            <select name="category" class="box" required>
                <option value="" disabled selected>select category --</option>
                <option value="Dessert">Dessert</option>
                <option value="Cake">Cake</option>
                <option value="Gift Box">Gift Box</option>
                <option value="Gift Box Cake">Gift Box Cake</option>
            </select>
            <input type="submit" value="add the product" name="add_product" class="btn">
        </form>
    </section>

    <section class="display-product-table">
        <table>
            <thead>
                <th>product image</th>
                <th>product name</th>
                <th>product price</th>
                <th>product category</th>
                <th>action </th>
            </thead>
            
            <tbody>
                <?php

                    $select_products = mysqli_query($conn, "SELECT * FROM `cart_product` ");
                    if(mysqli_num_rows($select_products) > 0){
                        while($row = mysqli_fetch_assoc($select_products)){
                ?>

                <tr>
                    <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                    <td><?php echo $row['name']; ?></td>
                    <td>RM<?php echo $row['price']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td>
                        <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this item?');">
                        <i class="fas fa-trash"></i>Delete</a>
                        <a href="admin.php?edit=<?php echo $row['id']; ?>" class="option-btn">
                        <i class="fas fa-edit"></i>Update</a>
                    </td>
                </tr>

                <?php
                        };
                    }else{
                        echo "<div class='empty'>No product added</div>";
                    }

                ?>
            </tbody>
        </table>
    </section>

    <section class="edit-form-container">

        <?php
            if(isset($_GET['edit'])){
            $edit_id = $_GET['edit'];
            $edit_query = mysqli_query($conn, "SELECT * FROM `cart_product` WHERE id = '$edit_id'");

            if(mysqli_num_rows($edit_query) > 0){
                while($fetch_edit = mysqli_fetch_assoc($edit_query)){

        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="" alt="" class="img">
            <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
            <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
            <input type="number" min="0" step="0.01" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
            <select name="category" class="box" required value="<?php echo $fetch_edit['category']; ?>">
                <option value="" disabled selected>Select category --</option>
                <option value="Dessert">Dessert</option>
                <option value="Cake">Cake</option>
                <option value="Gift Box">Gift Box</option>
                <option value="Gift Box Cake">Gift Box Cake</option>
            </select>
            <input type="file" class="box" accept="image/png, image/jpg, image/jpeg" required name="update_p_image" value="<?php echo $fetch_edit['image']; ?>">
            <input type="submit" value="Update the product" name="update_product" class="btn">
            <input type="reset" value="Cancel" id="close-edit" class="option-btn">
        </form>
        <?php
                    };
                };
                echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script";
            };
        ?>
    

    </section>
</div>
    


<script src="admin.js"></script>
<script src="https://kit.fontawesome.com/d938dc7e27.js" crossorigin="anonymous"></script>
</body>
</html>