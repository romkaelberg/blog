<?php
$content = file_get_contents("conf.json");
$cart = json_decode( $content, true );
$db_username = $cart["settings"][0]["db_username"];
$db_password = $cart["settings"][0]["db_password"]; 
$db_host = $cart["settings"][0]["db_host"];
$db_name = $cart["settings"][0]["db_name"];
?>
