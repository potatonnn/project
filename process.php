<?php
include"connection.php";
include"phpqrcode/qrlib.php"; 

$folderTemp = 'gqrcode/';
$a = $_POST['iddata'];
$b = $_POST['iname'];
$c = $_POST['contact'];
$d = $a;
$e = $a.".png";
$qual = 'H';
$size = 6;
$padding = 0;
QRCode :: png($d,$folderTemp.$e,$qual,$size,$padding);
$sql = $conn->query("INSERT INTO db_table VALUES('$a','$b','$c','$e')");
if ($sql){
	header('location:download.php');
}else{
	echo"failed";
	die($conn->error);
}

?> 