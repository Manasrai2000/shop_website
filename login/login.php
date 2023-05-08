<?php
session_start();
if (isset($_POST["id"])) {
    $_SESSION['id'] = $_POST["id"];
    if (isset($_SESSION['id'])) {
        header('Location: dash.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    
    <form action="#" method="post">
        <h1>Login page</h1>
    <input type="text" name="id">
    <button type="submit">login</button>
    </form>
</body>
</html>