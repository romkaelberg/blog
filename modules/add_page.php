<?php
$name = $_POST["name"];
$select = $_POST["mysel"];
echo $name;
echo $select;
$dbh = require_once("sett.php");
$ins = $dbh->prepare("INSERT INTO content (header,directory) values (:n,:d)");
$ins->execute([
    'n' => $name,
    'd' => $select
]);
    header("Location:../index.php");
?>