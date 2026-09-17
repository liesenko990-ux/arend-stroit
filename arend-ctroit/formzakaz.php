<?php
include 'temp/head.php';
include 'temp/nav_client.php';
include 'temp/bd.php';
?>
<?php
session_start();
$id=$_GET['id_zakaz'];
$id_user=$_SESSION['id_user'];
$sql = "SELECT * FROM `zakaz` WHERE id_zakaz=$id";
        $res = $mysqli->query($sql);
        foreach($res as $row){
echo '<form method="post" action="">
<div class="container">
    <h2>Подтвердите заказ ('.$_SESSION['fio'].')</h2>
        <div class="mb-3">
            <label for="">Спецтехника:</label>
            <input type="text" class="form-control" id="" name="'.$row['id_zakaz'].'" value="'.$row['speyetechnika'].'" required>
        </div>
        <div class="mb-3">
            <label for="">Описание:</label>
            <input type="text" class="form-control" id="" name=" '.$row['id_zakaz'].'" min="1" value="'.$row['description'].'" >
        </div>
        <div class="mb-3">
        <a href="zakaz_b.php?id_zakaz='.$row['id_zakaz'].'" class="btn btn-primary">Заказать</a>
</div>
</div>
    </form>';
        }
        ?>
<?php
include 'temp/footer.php';
?>