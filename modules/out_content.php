<?php
//$post = filter_input_array(INPUT_POST, [
//'login'=>FILTER_SANITIZE_STRING,
//'password'=>FILTER_UNSAFE_RAW
//]);
//FOR SEMANTIC
$dbh1 = require_once("sett.php");
$id = $_GET['id'];
//echo $id;
$db = $dbh->query("SELECT id,header,content FROM abc WHERE id = '$id'");
$menu_arr = $db->fetchAll();
foreach ($menu_arr as $value) {
    echo "<header><h3>".$value['header']."</h3></header>";
    echo "<p>".$value['content']."</p>";

}
?>