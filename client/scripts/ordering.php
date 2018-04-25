<?php
    function SendOrder() {
        require __DIR__ . '/../config/config.php';

        if ( isset($_POST['firstName']) ) {
            $firstName  = $_POST['firstName'];
            $lastName   = $_POST['lastName'];
            $passportId = $_POST['passport'];
            $date       = $_POST['date'];

            if ( checkData() ) {
                $order = R::findOne( 'hotelorders', 'date = ?', [$date] );

                if ($order != null) 
                    throw new Exception("This room id booked");
 
                $order = R::dispense('hotelorders'); 

                $order->firstname     = $firstName;
                $order->lastname      = $lastName;
                $order->passportid    = $passportId;
                $order->date          = $date;

                R::store( $order );

                return true;
            }
        }
    }

    function checkData() {
        $errors = [];
        
        if ($_POST["firstName"] == '') 
            $errors[] = "Enter the Firstname!";
        
        if ($_POST["lastName"] == '')
            $errors[] = "Enter the Lastname!";
        
        if ($_POST["passport"] == '')
            $errors[] = "Enter the passport ID!";

        if ($_POST["date"] == '')
            $errors[] = "Enter the date!";
        
        if (empty($errors)) 
            return true;
        else 
            return false;
    }
?>