<?php
$post = filter_input_array(INPUT_POST, [
    'login'=>FILTER_SANITIZE_STRING,
    'password'=>FILTER_UNSAFE_RAW
]);
try {
    $user="root";
    $pass="onsapoengo";
    $host="localhost";
    $db="admin";

    $dbh = new PDO('mysql:host=localhost;dbname=admin', $user, $pass); //подключаемся к бд
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//оъект PDO
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pss = sha1($post['password']); //зашифрованный пароль
    $sth = $dbh->prepare("SELECT * FROM users WHERE login=?");
    $sth->execute([$post['login']]);
    $pth = $dbh->prepare("SELECT * FROM users WHERE pass=?");
    $pth->execute([$post['password']]);
    $result = $sth->rowCount();
    $resultp = $pth->rowCount();//вывод кол-ва записей
    print_r($result);
    if ($result==0) { //проверка
        echo " Такого пользователя нету";
        return;
    } else {
        if ($resultp==0) { //проверка
            echo " Неверный пароль";
            return;
        } else {
            echo "ok";

            $_SESSION['userid'] = $post['login'];
            $user = $_SESSION['userid'];
            echo $user;
        }
        //setcookie("users",$post['login'],time()+3600);
        //header("Location: pass.html");
        if ($post['login']=='root') {
            session_start();
            $_SESSION['userid'] = $post['login'];

            header("Location:../admin");
            //header("Location: pages.php");
        }
        else {
        }
             
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
