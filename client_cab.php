<?php
include 'temp/head.php';
include 'temp/nav_client.php';
include 'temp/bd.php';
session_start();
?>
<h1>Мои заказы (<?php echo $_SESSION['fio'];?>)</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Спецтехника</th>
      <th scope="col">Описание</th>
      <th scope="col">Картинка</th>
      <th></th>
    </tr>
    </thead>
  <tbody>
  <?php
  $num = 1;
  $sql = "SELECT fio,speyetechnika,description,img FROM `zakaz_pol` 
  LEFT JOIN user ON zakaz_pol.id_user=user.id_user 
  JOIN zakaz ON zakaz_pol.id_zakaz=zakaz.id_zakaz WHERE zakaz_pol.id_user=user.id_user";
  $res=$mysqli->query($sql);
  foreach($res as $row){ 
    echo'<tr><th>'.$num.'</th>
    <td>'.$row['speyetechnika'].'</td>
    <td>'.$row['description'].'</td>
    <td><img src="img/'.$row['img'].'" alt="Изображений" width="100"></img></td>
    </tr>';
    $num++;
  }
  ?>
  </thead>
</table>
<?php
include 'temp/footer.php';
?>