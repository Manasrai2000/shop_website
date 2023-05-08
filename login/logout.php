<?php 
session_start();
if (!isset($_SESSION['id'])){
    header('Location: login.php');
}

echo "this id =>  <h1>".$_SESSION["id"]."</h1>  has been logout";
session_unset();
session_destroy();
echo "<h1>session distroyed successfully</h1>";
?>
