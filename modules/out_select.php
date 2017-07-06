<?php
$dbh1 = require_once("modules/sett.php");
$db1 = $dbh->query("SELECT id,name FROM directories");
$menu_arr1 = $db1->fetchAll();
//$name = $_GET['name'];
foreach ($menu_arr1 as $value1) {
    echo "<option>".$value1 ['name']."</option>";
}

?>".$value1."