<?php
$header = $_POST['header'];
$content = $_POST['content'];
$dbh = require_once("sett.php");
$db1 = $dbh->query("SELECT id,header FROM content");
$p = $_GET['id'];

echo $p;
$mount = [
        "Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"
        ];
$current_mount = $mount[date('m')-1];
$date = date('y');
$b=$dbh->prepare("UPDATE `content` SET header = '$header', content='$content' WHERE id = '$p'");
$b->execute();
header("Location:../index.php");
?>
