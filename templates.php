<?php require_once ("modules/check_user.php");?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>NightVision</title>
    <link rel="stylesheet" type="text/css" href="styles/css/materialize.css">
    <link rel="stylesheet" href="styles/css/font/css/font-awesome.min.css">
    <link rel="stylesheet" href="codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="codemirror/addon/dialog/dialog.css">
    <link rel="stylesheet" href="codemirror/theme/midnight.css">
    <link rel="stylesheet" href="codemirror/theme/solarized.css">
    <script src="codemirror/lib/codemirror.js"></script>
    <script src="codemirror/addon/dialog/dialog.js"></script>
    <script src="codemirror/addon/search/searchcursor.js"></script>
    <script src="codemirror/mode/clike/clike.js"></script>
    <script src="codemirror/addon/edit/matchbrackets.js"></script>
    <script src="codemirror/keymap/vim.js"></script>
</head>
<body>
<ul id="slide-out" class="side-nav">
    <li>
        <div class="userView">
            <div class="background">
                <img src="styles/img/background_sidebar.png" style="width:100%;">
            </div>
            <!--            <a href="#!user"><img class="circle" src="img/user-icon.png"></a>-->
            <a class='dropdown-button' href='#' data-activates='dropdown1' href="#">
                <span class="white-text name"><?php echo $username;?></span>
                <pre></pre>
                <pre></pre>
                <pre></pre>
                <pre></pre>
            </a>
        </div>
    </li>
    <li>
        <a class="subheader">Разделы</a>
    </li>
    <li>
        <a class="waves-effect active" href="index.php">Главная</a>
    </li>
    <li>
        <a class="waves-effect" href="upload/upload.html">Загрузка файлов</a>
    </li>
    <li>
        <a class="waves-effect" href="social.php">Соцсети</a>
    </li>
    <li>
        <a class="active item waves-effect" href="#">Шаблоны</a>
    </li>
</ul>
<!-- Navbar -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper" style="background-color:#191d2d;height:70px;">
            <div class="container">
                <ul><i data-activates="slide-out" class="fa fa-bars button-collapse" style="color:white;"></i></ul>
                <h3 class="brand-logo" style="font-size:20px;padding-left:2%;">Управление шаблонами</h3>
                <div class="col s12">
                    <!-- Navbar menu -->
                    <ul class="right hide-on-med-and-down">
                        <li class="link"><a href="#"><i class="fa fa-cog" aria-hidden="true" style="padding-right:5px;"></i>Настройки</a></li>
                        <li class="link">
                            <a class='dropdown-button' href='#' data-activates='dropdown1' href="#">
                                <i class="fa fa-user" aria-hidden="true" style="padding-right:5px;"></i>
                                <?php echo $username;?>
                                <i style="padding-left:5px;" class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                        </li>
                        <ul id='dropdown1' class='dropdown-content'>
                            <li><a href="modules/logout.php">Выйти</a></li>
                        </ul>
                    </ul>
                    <!-- Navbar menu mobile -->
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="/product">Product</a></li>
                        <li><a href="/partners">Partners</a></li>
                        <li><a href="/pricing">Pricing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

<div style="background-color:#191d2d;height:120px;padding-top:2%;">
    <div class="container">
        <div class="row hide-on-small-only">
            <div class="col m6 s12 l6">
                <div class="container">

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <strong><p style="color:white;padding-left:4%;">В данном разделе вы можете редактировать код шаблонов вашего сайта</p></strong>
    </div>
</div>
<div class="container" style="padding-top: 50px;">
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header"><span class="badge">Кликните, чтобы открыть || закрыть </span>Главная - index.html</div>
            <div class="collapsible-body">
                <form action="edit_template.php?name=index" method="post">
                    <textarea id="code" name="code1">
                        <?php
                            $code_home = file_get_contents('../index.html');
                            echo $code_home;
                        ?>
                    </textarea>
                    <button style="width:100%;" class="btn waves-effect waves-light" type="submit">Полетели:D</button>
                </form>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><span class="badge">Кликните, чтобы открыть || закрыть</span>Директории - directory.php</div>
            <div class="collapsible-body">
                <form action="edit_template.php?name=directory" method="post">
                    <textarea id="code1" name="code1">
                        <?php
                        $code_dir = file_get_contents('../directory.php');
                        echo $code_dir;
                        ?>
                    </textarea>
                    <button style="width:100%;" class="btn waves-effect waves-light" type="submit">Полетели:D</button>
                </form>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><span class="badge">Кликните, чтобы открыть || закрыть</span>Контент - content.php</div>
            <div class="collapsible-body">
                <form action="edit_template.php?name=content" method="post">
                    <textarea id="code2" name="code1">
                        <?php
                        $code_content = file_get_contents('../content.php');
                        echo $code_content;
                        ?>
                    </textarea>
                    <button style="width:100%;" class="btn waves-effect waves-light" type="submit">Полетели:D</button>
                </form>
            </div>
        </li>
    </ul>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="styles/js/materialize.min.js"></script>
<script type="text/javascript" src="styles/js/animation.js"></script>

<script>
    CodeMirror.commands.save = function(){ alert("Saving"); };
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        mode: "text/x-csrc",
        matchBrackets: true,
        showCursorWhenSelecting: true
    });
</script>
<script>
    CodeMirror.commands.save = function(){ alert("Saving"); };
    var editor = CodeMirror.fromTextArea(document.getElementById("code1"), {
        lineNumbers: true,
        mode: "text/x-csrc",
        matchBrackets: true,
        showCursorWhenSelecting: true
    });
</script>
<script>
    CodeMirror.commands.save = function(){ alert("Saving"); };
    var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
        lineNumbers: true,
        mode: "text/x-csrc",
        matchBrackets: true,
        showCursorWhenSelecting: true
    });
</script>
</body>
</html>
