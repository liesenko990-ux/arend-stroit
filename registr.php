<?php
include 'temp/bd.php';
$fio=$_POST['fio'];
$login=$_POST['login'];
$password=$_POST['password'];
$tel=$_POST['tel'];
$role=$_POST['role'];
$sql="INSERT INTO `user`(`fio`, `login`, `pass`, `role`,tel) VALUES
 ('$fio','$login','$password','клиент','$tel')";
$rel=$mysqli->query($sql);
header('Location: formavto.php');
?>