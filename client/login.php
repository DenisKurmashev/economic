<?php require __DIR__ . '/scripts/auth.php'; ?>
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

    <div class="full-width white login">
        <div class="container center-align">
            <div class="row center-align">
                <h2>Log In</h2>
            </div>
            <form action="./login.php?" method="post">
                <div class="row">
                    <div class="col offset-s3 s6 input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <label for="username">Username</label>
                        <input type="text" class="validate" id="username" name="username" value="<?= @$_POST['username']; ?>">
                    </div>
                    <div class="col offset-s3 s6 input-field">
                        <i class="material-icons prefix">security</i>
                        <label for="password">Password</label>
                        <input type="password" class="validate" id="password" name="password">
                    </div>
                    <div class="col offset-s3 s6 red-text">
                        <p><?= @array_shift($errors); ?></p>
                    </div>
                    <div class="col offset-s3 s6 green-text">
                        <p><?= @$success; ?></p>
                    </div>
                    <div class="col offset-s3 s6 input-field">
                        <button class="btn waves-effect waves-light" id="login" type="submit" name="login">Log In 
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
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
    </script>
</body>
</html>