<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
   /* table styling */
   table{
      width: 80%;
      margin: auto;
   }
   tr,th,td{
      border: 1px solid black;
      text-align: center;
   }

</style>
</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>
<!-- table for showing all produts at one page -->
<table>
   <tr>
      <th>items no.</th>
      <th>item name</th>
      <th>images</th>
      <th>prize</th>
      <th>oprations</th>
   </tr>
   <?php
      $query = "SELECT *FROM products";
      $result = $conn->query($query);
      $conn->close();
      while ($row = mysqli_fetch_array($result)) {
        ?>
           <tr>
              <td><?php echo $row['items'];?></td>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['image'];?></td>
              <td><?php echo $row['prize'];?></td>
              <td> <a href="update.php?items=<?php echo $row['items']?>" style="background-color: aquamarine; padding: 2px; ">Edit</a> <a href="delete.php?items=<?php echo $row['items']?>" style="background-color: red; padding: 2px; ">Delete</a> </td>
            </tr>
   <?php }?>
</table>
<!-- table for showing all produts at one page -->
<a href="create.php" style="background-color: #006bff;padding: 5px;/* width: fit-content; */border-radius: 6px;display: flex;justify-content: center;flex-direction: row;flex-wrap: nowrap;align-content: center;align-items: center;">add new products</a>

</body>
</html>