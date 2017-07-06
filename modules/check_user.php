<?php
session_start();
if(isset($_SESSION['userid']))    {
    $username = $_SESSION['userid'];
//    print "пользователь авторизован";
}else {
    header("Location:auth.html");
}
?>