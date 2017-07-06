<?php
/**
 * Created by PhpStorm.
 * User: rmelb
 * Date: 12/4/16
 * Time: 11:02 AM
 */
$name = $_GET['name'];
$content = $_POST['code1'];
if($name == "index") {
    $fp = fopen('../index.html', 'w+');
    $write = fwrite($fp, $content); // Запись в файл
    if ($write) {
        fclose($fp); //Закрытие файла
        header("Location:templates.php");
    }
    }
    if($name == "directory") {
        $fp = fopen('../directory.php','w+');
        $write = fwrite($fp,$content);
        if($write) {
            fclose($fp);
            header("Location:templates.php");
        }
    }
    if($name == "content") {
        $fp = fopen('../content.php','w+');
        $write = fwrite($fp,$content);
        if($write) {
            fclose($fp);
            header("Location:templates.php");
        }
    }