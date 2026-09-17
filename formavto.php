<?php 
include 'temp/head.php';
include 'temp/nav.php';
include 'temp/bd.php';
?>
<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
<form method="post" action="avto.php" class="mb-3 mt-3 pt-3 pb-3 ps-3 pe-3  border border-3 border-warning rounded-3">
    <h2>Авторизация</h2>
  <div class="mb-3">
    <label for="name" class="form-label">Логин</label>
    <input type="text" class="form-control" id="name" name="login" required>
  </div>
  <div class="mb-3">
    <label for="p" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="p" name="password" required>
  </div>
  <button type="submit" class="btn btn-warning">Вход</button>
  <a href="formregistr.php">Еще не зарегистрированы? Регистрация</a>
   <?php
  $mess=$_GET['mess']; 
  echo '<p>'.$mess.'</p>';
 ?>
</div>
<div class="col-3"></div>
</div>
 
</form>


