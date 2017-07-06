<?php
    $soc = $_POST['name'];
    $adr = $_POST['address'];
    $dbh = require_once("sett.php");
    $ins = $dbh->prepare("INSERT INTO social (name,address) values (:n,:a)");
    $ins->execute([
        'n' => $soc,
        'a' => $adr
    ]);
header('Location:../social.php?act=modal');
?>