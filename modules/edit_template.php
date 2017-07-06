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
      $test = fwrite($fp, $content); // Запись в файл
      if ($test) echo 'Данные в файл успешно занесены.';
      else echo 'Ошибка при записи в файл.';
      fclose($fp); //Закрытие файла
  }