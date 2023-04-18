<?php
$servername = "localhost";
$username = "root";
$password = "";

// Connection
$conn = new mysqli(
  $servername,
  $username,
  $password,
  "ever"
);

// For checking if connection is
// successful or not
if ($conn->connect_error) {
  die("Connection failed: "
    . $conn->connect_error);
}