<?php
include "conn.php";
// GET se id mil rahi hai
$id = $_GET['items'];
// find kar rahe hai
$result_new = $conn->query("SELECT  *FROM products WHERE items = $id ");
// array bana ke daal de rahe hai 
$product = (mysqli_fetch_array($result_new));
// now we can use array $product
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/in.css">
    <link rel="shortcut icon" href="./images/pancake.png" type="image/x-icon">
    <title><?php echo $product[1]; ?></title>
</head>
<body>
<!-- navbar -->
<div class="hero-image"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./images/<?php echo $product[2]; ?>');">
    <nav>
      <div class="topmenu">
        <a href="#">Home</a>
        <a href="about.html">About</a>
        <a href="#">Menu</a>
        <a href="#">Contact</a>
      </div>
    </nav>
    <!-- navbar -->
    <!-- hero -->
    <div class="hero-text">
      <h1 style="font-size:50px"><?php echo $product[1]; ?></h1>
      <p><?php echo $product[3]; ?></p>
      <a href="menu.html"><button>Menu</button></a>
    </div>
  </div>
  <!-- hero -->
</body>
</html>