<?php
$servername='';
$usn='';
$psw='';
$database='';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }

    $servername = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $database = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $usn = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $psw = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}
?>
