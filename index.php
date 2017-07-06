<?php
require_once ("modules/check_user.php");
$dbh = require_once("modules/connect.php");?>
<!DOCTYPE HTML>
<head>
    <meta charset="UTF-8">
    <title>NightVision</title>
    <link rel="stylesheet" type="text/css" href="styles/css/materialize.css">
    <link rel="stylesheet" href="styles/css/font/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://prismjs.com/themes/prism.css">
</head>
<body>
<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
        <h5 style = "padding-left:10px;">Добавить страницу</h5>
        <div class="row">
            <form class="col s12" action="modules/add_page.php" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <input name = "name" id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Имя страницы</label>
                    </div>
                    <div class="input-field col s6">
                        <select name="mysel" class="browser-default">

                            <?php
                               require_once ("modules/out_select.php");
                            ?>
                        </select>
                    </div>
                </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit" name="action">Отправить
            <i class="fa fa-send right"></i>
        </button>
    </div>
    </form>
</div>
<div id="modal2" class="modal bottom-sheet">
    <div class="modal-content">
        <h5 style = "padding-left:10px;">Добавить директорию</h5>
        <div class="row">
            <form class="col s12" action="modules/add_directory.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input name = "name" id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Имя директории</label>
                    </div>
                </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit" name="action">Отправить
            <i class="fa fa-send right"></i>
        </button>
    </div>
    </form>
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
                <li class="tab col s3"><a href="#test1">Список стр</a></li>
                <li class="tab col s3 lst"><a class="lst" href="#test3">Список дир</a></li>
            </ul>
        </div>
    </div>

    <div id="test1" class="col s12">
        <table class="bordered">
            <thead>
            <tr>
                <th data-field="id">Имя страницы</th>
                <th data-field="name">Действия</th>
                <th data-field="name">Адрес директории</th>
            </tr>
            </thead>

            <tbody>
            <?php require_once("modules/out.php");?>
            </tbody>
        </table>
        <div class="row">
            <div class="col s12">
                <div class="fixed-action-btn horizontal">
                    <a class="btn-floating btn-large waves-effect waves-light red" data-target="modal1"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div id="test3" class="col s12">
        <div class="row">
            <div class="col s12">
                <div class="fixed-action-btn horizontal">
                    <a class="btn-floating btn-large waves-effect waves-light orange" data-target="modal2"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
            </div>
            <table class="bordered">
                <thead>
                <tr>
                    <th data-field="id">Имя директории</th>
                    <th data-field="name">Действия</th>
                </tr>
                </thead>

                <tbody>
                <?php require_once("modules/out_directories.php");?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
<script type="text/javascript" src="styles/js/jquery.js"></script>
<script src="http://prismjs.com/prism.js" data-default-language="markup"></script>
<script type="text/javascript" src="styles/js/materialize.min.js"></script>
<script type="text/javascript" src="styles/js/animation.js"></script>
</body>
</html>
