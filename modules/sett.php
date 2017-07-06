<?php
$user="root";
$pass="onsapoengo";
$host="localhost";
$db="admin";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=admin', $user, $pass); //подключаемся к бд
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//оъект PDO
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $dbh;
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>