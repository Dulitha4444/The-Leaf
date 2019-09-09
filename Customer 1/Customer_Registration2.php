<?php

require('mb.php');

if (isset($_POST['username']) and isset($_POST['lastname'])){

$Username = $_POST['username'];
$Lastname = $_POST['lastname'];
$Age = $_POST['age'];
$Nation = $_POST['nation'];
$Veg = $_POST['veg'];
//$Check = json_encode($_POST['check']);
$Ptype = $_POST['ptype'];
$Ftimes = $_POST['ftimes'];
$Address = $_POST['address'];
$Email = $_POST['email'];
$Password= $_POST['password'];
$date = date("Y-m-d H:i:s");
$user_type = 'customer';

$age_value;
  if($Age < 20)
  {
    $age_value = 1;
  } elseif($Age > 20 && $Age < 36)
  {
    $age_value = 2;
  } elseif($Age > 35 && $Age < 51)
  {
    $age_value = 3;
  } else {
    $age_value = 4;
  }

  $sql = "INSERT INTO customer_registration (user_name, last_name, age, nation, veg, ptype, ftimes, address, email, password, recive_date)
  VALUES ('$Username', '$Lastname', $age_value, '$Nation', '$Veg', '$Ptype', '$Ftimes', '$Address', '$Email', '$Password', '$date')";


  if ( $connection->query($sql) === TRUE)
  {
  $last_id = $connection->insert_id;
  $sql1 = "INSERT INTO login_details (user_name, user_password, user_type,user_id_fk)
  VALUES ('$Username', '$Password', '$user_type','$last_id');";

  $sql2 = "Insert into customer_lvl_1 (user_id) values('$last_id')";
  $connection->query($sql2);

  if ($connection->query($sql1) === TRUE) {
      echo $last_id;

  } else {
      echo "Save Failed: " . $sql . "<br>" . $connection->error;
  }
  }
}

?>
