<div class="navbar">
    <nav>
        <div class="nav-wrapper">
            <a href="./index.php" class="brand-logo">
                <img src="img/Logotype.svg" alt="Logotype">
            </a>
            <a href="#" class="button-collapse" data-activates="mobile-demo">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="./index.php">Main</a></li>
                <li><a href="./signup.php">Sign up</a></li>
                <li><a href="./login.php">Log in</a></li>
                <li><a href="./booking.php">Book a room</a></li>
                <li><a href="./hotels.php">Our hotels</a></li>
                <li><a href="./index.php#about-hilton" onclick="scrollToLink()">About us</a></li>
                <?php 
                    if ( isset( $_COOKIE['username'] ) ) {
                        echo 
                        "<li> Hello, " . $_COOKIE['username'] . "</li>" .
                        "<li><a href='./scripts/logout.php'>Go out</a></li>";
                    }
                ?>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="./index.php">Main</a></li>
                <li><a href="./signup.php">Sign up</a></li>
                <li><a href="./login.php">Log in</a></li>
                <li><a href="./booking.php">Book a room</a></li>
                <li><a href="./hotels.php">Our hotels</a></li>
                <li><a href="./index.php#about-hilton" onclick="scrollToLink()">About us</a></li>
            </ul>
        </div>
    </nav>	
</div>