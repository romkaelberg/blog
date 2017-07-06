<?php
    $name = $_GET['pagename'];
    echo $name;
    $dir = $_GET['dir'];
echo $dir;
    $dbh = require_once("sett.php");
    $dbh->exec("DELETE FROM content WHERE header = '$name' AND directory='$dir'");
    header("Location:../index.php");
?>
