<?php
include "../conn.php";
if (isset($_POST["tablename"])) {
  
  $tablename = $_POST["tablename"];
  
}
// Create Table
if(isset($tablename)) {
  // change query according to number of data
  $sql = "CREATE TABLE `$tablename` ( `items` INT(255) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `images` VARCHAR(255) NOT NULL , `prize` INT(10) NOT NULL , PRIMARY KEY (`items`))";
  
  if ($conn->query($sql) === TRUE) {
    echo "Category created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  mysqli_close($conn);
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Product Category</title>
</head>
<body>
  <form action="#" method="post">
    Table Name: <input type="text" name="tablename"><br>
    <input type="submit">
    </form>
</body>
</html>