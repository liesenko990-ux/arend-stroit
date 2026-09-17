<?php
include 'temp/bd.php';
session_start();
$id_zakaz=$_GET['id_zakaz'];
$id_user=$_SESSION['id_user'];
$sql="INSERT INTO `zakaz_pol`( `id_user`, `id_zakaz`) VALUES ('$id_user','$id_zakaz')";
var_dump($sql);

$res=$mysqli->query($sql);

header('Location: ');
?>