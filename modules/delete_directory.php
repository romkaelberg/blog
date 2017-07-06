<?php
    $dbh = require_once("sett.php");
    $name = $_GET['directory'];
    $count = $dbh->exec("DELETE FROM directories WHERE name = '$name'");
    $count1 = $dbh->exec("DELETE FROM content WHERE directory = '$name'");
    header("Location:../index.php#test3");
?>