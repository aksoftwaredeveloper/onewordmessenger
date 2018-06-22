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
            <div class="col-md-12 text-center text-capitalize"><h1></h1></div>
        </div>
    </header>
    <main>

        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Fill In Form To Register</h3>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Surname" name="surName" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Register">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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

