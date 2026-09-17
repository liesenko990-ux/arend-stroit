<?php 
session_start();
include 'temp/bd.php';
$userlogin = $_POST['login']; 
$userpassword = $_POST['password']; 
$sql = "SELECT * FROM user WHERE login='$userlogin' AND pass='$userpassword'";
$res = $mysqli->query($sql);
$user = mysqli_fetch_assoc($res);
if($user){ 
    $_SESSION['id_user'] = $user['id_user']; 
    $_SESSION['userrole'] = $user['role'];
    $_SESSION['fio'] = $user['fio'];
    header("Location: index.php");
}else{
    header("Location: formavto.php?mess=Неверный логин или пароль");
}
?>