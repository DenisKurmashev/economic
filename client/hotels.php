<?php if ($_GET['form'] == 'true') { 
    require './scripts/ordering.php';
    $state = null;

    try {
        $state = SendOrder();
    }
    catch (Exception $ex) {
        $state = $ex->getMessage();
    }
    
} ?>
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
    <?php 
        if ( $state != null ) {
            ?>
                <script type="text/javascript">
                    alert( "<?= ($state ==  true ? 'Success' : $state); ?>" );
                </script>
            <?php
        }
    ?>
</head>
<body>
    <?php require __DIR__ . '/parts/header.php'; ?>

    <div class="full-width booking-start-screen">
        <div class="row">
            <div class="col s12">
                <div class="row center-align white-text">
                    <h1>The best hotels in the world</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width hotels">
        <div class="row">
            <?php
                require __DIR__ . '/config/config.php';

                $hotels = R::findAll( 'hotels' );

                foreach ($hotels as $hotel) {
                    ?>
                        <div class="col s4">
                            <div class="hotel">
                                <div class="hotel-img">
                                    <img src="<?= $hotel->img ?>">
                                </div>
                                <div class="hotel-name">
                                    <h5><?= $hotel->title; ?></h5>
                                </div>
                                <div class="hotel-desc">
                                    <p><?= $hotel->desc; ?></p>
                                </div>
                                <div class="hotel-stars">
                                    <span> <?= $hotel->stars; ?> <i class="material-icons">star_rate</i> </span>
                                    <span> <?= $hotel->rooms; ?> <i class="material-icons">hotel</i> </span>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
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
                        <li><a class="grey-text text-lighten-3" href="index.php#about-hilton" onclick="scrollToLink()">About us</a></li>                        
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