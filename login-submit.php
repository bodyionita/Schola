<?php
ini_set('display_errors',1);

    session_start();
    require_once("redirect.php");
    require_once("validation.php");
    $error = "";
    $post = [ "username" => htmlspecialchars($_POST["username"]),
              "password" => htmlspecialchars($_POST["password"])];

    if ( $post["username"]=="" or $post["password"]=="")
        $error= "Please input all the fields.";
    else if (!(validate_string($post["username"]) and validate_string($post["password"])))
        $error = "The following characters are not allowed: &quot; &#039; &lt; &gt;";
    else if (!username_exist($post["username"]))
        $error = "Username not registered.";
    else if (!check_password($post["username"],$post["password"]))
        $error = "Incorrect credentials, please try again.";
    if (strlen($error) > 0)
    {
        $_SESSION["error"] = $error;
        redirect("login.php");
    }
    $_SESSION["logged_in"] = 1;
    $_SESSION["username"] = $post["username"];
    redirect("dashboard.php");
?>

