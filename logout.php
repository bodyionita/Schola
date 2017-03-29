<?php
    session_start();
    session_destroy();
    require_once("redirect.php");
    redirect("index.php");
?>
