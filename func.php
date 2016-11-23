<?php
/**
 * Created by IntelliJ IDEA.
 * User: s911415
 * Date: 2016/11/23
 * Time: 20:48
 */
function Logout()
{
    session_unset();
    session_destroy();

    header("Location: ./");
}

function Post()
{
    $time = time();
    $sql = "INSERT INTO `guestbook` (`name`, `title`, `content`, `time`) 
            VALUES ('{$_POST['name']}', '{$_POST['title']}', '{$_POST['content']}', {$time})";

    query($sql);
}