<?php require_once ("modules/check_user.php");?>
<?php $dbh1 = require_once("modules/sett.php");
$db1 = $dbh->query("SELECT id,name FROM directories");
$pid = $_GET['id'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>NightVision CMS</title>
    <link rel="stylesheet" type="text/css" href="styles/css/materialize.css">
    <link rel="stylesheet" href="styles/css/font/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://prismjs.com/themes/prism.css">
    <script src="modules/ckeditor/ckeditor.js"></script>
</head>
<body>
<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div id="content">
            <iframe scrolling="no" src="../content.php?id=<?php echo $pid;?>" width="950" height="960">
                Not support in this browser!
            </iframe>
        </div>

    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Закрыть</a>
    </div>
</div>
<?php
    require_once ("template.php");
?>
<div class="container" style="padding-top:8%;">
    <div id="test1" class="col s12">
        <div class="editor">
            <form class = "ui form" id="ajax_form" action="<?php echo "modules/edit.php?id=";$id1 = $_GET['id'];echo $id1;?>" method="post">
                <div class="field">
                    <label>Заголовок </label>
                    <input type="text" name="header" placeholder="" value="<?php
                    $id = $_GET['id'];
                    $dbo = $dbh->query("SELECT header FROM content WHERE id = '$id'");
                    $header_arr = $dbo->fetchAll();
                    foreach ($header_arr as $value) {
                        echo $value['header'];
                    }
                    ?>">
                </div>
                <div class="field">
                    <label>Контент </label>
                </div>
                <textarea name="content" id="editor1" cols="45" rows="5" style="padding-top:20px;">
                    <?php
                    $id = $_GET['id'];
                    $dbo = $dbh->query("SELECT content FROM content WHERE id = '$id'");
                    $content = $dbo->fetchAll();
                    foreach ($content as $value) {
                        echo $value['content'];
                    }
                    ?>
                </textarea>
                <p name="pmy" value = "dc"></p>
                <div class="snd">
                    <button class="btn waves-effect"  type="submit" style="width: 100%;background: #ee6e73">Отправить</button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="fixed-action-btn horizontal">
                    <a id="load" class="btn-floating btn-large waves-effect waves-light red" data-target="modal1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="styles/js/jquery.js"></script>
<script src="http://prismjs.com/prism.js" data-default-language="markup"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
<script type="text/javascript" src="styles/js/materialize.min.js"></script>
<script type="text/javascript" src="styles/js/animation.js"></script>
</body>
</html>

