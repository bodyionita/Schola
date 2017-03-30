<?php
ini_set('display_errors',1);

    require_once('database.php');
    $conn = new mysqli($servername, $usn, $psw,$database);
    if ($conn->connect_error) {
        die("Connection with database failed: " . $conn->connect_error);
    }
    if (isset($_SESSION["username"])) {
        $query = "SELECT users.username, user_details.first_name, user_details.last_name, users.id,
              user_details.address, user_details.dob, user_details.email, user_details.nationality,
              users.typeId 
              FROM users
              INNER JOIN user_details ON user_details.userId = users.id
              INNER JOIN user_types ON users.typeId = user_types.id
              WHERE users.username='" . $_SESSION["username"] . "'";
        $result = $conn->query($query);
        $user = [];
        while ($row = $result->fetch_array()) {
            $user = ["username" => $row["username"],
                "first_name" => $row["first_name"],
                "last_name" => $row["last_name"],
                "id" => $row["id"],
                "typeId" => $row["typeId"],
                "dob" => $row["dob"],
                "address" => $row["address"],
                "email" => $row["email"],
                "nationality" => $row["nationality"]];
        }
        if (isset($user["id"])) {
            $files = scandir("./uploads/user/" . $user["id"]);
            if (count($files) >= 2)
                $file = $files[2];
        }
    }
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/img/favicon.ico">
<link rel="shortcut_icon" href="assets/img/favicon.ico">

<title> Schola <?php if (isset($_SESSION["title"])) echo "| ".$_SESSION["title"] ?> </title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/css/cover.css" rel="stylesheet">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/schola_small.png" alt="SIMS">
            </a>
        </div>

        <div>
            <ul class="nav navbar-nav navbar-left">
                <?php if (isset($_SESSION["logged_in"])) { ?>
                    <li class="divider-vertical"></li>
                    <li>
                        <a href="dashboard.php">
                                <span style="font-size: 1.5em; ">
                                    <i class="fa fa-tachometer"></i>
                                    &nbsp;Dashboard
                                </span>
                        </a>
                    </li>
                <?php } ?>
            </ul>

        </div><!--/.nav-collapse -->

        <div>
            <ul class="nav navbar-nav navbar-center">
            </ul>

        </div><!--/.nav-collapse -->

        <div>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION["logged_in"])) { ?>
                    <li>
                        <a href="profile.php" style="padding-top: 3px; padding-bottom: 2px;">
                            <span style="font-size: 1.5em; ">
                            <?php if (isset($file)) { ?>
                            <img class="img-rounded" style="height: 100%;" src="uploads/user/<?= $user["id"].'/'.$file ?>">
                            <?php } else { ?>
                            <img class="img-rounded" style="height: 100%;" src="uploads/profile.png">
                            <?php } ?>
                            <?= $user["first_name"] ?>
                            </span>
                        </a>
                    </li>
                    <li class="divider-vertical"></li>

                    <li><a href="logout.php" >
                        <span style="font-size: 1.5em; ">
                        Logout&nbsp;
                        <i class="fa fa-sign-out"></i>
                        </span>
                    </a>
                </li>
                <?php } else { ?>
                <li><a href="login.php" >
                        <span style="font-size: 1.5em; ">
                        Login&nbsp;
                        <i class="fa fa-sign-in"></i>
                        </span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
