<?php
require_once __DIR__ . "/vendor/autoload.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome To OneWord Messenger</title>

    <!-- Bootstrap -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--CSS-->
    <link href="dist/css/myStyle.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="banner">
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="navbar-header">
            <a href="index.php"><img class="logo" src="dist/imgs/logo.png" alt=""></a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav">

                <li class="active"><a class="anchorLink" href="#home">Home</a></li>
                <li><a class="anchorLink2" href="allmessages.php">All Messages</a></li>
                <li>
                    <div id="user" class="dropdown">
                        <a class="dropdown-toggle"  data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span></a>
                        <ul class="dropdown-menu">

                            <li><label for="profile"></label></li>
                            <li><a href="profile.php">My Profile</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="?log=out">Logout</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
                    </div>
                </li>


            </ul>


        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
    </nav>
</div>
<div class="container">
    <header>
        <div class="row">
            <div class="col-md-12 text-center text-capitalize"><h1>Welcome To OneWord Message</h1></div>
        </div>
    </header>
    <main>

        <div class="row">
            <div class="col-md-7 text-left text-capitalize">

                <h1 class="text-capitalize text-danger">What is this website for ?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium deleniti eaque nulla quam reprehenderit! Ad commodi consequuntur, cum, dolorem enim expedita fuga fugit in, natus odit quibusdam quis unde ut.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium deleniti eaque nulla quam reprehenderit! Ad commodi consequuntur, cum, dolorem enim expedita fuga fugit in, natus odit quibusdam quis unde ut.</p>

            </div><!--col-->
            <div class="col-md-5 text-left text-capitalize">

                <h2 class="text-capitalize text-danger">a list of latest messages</h2>
                <ul class="messageList">
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>
                    <li>Hello , by <strong>Ayman Kay</strong> <span class="text-muted">22/06/2018 10:58</span></li>

                </ul>
            </div><!--col-->
        </div><!--row-->

    </main>

</div><!--container-->
<footer>
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center">&copy; <?php echo(date('Y'));?> OneWord Messenger</h4>
        </div><!--col-->
    </div><!--row-->
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>

