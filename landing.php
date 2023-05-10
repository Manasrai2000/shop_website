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
  <title>
    <?php echo $product[1]; ?>
  </title>
  <style>
    body {
      background-color: #2a2a2a;
    }
    .card,.card-head{
      display: flex;
      flex-direction: column;
      align-content: center;
      align-items: center;
      justify-content: center;
      text-align: center;
      flex-wrap: wrap;
      background-color: rgba(255, 255, 255, 0.13);
      backdrop-filter: blur(5px);
      transition: 0.5s;
      color:#ffffff;
    }
    .card {
      display: flex;
      flex-direction: column;
      align-content: center;
      align-items: center;
      justify-content: center;
      text-align: center;
      flex-wrap: wrap;
      margin: 0% 1% 1% 1%;
      height: 400px;
      border-radius: 0px 0px 20px 20px;
      background-color: rgba(255, 255, 255, 0.13);
      backdrop-filter: blur(5px);
      transition: 0.5s;
      color:#ffffff;
    }

    .card-head {
      display: flex;
      flex-direction: column;
      align-content: center;
      align-items: center;
      justify-content: center;
      text-align: center;
      flex-wrap: wrap;
      height: 40px;
      margin: 1% 1% 0% 1%;
      border-radius: 20px 20px 0px 0px;
      background-color: rgba(255, 255, 255, 0.13);
      backdrop-filter: blur(5px);
      transition: 0.5s;
      color:#ffffff;
      
    }
  </style>
</head>

<body>
  <!-- navbar -->
  <div class="hero-image"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./images/<?php echo $product[2]; ?>');">
    <nav>
      <div class="topmenu">
        <a href="index.php">Home</a>
        <a href="about.html">About</a>
        <a href="menu.html">Menu</a>
        <a href="Contact.html">Contact</a>
      </div>
    </nav>
    <!-- navbar -->
    <!-- hero -->
    <div class="hero-text">
      <h1 style="font-size:50px">
        <?php echo $product[1]; ?>
      </h1>
      <p>
        <?php echo $product[3]; ?>
      </p>
      <a href="menu.html"><button>Add</button></a>
    </div>
  </div>
  <!-- hero -->

  <div class="card-head">Discription</div>
  <div class="card">
    <h1>THANK YOU</h1>
    <p> We make this website</p>
  </div>

  <!-- footer -->
  <div class="footer" style="position: fixed;">
    <p>Shop name.com</p>
  </div>
  <!-- footer -->
</body>

</html>