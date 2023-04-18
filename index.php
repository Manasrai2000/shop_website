<?php
include "conn.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evergreen</title>
  <link rel="stylesheet" href="./css/in.css">


</head>

<body>
  <!-- navbar -->
  <div class="hero-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('hero.jpg');">
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
      <h1 style="font-size:50px">Evergreen</h1>
      <p>kuch bhi discription</p>
      <a href="menu.html"><button>Menu</button></a>
    </div>
  </div>
  <!-- hero -->
  <!-- our products -->
  <section class="products">
		<h2>Our Products</h2>
		<div class="all-products">
			

			<?php
    $query = "SELECT  *FROM products";
    $result = $conn->query($query);
    //$conn->close();
    while ($row = mysqli_fetch_array($result)) {
    ?>
			<div class="product">
				<img src="./images/<?php echo $row['image']; ?>">
				<div class="product-info">
					<h4 class="product-title"><?php echo $row['name']; ?>
						</h4>
					<!-- <p class="product-price">$629*</p> -->
					<a class="product-btn" href="#"><?php echo $row['prize']; ?></a>

				</div>
			</div>

			<?php } ?>

		</div>
	</section>
  <!-- our products -->
  <!-- footer -->
  <div class="footer">
    <p>Evergreen.com</p>
  </div>
  <!-- footer -->
</body>

</html>