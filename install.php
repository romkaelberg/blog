<!DOCTYPE HTML>
<html>
<head>
    <meta charset='UTF-8'>
    <title>NightVision</title>
    <link rel='stylesheet' type='text/css' href='styles/css/materialize.css'>
    <link rel='stylesheet' href='styles/css/font/css/font-awesome.min.css'>
</head>
<body style="background: #f1f1f1;">
<!-- Navbar -->
<div class='container' style='padding-top: 180px;padding-left: 20%;'>
    <div class='row'>
        <?php
        if(isset($_GET['id'])) {
            if($_GET['id'] == 1) {
                echo "<form class='col s12' action='?id=5' method='post'>
                    <div class='row'>
                        <div class='input-field col s6'>
                            <input id='last_name' name = 'db_username' type='text' class='validate'>
                            <label for='last_name'>Пользователь БД</label>
                        </div>
                        </div>
                        <div class='row'>
                        <div class='input-field col s6'>
                            <input id='last_name' type='password' name='db_password' validate'>
                            <label for='last_name'>Пароль БД</label>
                        </div>
                    </div>
                    <div class='row'>
                    <div class='input-field col s6'>
                        <input id='last_name' type='text' name='db_host' class='validate'>
                        <label for='last_name'>Сервер mysql</label>
                    </div>
                </div>
                <div class='row'>
                <div class='input-field col s6'>
                    <input id='last_name' type='text' name='db_name' class='validate'>
                    <label for='last_name'>База данных</label>
                </div>
            </div>
            <button class='btn waves-effect waves-light' type='submit' style='width:50%;' name='action'>Отправить</button>
        </div>";
				}
				if($_GET['id'] == 5) {
					$db_username = $_POST['db_username'];
				  $db_password = $_POST['db_password'];
					$db_host = $_POST['db_host'];
					$db_name = $_POST['db_name'];
					$file = 'modules/conf.json';
					$content = file_get_contents($file);
					$content .= '
  {                                           
    "settings": [                            
      {                                      
        "db_username": "'.$db_username.'",                     
        "db_password": "'.$db_password.'",        
        "db_host": "'.$db_host.'",
        "db_name":"'.$db_name.'"      
      },                                     
      {                                      
        "host": 56,                     
        "theme": "light"                        
      }                                      
    ],                                       
    "orderCompleted": true                   
  }                                          
  ';
 				 file_put_contents($file, $content);

				}


        if($_GET['id'] == 3) {
            echo "
                <div class=\"row\">
                    <div class=\"col s8 \">
                      <div class=\"card\">
                        <div class=\"card-content white-text\">
                          <p style='color:black;'>Ну вот и всё. Теперь вы можете создавать свой блог на нашем движке.</p>
                          <p style='color:black;'>Для начала работы войдите в систему</p>
                        </div>
                        <div style='text-align: right;' class=\"card-action\">
                          <a href=\"auth.html\">Войти</a>
                        </div>
                      </div>
                    </div>
                  </div>
            ";
        }
            if($_GET['id'] == 4) {
                echo "
                <div class=\"row\">
                    <div class=\"col s8 \">
                      <div class=\"card\">
                        <div class=\"card-content white-text\">
                            <p style='color:black;'>Вот и всё. Теперь осталось ввести имя пользователя </p>
                          <form action = 'modules/user.php' method='post'>
                            <input id='last_name' type='text' name='db' class='validate'>
                            <label for='last_name'>База данных</label>
                            <button class='btn waves-effect waves-light' type='submit' style='width:50%;' name='action'>Отправить</button>
                          </form>
                        </div>
                        <div style='text-align: right;' class=\"card-action\">
                          <a href=\"auth.html\">Войти</a>
                        </div>
                      </div>
                    </div>
                  </div>
            ";
            }
        }else {
            echo "
                <div class=\"row\">
                    <div class=\"col s8 \">
                      <div class=\"card\">
                        <div class=\"card-content white-text\">
                          <span class=\"card-title\" style='color:black;'>Скрипт настройки</span>
                          <p style='color:black;'>Привет! Перед началом использования нам нужна информация о твоей базе данных.Нам нужно всего лишь ничего:D</p>
                          <ul style='color:black;'>
                            <li>1.Имя базы данных</li>
                            <li>2.Сервер базы данных</li>
                            <li>3.Имя пользователя базы данных</li>
                            <li>4.Пароль от базы данных</li>
                          </ul>
                        </div>
                        <div style='text-align: right;' class=\"card-action\">
                          <a href=\"?id=1\">Далее</a>
                        </div>
                      </div>
                    </div>
                  </div>
            ";
        }
?>
<script type='text/javascript' src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
<script type='text/javascript' src='styles/js/materialize.min.js'></script>
<script type='text/javascript' src='styles/js/animation.js'></script>
</body>
</html>
