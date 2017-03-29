<?php
    session_start();
    require_once("redirect.php");
    require_once("validation.php");
    require_once("database.php");
    $conn = new mysqli($servername, $usn, $psw,$database);
    if ($conn->connect_error) {
        die("Connection with database failed: " . $conn->connect_error);
    }
    $error = "";
    $post = [ "email" => htmlspecialchars($_POST["email"]),
              "username" => htmlspecialchars($_POST["username"]),
              "password" => htmlspecialchars($_POST["password"]),
              "confirm" => htmlspecialchars($_POST["confirm"]),
              "name" => htmlspecialchars($_POST["name"])    ];

    if ($post["password"]=="" or $post["confirm"]=="" or $post["email"]=="" or $post["name"]=="" or  $post["username"]=="") $error= "Please input all the fields.";
            else if (strlen($post["password"]) < 5)
                $error = "Pasword too short. It should be at least 5 characters long.";
            else if (strlen($post["email"]) < 5)
                $error = "Email too short to be valid.";
            else if (strlen($post["username"]) < 5)
                $error = "Username has to be at least 5 characters long.";
            else if (!(validate_string($post["confirm"]) and validate_string($post["password"]) and validate_string($post["email"]) and
                validate_string($post["username"]) and validate_string($post["name"])))
                $error = "The following characters are not allowed: &quot; &#039; &lt; &gt;";
            else if ($post["password"] != $post["confirm"])
                $error = "Passwords do not match.";
            else if (email_exist($post["email"]))
                $error = "An account with the e-mail)".$post["email"]." is already registered.";
            else if (username_exist($post["username"]))
                $error = "An account with the username: ".$post["username"]." is already registered.";
    if (strlen($error) > 0)
    {
        $_SESSION["error"] = $error;
        redirect("register.php");
    }
    $query1 = "INSERT INTO users (username, password, typeId, confirmed) VALUES
              ('".$post["username"]."', '".$post["password"]."', 3, 1)";
    $conn->query($query1);
    $conn->commit();
    $query = "SELECT id FROM users WHERE username ='".$post["username"]."'";
    $result = $conn->query($query);
    while ($row = $result->fetch_array())
    {
        $userId = $row["id"];
    }
    $query2 = "INSERT INTO user_details (userId, first_name, last_name, address, dob, email, nationality) VALUES
                ('$userId', '".$post["name"]."', '', '', '', '".$post["email"]."', '')";

    $conn->query($query2);
    $conn->commit();

    mkdir("./uploads/user/".$userId, 0777, true);

redirect("login.php");
?>

