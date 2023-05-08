<?php
session_start();
if (!isset($_SESSION['id'])) {
        header('Location: login.php');
    echo "<h2>" . $_SESSION['id'] . " has been login</h2>";
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<a href="logout.php"><button type="submit">logout</button></a>
    <h1>kuh bhi</h1>
</body>
</html>