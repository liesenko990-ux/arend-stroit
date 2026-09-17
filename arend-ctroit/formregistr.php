<?php 
include 'temp/head.php';
include 'temp/nav.php';
?>
<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
<form method="post" action="registr.php" class="mb-3 mt-3 pt-3 pb-3 ps-3 pe-3  border border-3 border-warning rounded-3">
    <h2>Регистрация</h2>
  <div class="mb-3">
    <label for="name" class="form-label">ФИО</label>
    <input type="text" class="form-control" id="name" name="fio" required> 
  </div>
  <div class="mb-3">
    <label for="l" class="form-label">Логин</label>
    <input type="text" class="form-control" id="l" name="login" required> 
  </div>
  <div class="mb-3">
    <label for="p" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="p" name="password" min="8" required> 
  </div>
  <div class="mb-3">
    <label for="t" class="form-label">Телефон</label>
    <input type="tel" class="form-control" id="t" name="tel" pattern="\+7\(\d{3})-\d{3}-\d{2}-\d{2}"  required> 
  </div>
  <button type="submit" class="btn btn-warning">Зарегистрироваться</button>
</form>
</div>
<div class="col-3"></div>
</div>
