<?php
include 'phpqrcode/qrlib.php';




// Generate QR code
$text = 'Hello, World!';
$size = 10;
$padding = 2;
$errorCorrectionLevel = 'H';
QRcode::png($text, false, $errorCorrectionLevel, $size, $padding);





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="qr.css">
    <title>Qr code</title>
</head>

<body>




    <div class="Container">
        <?php
        // Output QR code to browser
        header('Content-Type: image/png');
        $text = 'Hello, World!';
        $size = 10;
        $padding = 2;
        $errorCorrectionLevel = 'H';
        QRcode::png($text, false, $errorCorrectionLevel, $size, $padding);

        ?>
    </div>
</body>

</html>