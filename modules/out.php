<?php
//$post = filter_input_array(INPUT_POST, [
//'login'=>FILTER_SANITIZE_STRING,
//'password'=>FILTER_UNSAFE_RAW
//]);

if(isset ($_GET['name'])) {
    $name = $_GET['name'];
    //$dbh = require_once("connect.php");
    $db1 = $dbh->query("SELECT id,name,directory,header FROM content WHERE directory='$name'");
    $menu_arr = $db1->fetchAll();
    $name = $_GET['name'];
    foreach ($menu_arr as $value) {
        echo "<tr><td>" . $value["header"] . "</td><td><a href='modules/delete_directory.php?status=directory&directory=" . $value['directory'] . "'><i class='fa fa-times'></i></a><a style='padding-left:20px;' href='edit.php?id=".$value['id']."&dir=".$value['directory']."'><i class='fa fa-edit'></i></a></a></td><td>" . $value["directory"] . "</td></tr>";

    }
    return;
}if(!isset($_GET['name'])) {

//    $name = $_GET['name'];
    $dbh1 = require_once("sett.php");
    $db1 = $dbh->query("SELECT id,header,directory FROM content");
    $menu_arr = $db1->fetchAll();
    foreach ($menu_arr as $value) {
        echo "<tr><td>" . $value["header"] . "</td><td><a href='modules/delete.php?pagename=".$value['header']."&dir=".$value['directory']."'><i class='fa fa-times'></i></a><a style='padding-left:20px;' href='edit.php?id=".$value['id']."&dir=".$value['directory']."'><i class='fa fa-edit'></i></a></td><td>" . $value["directory"] . "</td></tr>";

    }
}
?>