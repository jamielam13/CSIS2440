<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <title>Jamie- Simply Me</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body {
                font: 20px Montserrat, sans-serif;
                line-height: 1.8;
                color: #f5f6f7;
            }
            p {font-size: 16px;}
            .margin {margin-bottom: 45px;}
            .bg-1 {
                background-color: #8B0000; /* Red */
                color: #ffffff;
            }
            .bg-2 {
                background-color: #333230; /* Dark Gray */
                color: #ffffff;
            }
            .bg-3 {
                background-color: #ffffff; /* White */
                color: #555555;
            }
            .bg-4 {
                background-color: #2f2f2f; /* Black Gray */
                color: #ffffff;
            }
            .container-fluid {
                padding-top: 70px;
                padding-bottom: 70px;
            }

            /*navbar*/
            .navbar {
                border: 0;
                border-radius: 0;
                margin-bottom: 0;
                font-size: 12px;
                letter-spacing: 5px;
                background-color: #F2F3F4;
            }
            .navbar-nav  li a:hover {
                color: #8B0000 !important;
            }
           
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Me</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">WHO<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="number"><a href="https://www.facebook.com/sass.mouth.james">Facebook</a></li>
                            </ul>
                        </li>
                        <li><a href="#what">WHAT</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">IN-CLASS ASSIGNMENTS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="number"><a href = "CE01.php">CE01</a</li>
                                <li id="number"><a href = "CE02.php">CE02</a></li>
                                <li id="number"><a href = "/CE03/CE03.php">CE03</a></li>
                                <li id="number"><a href = "/CE04/CE04.php">CE04</a></li>
                                <li id="number"><a href = "">CE05</a></li>
                                <li id="number"><a href = "">CE06</a></li>
                                <li id="number"><a href = "">CE07</a></li>
                                <li id="number"><a href = "">CE08</a></li>
                                <li id="number"><a href = "/CE09/CE09.php">CE09</a></li>
                                <li id="number"><a href = "/CE10/CE10.php">CE10</a></li>
                            </ul>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ASSIGNMENTS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="number"><a href = "/Assignment1/whoAmI.php">Assignment 1</a</li>
                                <li id="number"><a href = "/Assignment2/FFForm.php">Assignment 2</a></li>
                                <li id="number"><a href = "/Assignment3/FFFormValidation.php">Assignment 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- First Container -->
        <div class="container-fluid bg-1 text-center">
            <h3 id="who" class="margin">Who Am I?</h3>
            <!--<img src="Jamie.jpg" class="img-responsive img-rounded margin" style="display:inline" alt="Me" width="350" height="350">-->
            <img src="GroupJumpShot.jpg" class="img-responsive margin img-roundded" style="display:inline" alt="me" width="350" height="350">
            <br><br>
            <h3>I'm an adventurer</h3>
            <h3>I'm a traveler</h3>
            <h3>I'm a crafter</h3>
        </div>

        <!-- Second Container -->
        <div class="container-fluid bg-2 text-center">
            <h3 id="what" class="margin">What Am I?</h3>
            <p>
                A licensed pharmacy technician. A prior authorization agent in Pharmacy Services at SelectHealth.<br>
                First generation college graduate with a BS in Exercise Sport Science from the University of Utah.<br>
            </p>
            <p>
                Crafting is my passion. Card making and quilting are my specialties.<br>
            </p>
        </div>

        <!-- Footer -->
        <footer class="container-fluid bg-4 text-center">
            <h3>About</h3>
            <a href="mailto:jlam3@bruinmail.slcc.edu">
                <span class="glyphicon glyphicon-envelope"></span>
            </a>&nbsp;&nbsp;
            <a href="http://www.slcc.edu">SLCC</a>&nbsp;&nbsp;
            <a href="http://learn-slcc.uen.org">Canvas</a>&nbsp;&nbsp;
            <a href="http://www.w3schools.com">W3Schools</a>&nbsp;&nbsp;
            <!--<li id="number"><a href=>Email Jamie</a></li>-->
            <!--<a href="https://www.facebook.com/sass.mouth.james">Facebook</a>-->
            <br><br>
            <p>Bootstrap Theme Made By <a href="http://www.w3schools.com">www.w3schools.com</a></p>
        </footer>
    </body>
</html>

