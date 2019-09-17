<?php
            session_start();
    require('mb.php');

    $user_id = $_GET['user_id'];

    $query = "SELECT * FROM `customer_lvl_1` WHERE code1 is not null and code2 is not null and code3 is not null and user_id = $user_id";

    if($result = $connection->query($query))
    {
        if($result->num_rows>0)
        {
            $q1 = "UPDATE `customer_lvl_1` SET `lvl1` = '1' WHERE `customer_lvl_1`.`id` = $user_id;";

            if($r1 = $connection->query($q1))
            {
                header('location:level2.php?user_id='.$user_id);
            }
            else{
                echo $connection->error;
            }
        }
        else{

            $_SESSION['error'] = "Please enter all coupen values";

            header('location:home.php?user_id='.$user_id);
        }
    }


?>