<?php
//$post = filter_input_array(INPUT_POST, [
//'login'=>FILTER_SANITIZE_STRING,
//'password'=>FILTER_UNSAFE_RAW
//]);
//FOR SEMANTIC
$dbh1 = require_once("sett.php");
$db = $dbh->query("SELECT id,header FROM content");
$menu_arr = $db->fetchAll();
foreach ($menu_arr as $value) {
    echo "<a href = 'content.php?id=".$value['id']."'>".$value['header']."</a><pre></pre>";

}
?>