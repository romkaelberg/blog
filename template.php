<ul id="slide-out" class="side-nav">
    <li>
        <div class="userView">
            <div class="background">
                <img src="styles/img/03.jpg" style="width:100%;">
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
    <li><a class="subheader">Разделы</a></li>
    <li><a class="waves-effect active" href="index.php">Главная</a></li>
    <li><a class="waves-effect" href="upload/upload.html">Загрузка файлов</a></li>
    <li><a class="waves-effect" href="social.php">Соцсети</a></li>
    <li><a class="waves-effect" href="templates.php">Шаблоны</a></li>
</ul>
<!-- Navbar -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper" style="height:70px;">
            <div class="container">
                <ul><i data-activates="slide-out" class="fa fa-bars button-collapse" style="color:white;"></i></ul>
                <h3 class="brand-logo" style="font-size:20px;padding-left:2%;">Управление соцсетями</h3>
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