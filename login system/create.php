<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}
if (isset($_POST['product'])) {
   $product = $_POST['product'];
   $image = $_POST['image'];
   $id = $_POST['id'];
   $prize = $_POST['price'];
    echo $_POST['product'] . $_POST['image'] . $_POST['price'];
    $query = "INSERT INTO `products`(`items`, `name`, `image`, `prize`) VALUES ('$id','$product', '$image', '$prize')";
    if($conn->query($query)===true){
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>create product</title>
   </head>
<body>

<form action="#" method="post">
    <h2>Create Product</h2>
    <input type="number" name="id" placeholder="id not mandetory">
    <input type="text" name="product" placeholder="Enter product name"><br>
    <input type="text" name="image" placeholder="Enter image name with type"><br>
    <input type="number" name="price" placeholder="Enter product price"><br>
    <button type="submit">create</button>
</form>
<a href="logout.php">Logout</a>
</body>
</html>