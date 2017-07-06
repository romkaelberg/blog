<?php require_once ("modules/check_user.php");
//$act = $_GET['act'];
//if($act == "modal") {
//    echo "<script>$('#modal1').modal('open');</script>";
//}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>NightWision</title>
    <link rel="stylesheet" type="text/css" href="styles/css/materialize.css">
    <link rel="stylesheet" href="styles/css/font/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://prismjs.com/themes/prism.css" data-noprefix />
</head>
<body>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Правила добавления соцсети</h4>
        <strong>1)Для того, чтобы добавить соцсеть введите ее имя в форме №1.</strong><p></p>
        <strong>2)Далее введите ссылку на нее в полном формате в форме №2.</strong><p></p>
        <strong>Например: №1 = "Вконтакте".№2 = "http://www.vk.com/адрес_вашей_группы"</strong><p></p>
        <strong>3)После, нажмите кнопку 'отправить'</strong><p></p>
        <strong>Для добавления еще одной соцсети нажмите кнопку 'очистить' и следуйте пунктам 1 - 3</strong><p></p>
    </div>
    <div class="modal-footer">
        <a href="#modal2" class=" modal-action modal-close waves-effect waves-green btn-flat">Перейти к добавлению</a>
    </div>
</div>

<!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h4>Список соцсетей</h4>
        <div id="test2" class="col s12">
                <tbody>
                <div class="list_networks"></div>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Закрыть</a>
    </div>
</div>
<?php
require_once ("template.php");
?>

<!--<div style="background-color:#191d2d;height:200px;padding-top:2%;">-->
<div class="container">
    <!-- Tablet and desktop -->
    <div class="row hide-on-small-only">
        <div class="col m6 s12 l6">
            <div class="container">

            </div>
        </div>
    </div>

    <!-- Mobile -->
    <div class="row hide-on-med-and-up center-align">
        <div class="col s12">

            <div class="col s8 offset-s2">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding-top:2%;">
    <div class="row" style="">
        <div class="col s6">
            <ul class="tabs" style="background:white;">
                <li class="tab col s3"><a href="#modal1">Правила</a></li>
                <li class="tab col s3"><a href="#modal2">Список</a></li>
            </ul>
        </div>
    </div>
    <div id="test1" class="col s12">
                      <div class="row">
                          <form method="post" id="message_form" action="javascript:void(null);" onsubmit="send()">
                          <div class="row">
                            <div class="input-field col s6">
                              <input id="first_name" name="name" type="text" class="validate">
                              <label for="first_name">№1(имя_соцсети)</label>
                            </div>
                            <div class="input-field col s6">
                              <input id="last_name" type="text" name="address" class="validate">
                              <label for="last_name">№2(адрес_соцсети)</label>
                            </div>
                          </div>
                            <div class="card-action">
                                <button type="reset" class="btn-flat indigo lighten-5" type="submit" name="action">Очистить</button>
                              <button type="submit" class="btn-flat indigo lighten-5" type="submit" name="action">Отправить</button>
                            </div>
                        </form>
                       </div>
                    </div>
                  </div>
<!--    <footer class="page-footer"style="background:#191d2d;">-->
<!--          <div class="container">-->
<!--            <div class="row">-->
<!--              <div class="col l6 s12">-->
<!--                <h5 class="white-text">Некий заголовок...</h5>-->
<!--                <p class="grey-text text-lighten-4">Некий текст</p>-->
<!--              </div>-->
<!--              <div class="col l4 offset-l2 s12">-->
<!--                <h5 class="white-text">Соцсети</h5>-->
<!--                <ul>-->
<!--                  --><?php //echo "erx";?>
<!--                </ul>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="footer-copyright">-->
<!--            <div class="container">-->
<!--            © 2016 Ваша компания-->
<!--            <a class="grey-text text-lighten-4 right" href="#">Наверх</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </footer>-->
    <script type="text/javascript" src="styles/js/jquery.js"></script>
    <script src="modules/send.js"></script>
    <script src="modules/show.js"></script>
    <script src="http://prismjs.com/prism.js" data-default-language="markup"></script>
    <script type="text/javascript" src="styles/js/materialize.min.js"></script>
    <script type="text/javascript" src="styles/js/animation.js"></script>
    </body>
</html>
