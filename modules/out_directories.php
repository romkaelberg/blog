<?php
//$post = filter_input_array(INPUT_POST, [
    //'login'=>FILTER_SANITIZE_STRING,
    //'password'=>FILTER_UNSAFE_RAW
//]);
    //FOR SEMANTIC
    $dbh1 = require_once("sett.php");
    $db = $dbh->query("SELECT id,name FROM directories");
    $menu_arr = $db->fetchAll();
    foreach ($menu_arr as $value) {
        echo "<tr><td><a href = 'pages.php?name=".$value['name']."'>".$value['name']."</a><td><a href='modules/delete_directory.php?status=directory&directory=".$value['name']."'><i class='fa fa-times'></i></a></td></td></tr>";

  }
?>