<?php
$response_array = [
    "status" => "",
    "description" => ""
];
require_once ("config_parser.php");
$DB_login = $config_array->DB_login;
$DB_password = $config_array->DB_password;

try {
    $dbc = new PDO('mysql:host=localhost;dbname=admin', $DB_login, $DB_password);
} catch (PDOException $e) {
    echo $e->getMessage();
}

$mode= $_GET['mode'];
if($mode=="authorize"){
    $login = $_GET['login'];
    $password = $_GET['password'];
    $dbq = $dbc->prepare("SELECT * FROM users WHERE login=?");
    $dbq->execute([$login]);
    $user_data = $dbq->fetchAll();
    $login_counter = $dbq->rowCount();
    foreach ($user_data as $value) {
        $user_password_in_db = $value['pass'];
    }
    $hash_password = sha1($password);
    if($login_counter == 1 && $user_password_in_db == $hash_password) {
        $response_array["status"] = "ok";
        echo json_encode($response_array);
    }else {
        $response_array["status"] = "error";
        echo json_encode($response_array);
    }
}
if($mode == "authorize/check_session") {
    $client_session = $_GET['client_session'];
    $dbq = $dbc->prepare("SELECT * FROM users WHERE session_id=?");
    $dbq->execute([$client_session]);
    $user_data = $dbq->fetchAll();
    $db_session_counter = $dbq->rowCount();
    if ($db_session_counter == 1) {
        $response_array["status"] = "ok";
        echo json_encode($response_array);
    }else {
        $response_array["status"] = "error";
        echo json_encode($response_array);
    }
}
