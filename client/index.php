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
    <?php require __DIR__ . '/parts/header.php'; ?>

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

    <div class="full-width advantage white">
        <div class="container">
            <div class="row center-align">
                <h2>Our advantages</h2>
            </div>
            <div class="row">
                <div class="col s4 center-align">
                    <img src="./img/Icon1.svg" alt="" width="75" height="75">
                    <p>The lowest price</p>
                </div>
                <div class="col s4 center-align">
                    <img src="./img/Icon2.svg" alt="Free wi-fi" width="75" height="75">
                    <p>Free Wi-Fi</p>
                </div>
                <div class="col s4 center-align">
                    <img src="./img/Icon3.svg" alt="E-bookings" width="75" height="75">
                    <p>E-bookings</p>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width more-about-hilton">
        <div class="row center-align">
            <h2>Learn more with Hilton</h2>
        </div>
        <div class="row">
            <div class="col xl6 card-hotel center-align">
                <h4>Extend the summer in the UAE</h4>
                <img src="./img/card1.jpg" alt="card">
            </div>
            <div class="col xl3 card-hotel">
                <h4>Discover for yourself New-York</h4>
                <img src="./img/card2.jpg" alt="card">
            </div>
            <div class="col xl3 card-hotel">
                <h4>Washington Hilton</h4>
                <img src="./img/card3.jpg" alt="card">
            </div>
        </div>
        <div class="row">
            <div class="col xl3 card-hotel">
                <h4>Doubletree Hilton</h4>
                <img src="./img/card4.jpg" alt="card">
            </div>
            <div class="col xl3 card-hotel">
                <h4>Europe hotels</h4>
                <img src="./img/card5.jpg" alt="card">
            </div>
            <div class="col xl6 card-hotel">
                <h4>have a rest on the sea</h4>
                <img src="./img/card6.jpg" alt="card">
            </div>
        </div>
    </div>

    <div class="full-width about-hilton" id="about-hilton">
        <div class="container">
            <div class="row center-align">
                <h2>Please take me to Hilton</h2>
            </div>
            <div class="row">
                <div class="col offset-s1 s10 center-align">
                    <p>
                        Hilton is one of the most recognizable names in the hospitality industry. 
                        For nearly a century, travelers from all over the world have said: "Please take me to the Hilton." 
                        Thanks to the innovative approach and the high culture of the services provided, 
                        the Hilton continues to be synonymous with the word "hotel" throughout the world. 
                        Our hotels are located in more than 500 destinations, on 6 continents. 
                        We provide our guests with high-quality service all over the world.
                    </p>
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
                        <li><a class="grey-text text-lighten-3" href="./hotels.php">Our hotels</a></li>
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

        function scrollToLink(){
            $('a[href^="#"]').bind('click.smoothscroll',function (e) {
                e.preventDefault();
                
                var target = this.hash,
                $target = $(target);
                
                $('html, body').stop().animate({
                'scrollTop': $target.offset().top
                }, 500, 'swing', function () {
                window.location.hash = target;
                });
            });
        }
    </script>
</body>
</html>