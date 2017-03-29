<html>

<head>
    <?php
    ini_set('display_errors',1);

    session_start();
        $_SESSION["title"]='Home';
    ?>
    <?php include 'header.php' ?>
</head>

<body>


    <div class="jumbotron">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slidee-to="0" class="active"></li>
                <li data-target="#carousel" data-slidee-to="1"></li>
                <li data-target="#carousel" data-slidee-to="2"></li>
                <li data-target="#carousel" data-slidee-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="assets/img/planting-seeds.jpg" >
                    <div class="carousel-content">
                        <div class="col-md-6">
                            <p style="font-size: 5em; font-weight: 500">Planting the <br>seeds of tomorrow</p>
                            <p style="font-size: 2em; font-weight: 100">Learn more about the <u>#schola</u> opportunity</p>
                            <div class="row">
                                <div class="text-center">
                                    <a href="#apply" class="btn btn-success btn-lg">
                                        Find out more
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel" role="button" data-slidee="prev">
                <i class="glyphicon glyphicon-chevron-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slidee="next">
                <i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container-fluid" id="apply">
            <div class="col-md-6 col-md-offset-3 text-justify">
                <p style="font-size: 2.5em;"> We want to extend  <span class="text-success">#schola</span> opportunity to students across the world.</p>
                <p>Schola believes in empowerment through education. We've helped a lot of students further their education.
                Many of the students go on to drive positive social and environmental impacts with every dollar of education fund they receive.
                We want to help fund more of those.That's what we call the <span class="text-success">#schola</span> opportunity.</p>
                <p>Why should you join us? We are experienced social entrepreneurs with many years of experience in education sectors.
                We connect talented students with scholarship providers, with a simple aim to simplify the tedious process.
                We like to think that, along the way, <span class="text-success">#schola</span> is helping you plant the seeds of tomorrow.</p>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LiTWTHkn-sQ" ></iframe>
                </div>
                <br><h1 class="text-center">Apply now</h1><br>
                <div class="row text-center">
                    <div class="col-md-6 border-right">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <img src="assets/img/seed.png" class="img-responsive">
                                    <p >Students</p>
                                </div>
                            </div>

                            <div class="row text-info">Undergraduate Programme</div>
                            <div class="row text-info">Postgraduate taught Programme</div>
                            <div class="row text-info">Postgraduate research Programme</div>
                            <br>
                            <div class="row">
                                <div class="text-center">
                                    <a href="register.php" class="btn btn-success btn-lg">
                                        Apply now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <img src="assets/img/watering_can.png" class="img-responsive">
                                    <p >Scholarship providers</p>
                                </div>
                            </div>

                            <div class="row text-info">Corporates</div>
                            <div class="row text-info">Universities</div>
                            <div class="row text-info">Foundations</div>
                            <br>
                            <div class="row">
                                <div class="text-center">
                                    <a href="register.php" class="btn btn-success btn-lg">
                                        Join us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<?php include 'footer.php' ?>

</html>