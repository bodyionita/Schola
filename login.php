<html>

<head>
    <?php
    session_start();
    $_SESSION["title"]='Login';
    ?>
    <?php include 'header.php' ?>
</head>

<body>
<div class="container-fluid" style="padding-top: 70px;">
    <div class="row">
        <div class="col col-md-4 col-md-offset-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    <?php if (isset($_SESSION["error"])) { ?>
                    <p class="error"><strong>Error: </strong><?php echo $_SESSION["error"]?> </p>
                    <?php } unset($_SESSION["error"]); ?>
                    <form method="POST" action="login-submit.php">
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <div class="">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" value=""
                                           name="username"   placeholder="Enter your Username"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <div class="">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">

                    </form>
                    <div class="text-center">
                        <br>
                        <a href="register.php">Create account</a>
                        <!--
                        <a href="{{ url_for('forgot_password') }}">reset password</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<?php include 'footer.php' ?>

</html>