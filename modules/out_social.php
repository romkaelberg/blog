<?php
//$post = filter_input_array(INPUT_POST, [
    //'login'=>FILTER_SANITIZE_STRING,
    //'password'=>FILTER_UNSAFE_RAW
//]);
    //FOR SEMANTIC
    $dbh = require_once("sett.php");
    $db = $dbh->query("SELECT name,address FROM social");
    $menu_arr = $db->fetchAll();
        echo "
            <table class=\"bordered\">
            <thead>
                <tr>
                    <th data-field=\"id\">Имя соцсети</th>
                    <th data-field=\"name\">Адрес соцсети</th>
                </tr>
                </thead>
        ";
        foreach ($menu_arr as $value) {
        echo "<tr><td>".$value["name"]."</td><td><a href='".$value["address"]."'>".$value['address']."</a></td></tr>";
                
  }
    echo "</div>";
    echo "</div>";
?>