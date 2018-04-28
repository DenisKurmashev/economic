<?php
    setcookie('username', '', time() - 3600, '/');	

    header( 'Location: /economic/client/index.php' );
?>