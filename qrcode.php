https://sourceforge.net/projects/phpqrcode/files/
<?php 
include("./src/phpqrcode/qrlib.php");
$dirname = "codes/";
$filename = "ivan.png";

QRcode::png("https://marca.com", "codes/ivan.png", "H", "12");

echo '<img class="img-thumbnail" src="/codes/ivan.png"/>';
