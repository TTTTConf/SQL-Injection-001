<?php
/**
 * Created by IntelliJ IDEA.
 * User: s911415
 * Date: 2016/11/23
 * Time: 20:39
 */
$db = new mysqli("127.0.0.1", "root", "", "tttt001");

function query($sql)
{
    global $db;
    $key = "SQL_" . hash("crc32", $sql);
    header("$key: " . ($sql));

    return $db->query($sql);
}

function getRows($sql)
{
    $q = query($sql);
    $arr = [];

    while ($d = $q->fetch_object()) $arr[] = $d;

    return $arr;
}
