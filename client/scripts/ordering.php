<?php
    function SendOrder() {
        require __DIR__ . '/../config/config.php';

        if ( isset($_POST['firstName']) ) {
            $firstName  = $_POST['firstName'];
            $lastName   = $_POST['lastName'];
            $passportId = $_POST['passport'];
            $datefrom   = $_POST['datefrom'];
            $dateto     = $_POST['dateto'];

            if ( checkData() ) {
                $order = R::findOne( 
                    'hotelorders', 'datefrom BETWEEN ? AND ? OR dateto BETWEEN ? AND ?', 
                    [$datefrom, $dateto, $datefrom, $dateto] 
                );

                if ($order != null) 
                    throw new Exception("This room id booked");
 
                $order = R::dispense('hotelorders'); 

                $order->firstname  = $firstName;
                $order->lastname   = $lastName;
                $order->passportid = $passportId;
                $order->datefrom   = $datefrom;
                $order->dateto     = $dateto;

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

        if ($_POST["datefrom"] == '')
            $errors[] = "Enter the datefrom!";

        if ($_POST["dateto"] == '')
            $errors[] = "Enter the dateto!";
        
        if (empty($errors)) 
            return true;
        else 
            return false;
    }
?>