<?php
include "mb.php";
if (isset($_POST['username']) && isset($_POST['password']) ) {

    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);


    if ($username != "" && $password != ""){

        $sql_query = "SELECT * FROM login_details WHERE user_name='".$username."' and user_password='".$password."'";

        $result = mysqli_query($connection,$sql_query);


	    if($result->num_rows > 0) {
         // output data of each row
        while($row = $result->fetch_assoc()) {
            if($row["user_type"]== "admin")
            {
              $userdata = array(
                "role"=>"admin",
                "user_id"=>$row['id']
              );
              echo json_encode($userdata);
            }
            if($row["user_type"]== "customer")
            {
                $userdata = array(
                  "role"=>"customer",
                  "user_id"=>$row['id']
                );
                echo json_encode($userdata);
            }
            if($row["user_type"]== "shop")
            {
              $userdata = array(
                "role"=>"admin",
                "user_id"=>$row['id']
              );
              echo json_encode($userdata);
            }
        }
        } else {
            echo 0;
        }

    }
}
