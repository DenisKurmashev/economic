<?php
    require __DIR__ . '/../config/config.php';

    if ( isset($_POST['signup']) ) {
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];

        if ( CheckData() ) {
            $user = R::dispense( 'users' );

            $user->username = $username;
            $user->email    = $email;
            $user->password =  password_hash($password, PASSWORD_DEFAULT);

            R::store( $user );
            $success = "User is registered!";
        } 
    }

    function CheckData() {
        global $errors;
        $errors = [];
        
        if ($_POST["username"] == '') 
            $errors[] = "Enter the username!";
        
        if ($_POST["email"] == '')
            $errors[] = "Enter the email!";
        
        if ($_POST["password"] == '')
            $errors[] = "Enter the password!";

        if ($_POST["password"] !== $_POST['password-repeat'])
            $errors[] = "Passwords do not much!";

        if (R::count( 'users', 'username = ?', [$_POST['username']] ) > 0)
            $errors[] = "User with that username already exist!";

        if (R::count( 'users', 'email = ?', [$_POST['email']] ) > 0)
            $errors[] = "User with that email already exist!";
        
        if (empty($errors)) 
            return true;
        else 
            return false;
    }

?>