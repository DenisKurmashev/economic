<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Hotel chain</title> 
</head>
<body>
    <div class="navbar">
        <nav>
            <div class="nav-wrapper">
                <a href="index.html" class="brand-logo">
                    <img src="img/Logotype.svg" alt="Logotype">
                </a>
                <a href="#" class="button-collapse" data-activates="mobile-demo">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li class="active"><a href="index.php">Main</a></li>
                    <li><a href="./booking.php">Book a room</a></li>
                    <li><a href="#">Link</a></li>	
                    <li><a href="#">Link</a></li>
                    <li><a href="#about-hilton" onclick="scrollToLink()">About us</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.php">Main</a></li>
                    <li><a href="./booking.php">Book a room</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>	
                    <li><a href="#about-hilton" onclick="scrollToLink()">About us</a></li>
                </ul>
            </div>
        </nav>	
    </div>

    <div class="full-width start-screen">
        <div class="row">
            <div class="col s12">
                <div class="row center-align white-text">
                    <h1>What do your ideal weekend look like?</h1>
                </div>
                <div class="row form-search">
                    <div class="col offset-s3 s5">
                        <input type="text" placeholder="Where would you like to go?"/>
                    </div>
                    <div class="col s4">
                        <input type="button" value="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Hilton - hotel chain.</h5>
                    <p class="grey-text text-lighten-4">Only here you will spend your holiday unforgettably.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="./booking.php">Book a room</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        <li><a class="grey-text text-lighten-3" href="#about-hilton" onclick="scrollToLink()">About us</a></li>                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2018 Powered by GreatSolution
            </div>
        </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".button-collapse").sideNav();
        });
    </script>
</body>
</html>