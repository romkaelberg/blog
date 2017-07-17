<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//зависимости
require_once ("methods.php");
require_once ("config_parser.php");
//данные для подключения к бд
$DB_login = $config_array->DB_login;
$DB_password = $config_array->DB_password;
//подключение к бд
try {
    $dbc = new PDO('mysql:host=localhost;dbname=admin', $DB_login, $DB_password);
} catch (PDOException $e) {
    echo $e->getMessage();
}
//режим api
$mode= $_GET['mode'];
//режимы
if($mode == "authorize"){
    $login = $_GET['login'];
    $password = $_GET['password'];
}
if($mode == "get_user_info") {
    $CLIENT_key = $_GET['key'];
    $user_info = json_encode(GET_user_info($CLIENT_key,$dbc));
    echo $user_info;
}
if($mode == "get_pages_list") {
    $CLIENT_key = $_GET['key'];
    $pages_list = json_encode(GET_pages_list($CLIENT_key,$dbc));
    echo $pages_list;
}
if($mode == "get_page_content") {
    $CLIENT_key = $_GET['key'];
    $page_id = $_GET['page_id'];
    $page_content = json_encode(GET_page_content($CLIENT_key,$dbc,$page_id));
    echo $page_content;
}
if($mode == "delete_page") {
    $CLIENT_key = $_GET['key'];
    $page_id = $_GET['page_id'];
    echo DELETE_page($CLIENT_key,$dbc,$page_id);
}
if($mode == "add_page") {
    $CLIENT_key = $_GET['key'];
    $name = $_GET['name'];
    $content = $_GET['content'];
    echo ADD_page($CLIENT_key,$dbc,$name,$content);
}
