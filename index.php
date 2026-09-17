<?php
include 'temp/head.php';
include 'temp/bd.php';
session_start();
if (!empty($_SESSION['userrole'])) { 
  
    $role = ($_SESSION['userrole']);

    if ($role == 'клиент') {
        include 'temp/nav_client.php';
    } if ($role == 'Admin') {
        include 'temp/nav_admin.php'; 
    }
} 
else {
    include 'temp/nav.php';
}
?>
<h1 class="text-center mb-3 mt-3">Cпецтехника</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $sql = "SELECT * FROM `zakaz`";
        $res = $mysqli->query($sql);
        foreach($res as $row){
             echo '<div class="col">
    <div class="card">
      <img src="img/'.$row["img"].'" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">'.$row["speyetechnika"].'</h5>
        <p class="card-text"><b>Описание:</b> '.$row["description"].'</p>';         
            if(!empty($_SESSION['userrole'])) {
                echo '<a href="formzakaz.php?id_zakaz='.$row['id_zakaz'].'" class="btn btn-primary">Заказать</a>';
            } else {
                 echo '<a href="formavto.php" class="btn btn-primary">Заказать</a>';
             }
                    echo '</div>
            </div>
        </div>
                ';}?>
<?php
include 'temp/footer.php';
?>