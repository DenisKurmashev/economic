<?php
    require __DIR__ . '/../config/config.php';

    if ( isset( $_POST['login'] ) ) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ( CheckData() ) {
            $user = R::findOne( 'users', 'username = ?', [$_POST['username']] );

            if ( $user ) {
                if ( password_verify( $password, $user->password ) ) {
                    setcookie( 'username', $user->username, time() + (60*60*24*30) );
                    $success = 'You are authorized!';
                } else $errors[] = 'Password incorrect!';
            } else $errors[] = 'Such a user not exist!';
        }
    }

    function CheckData() {
        global $errors;
        $errors = [];
        
        if ( $_POST["username"] == '' ) 
            $errors[] = "Enter the username!";
        
        if ( $_POST["password"] == '' )
            $errors[] = "Enter the password!";
        
        if ( empty( $errors ) ) 
            return true;
        else 
            return false;
    }
?>