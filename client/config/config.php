<?php
    require __DIR__ . '/rb.php';

    R::setup( 'mysql:host=127.0.0.1;dbname=economic', 'root', '');
    
    if ( !R::testConnection() )
        exit('No to connect with database');

?>
