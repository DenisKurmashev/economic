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
        if ($state != null) {
            ?>
                <script type="text/javascript">
                    alert( '<?= ($state ==  true ? 'Success' : $state); ?>' );
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
                    <h1>Room reservation</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width form-order">
        <div class="container">
            <div class="row center-align">
                <h2>Fill in all the fields</h2>
            </div>
            <div class="row center-align">
                <form action="./booking.php?form=true" method="post">
                    <div class="row">
                        <div class="col offset-s2 s8 input-field">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="firstName">Firstname</label>
                            <input type="text" class="validate" id="firstName" name="firstName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col offset-s2 s8 input-field">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="lastName">Lastname</label>
                            <input type="text" class="validate" id="lastName" name="lastName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col offset-s2 s8 input-field">
                            <i class="material-icons prefix">local_parking</i>
                            <label for="passport">Passport ID</label>
                            <input type="text" class="validate" id="passport" name="passport">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col offset-s2 s4 input-field">
                            <i class="material-icons prefix">date_range</i>
                            <input type="date" class="validate" id="datefrom" name="datefrom">
                        </div>
                        <div class="col s4 input-field">
                            <input type="date" class="validate" id="dateto" name="dateto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col offset-s4 s4 input-field">
                            <button class="btn waves-effect waves-light" id="submit" type="submit" name="action">To order
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
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