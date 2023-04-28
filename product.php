<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our menu</title>
    <link rel="stylesheet" href="./css/in.css">
    <link rel="shortcut icon" href="./images/pancake.png" type="image/x-icon">
</head>
<body bgcolor="999999">
    <nav>
        <div class="topmenu">
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
        </div>
    </nav>
        
        <!-- our products -->
        <section class="products">
            <h2>Our Products</h2>
            <div class="all-products">
                
                
                <?php
      $query = "SELECT *FROM products";
      $result = $conn->query($query);
      //$conn->close();
      while ($row = mysqli_fetch_array($result)) {
        ?>

<div class="product">
    <img src="./images/<?php echo $row['image']; ?>">
    <div class="product-info">
        <h4 class="product-title">
            <?php echo $row['name']; ?>
        </h4>
        <a class="product-btn" href="<?php $idvar = $row['items'];
            echo "landing.php?items=" . $idvar ?>"><?php echo $row['prize']; ?></a>

          </div>
        </div>
        
        
        <?php } ?>
        
    </div>
</section>
<!-- our products -->
</body>
</html>