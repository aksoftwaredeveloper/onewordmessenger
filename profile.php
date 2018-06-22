<?php
include("./configurations/utilities.php");
include("./configurations/auth.php");
if(is_logged_in()) {

### 1. SELECT MODE
# a) building query and testing it
    $uID = $_SESSION["logID"];

    $q = "            SELECT
                             *
                      FROM
                              `" . DBN . "`.`messages`
                      Where
                      `messages`.`mTo` = '$uID'
                      ORDER BY
                              `messages`.`mID`
                      ASC
                            ";






     echo($q);
# b) executing the query and store result into a variable
    $res = $mysqli->query($q);

//trace($res);

# c) check and handle query result
### checking a SELECT query with $res->num_rows
    if( $res->num_rows > 0 ){
        // we have products...
        // creating an empty array
        $mgs = [];

        // while ( expression ) { code to repeat }
        while( $row = $res->fetch_assoc() ){
            // append each row into $prods
            array_push($mgs, $row);
        }// while

        //trace($prods);

    } else {
        // no products
        $failMsg = "No Messages or something went wrong.";
    }######### end select query check













}/*end is_logged_in*/
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

<div class="bannerProfile">
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

    <h2 class="pageTitle text-center">Hello Ayman</h2>
</div>
<div class="container">
    <header>
        <div class="row">
            <div class="col-md-12 text-center text-capitalize"><h1>A List Of Your Messages</h1></div>
        </div>
    </header>
    <main>

        <div class="row">
            <div class="messageBox col-md-7 text-left text-capitalize">
                <?php if(isset($mgs)) {
                    ?>
                <?php foreach ($mgs as $mg) {?>
                <hr>
                <h1 class="text-capitalize text-danger"><?php if(isset($mg["mSubject"])){echo($mg["mSubject"]);}else{echo("---");}?> </h1> by <strong><?php if(isset($mg["mFrom"])){echo($mg["mFrom"]);}else{echo("---");}?> </strong> <span class="text-muted"><?php if(isset($mg["mDate"])){echo($mg["mDate"]);}else{echo("---");}?> </span>
                <p><?php if(isset($mg["mbody"])){echo($mg["mbody"]);}else{echo("---");}?><a href="">Reply To Message</a></p>
               <?php } /*finish foreach*/ ?>

                <?php }else {
                    echo "<h2 class=\"text-capitalize text-danger\">$failMsg</h2>";
                }/*end if*/ ?>

            </div><!--col-->

            <div class="col-md-5">
                <h1 class="text-capitalize text-danger">action box</h1>
                <ul>
                    <li><a href="#">New Message</a></li>
                    <li><a href="#">Edit Messages</a></li>
                    <li><a href="#">Action 3</a></li>
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

