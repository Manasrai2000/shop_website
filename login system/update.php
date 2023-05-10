<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
}

// GET se id mil rahi hai
$id = $_GET['items'];
// find kar rahe hai
$result_new = $conn->query("SELECT  *FROM products WHERE items = $id ");
// array bana ke daal de rahe hai
$product = (mysqli_fetch_array($result_new));
// now we can use array $product
if (isset($_POST['uname']) && isset($_POST['uimage']) && isset($_POST['uprize'])) {

    $uname = $_POST['uname'];
    $uimage = $_POST['uimage'];
    $uprize = $_POST['uprize'];

    $query = "UPDATE `products` SET `name` = '$uname', `image` = '$uimage', `prize` = '$uprize' WHERE `products`.`items` = $id";
    if ($conn->query($query) === true) {
        echo " <h1> record updated successfully. </h1>";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    // UPDATE `products` SET `name` = '$uname', `image` = '$uimage', `prize` = '$uprize' WHERE `products`.`items` = 10
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        form {
            margin: auto;
        }

        input {
            margin: auto;
            width: 80%;
        }
    </style>
</head>

<body>
    <form action="#" method="post">
        <h2>
            <?php echo $product['name'] ?>
        </h2>
        <input type="text" name="uname" placeholder="Update name">
        <h2>
            <?php echo $product['image'] ?>
        </h2>
        <input type="text" name="uimage" placeholder="Update image">
        <h2>
            <?php echo $product['prize'] ?>
        </h2>
        <input type="number" name="uprize" placeholder="Update prize">
        <button type="submit">Update</button>
    </form>
</body>

</html>