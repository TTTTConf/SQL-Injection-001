<?php
if (isset($_GET['id'])) {
    query("DELETE FROM guestbook WHERE id={$_GET['id']}");
    header("Location: ./");
}