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
                <h3 class="brand-logo" style="font-size:20px;padding-left:2%;">Настройки</h3>
                <div class="col s12">
                    <!-- Navbar menu -->
                    <ul class="right hide-on-med-and-down">
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
<div class="container" style="padding-top: 50px;padding-left: 20%;">
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Заголовок во вкладке</label>
                </div>
                </div>
                <div class="row">
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="styles/js/materialize.min.js"></script>
<script type="text/javascript" src="styles/js/animation.js"></script>
</body>
</html>
