<?php
//$post = filter_input_array(INPUT_POST, [
    //'login'=>FILTER_SANITIZE_STRING,
    //'password'=>FILTER_UNSAFE_RAW
//]);
    //FOR SEMANTIC
    $dbh = require_once("sett.php");
    $db = $dbh->query("SELECT name,address FROM social");
    $menu_arr = $db->fetchAll();
        foreach ($menu_arr as $value) {
        echo "<tr><td>".$value["name"]."</td><td>".$value["address"]."</td></tr>";
                
  }
    echo "</div>";
    echo "</div>";
?>