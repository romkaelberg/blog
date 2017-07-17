<?php
function KEY_check($key,$dbc) {
    $dbq = $dbc->prepare("SELECT * FROM users WHERE session_id=?");
    $dbq->execute([$key]);
    $dbq->fetchAll();
    $db_session_counter = $dbq->rowCount();
    if ($db_session_counter == 1) {
        return true;
    }else {
        return false;
    }
}
function authorize($login,$password,$dbc) {
    $dbq = $dbc->prepare("SELECT * FROM users WHERE login=?");
    $dbq->execute([$login]);
    $user_data = $dbq->fetchAll();
    $login_counter = $dbq->rowCount();
    foreach ($user_data as $value) {
        $user_password_in_db = $value['pass'];
    }
    $hash_password = sha1($password);
    if($login_counter == 1 && $user_password_in_db == $hash_password) {
      return true;
    }else {
      return false;
    }
}
function GET_user_info($key,$dbc) {
    $_KEY_check = KEY_check($key,$dbc);

    if($_KEY_check == true) {
        $dbq = $dbc->prepare("SELECT * FROM users WHERE session_id=?");
        $dbq->execute([$key]);
        $user_data = $dbq->fetch();
        return $user_data;
    }else {
        return false;
    }
}
function GET_pages_list($key,$dbc) {
    $_KEY_check = KEY_check($key,$dbc);
    if($_KEY_check == true) {
        $dbq = $dbc->prepare("SELECT id,name FROM content ORDER BY id DESC");
        $dbq->execute();
        $pages_list = $dbq->fetchAll();
        return $pages_list;

    }else {
        return false;
    }
}
function GET_page_content($key,$dbc,$page_id) {
    $_KEY_check = KEY_check($key,$dbc);
    if($_KEY_check == true) {
        $dbq = $dbc->prepare("SELECT * FROM content WHERE id=?");
        $dbq->execute([$page_id]);
        $page_content = $dbq->fetch();
        return $page_content;
    }else {
        return false;
    }
}
function ADD_page($key,$dbc,$name,$content)
{
    $_KEY_check = KEY_check($key, $dbc);
    if ($_KEY_check == true) {
        $user = GET_user_info($key, $dbc)['login'];
        $insert = $dbc->prepare("INSERT INTO content (name,content,user) values (:n,:c,:u)");
        $insert->execute([
            'n' => $name,
            'c' => $content,
            'u' => $user
        ]);
    }
}
function DELETE_page($key,$dbc,$page_id) {
    $_KEY_check = KEY_check($key,$dbc);
    if($_KEY_check == true) {
        try {
            $dbc->exec("DELETE FROM content WHERE id = '$page_id'");
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }else {
        return false;
    }
}

?>
