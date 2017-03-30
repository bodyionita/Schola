<html>

<head>
    <?php
    session_start();
    $_SESSION["title"]='Dashboard';
    ?>
    <?php include 'header.php' ?>
    <?php

    ?>

</head>

<body>
<div class="container-fluid" style="padding-top: 120px;">
    <div class="col-md-offset-1">
        <div class="col-md-2">

            <div class="row">
                <ul class="nav nav-pills nav-stacked ">
                    <li role="presentation" class="active"><a href="#">Available scholarships</a></li>
                    <li role="presentation" ><a href="#">Track Applications</a></li>
                    <li role="presentation" ><a href="#">Successful Applications</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="well">

            </div>
        </div>
    </div>
</div>

</body>

<?php include 'footer.php' ?>

</html>