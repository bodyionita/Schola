<?php
    require_once("database.php");
    $conn = new mysqli($servername, $usn, $psw,$database);
    if ($conn->connect_error) {
        die("Connection with database failed: " . $conn->connect_error);
    }

    function validate_string($string)
    {
        if (strpos($string, "&#039;") !== false) return false;
        if (strpos($string, "&quot;") !== false) return false;
        if (strpos($string, "&lt;") !== false) return false;
        if (strpos($string, "&gt;") !== false) return false;
        return true;
    }

    function email_exist($email)
    {
        $query = "SELECT * from user_details WHERE email='$email' ";
        $result=$GLOBALS["conn"]->query($query);
        if($result->num_rows > 0) return true;
        return false;
    }

    function username_exist($username)
    {
        $query = "SELECT * from users WHERE username='$username' ";
        $result=$GLOBALS["conn"]->query($query);
        if($result->num_rows > 0) return true;
        return false;
    }

    function check_password($username, $password)
    {
        $query = "SELECT * from users WHERE username='$username'";
        $result=$GLOBALS["conn"]->query($query);
        while ($row = $result->fetch_array())
            if ($row["password"]==$password) return true;
        return false;
    }
?>