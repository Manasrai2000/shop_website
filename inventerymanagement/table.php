<?php
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <title>All Products</title>
</head>
<body>
    <div class="cointainer">
        <table>

            <tr><th>Products type lists</th></tr>
            <!-- while loop to print whole products which are available in the database -->
            <?php
            $query = "SELECT *FROM products";
            // object of conn is called then insert query in it
            $result = $conn->query($query);
            
            ?>
            <tr>
                <td>Hello</td> 
                <td> kon</td>
            </tr>
        </table>
    </div>
</body>
</html>