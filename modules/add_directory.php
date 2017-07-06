<?php
$dbh = require_once("sett.php");
$name = $_POST['name'];
if(isset($name)) {
    $ins = $dbh->prepare("INSERT INTO directories (name) values (:n)");
    $ins->execute([
        'n' => $name
    ]);
    setCookie("dir_status","ok",time()+1,"/");
    header("Location:../index.php#test3");
    return;
}else {

    setCookie("dir_status","error",time()+1,"/");
    header("Location:../index.php#test3");
    return;
}
?>