<?php
$user='root';
$pass='1';
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=mydb', $user, $pass); //подключаемся к бд
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//оъект PDO
            $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    ?>