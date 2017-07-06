<?php
$server = $_POST['server'];
$user = $_POST['user'];
$db = $_POST['db'];
$pass = $_POST['password'];
$fp = fopen("connect1.php", "w+"); // Открываем файл в режиме записи
$mytext = "Это строку необходимо нам записать\r\n"; // Исходная строка
fwrite($fp, '<?php'."\n"); // Запись в файл
fclose($fp); //Закрытие файла
$fp = fopen("connect1.php", "a+"); // Открываем файл в режиме записи
$login_data = '$user='.'"'.$user.'"'.';'."\n".'$pass='.'"'.$pass.'";'."\n".'$host='.'"'.$server.'";'."\n".'$db='.'"'.$db.'";'."\n"; // Исходная строка
fwrite($fp, $login_data); // Запись в файл
fclose($fp); //Закрытие файла
$fp = fopen("connect1.php", "a+"); // Открываем файл в режиме записи
$connect_settings =
    'try {
    $dbh = new PDO(\'mysql:host='.$server.';dbname='.$db.'\', $user, $pass); //подключаемся к бд
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//оъект PDO
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $dbh;
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>';
fwrite($fp, $connect_settings); // Запись в файл
fclose($fp); //Закрытие файла

?>