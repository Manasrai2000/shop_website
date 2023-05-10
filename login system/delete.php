<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

// GET se id mil rahi hai
$id = $_GET['items'];
// find kar rahe hai
$result_new = $conn->query("SELECT  *FROM products WHERE items = $id ");
// array bana ke daal de rahe hai
$product = (mysqli_fetch_array($result_new));
// now we can use array $product

$query = "DELETE FROM `products` WHERE `products`.`items` = $id";
if($conn->query($query)===true){
    echo " <h1> " .$product['name'] ." record deleted successfully. </h1>";
}
else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
//"DELETE FROM `products` WHERE `products`.`items` = $id"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete products</title>
</head>
<body>
    
</body>
</html>