<?php
include "conn.php";
include 'index.php';
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";

$url .= $_SERVER['HTTP_HOST'];


$url .= $_SERVER['REQUEST_URI'];


$whatIWant = substr($url, strpos($url, "?") + 1);
$getdetails = "SELECT  *FROM college_details WHERE ID= $whatIWant";

$result_new = $conn->query($getdetails);
$college_array = (mysqli_fetch_array($result_new));
print_r($college_array);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>