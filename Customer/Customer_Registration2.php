<?php

require('mb.php');

if (isset($_POST['username']) and isset($_POST['lastname'])){

$Username = $_POST['username'];
$Lastname = $_POST['lastname'];
$Gender = $_POST['gender'];
$Age = $_POST['age'];
$Nation = $_POST['nation'];
$Address = $_POST['address'];
$Email = $_POST['email'];
$Password= $_POST['password'];
$date = date("Y-m-d H:i:s");
$user_type = 'customer';




$sql = "INSERT INTO customer_registration (user_name, last_name, gender, age, nation, address, email, password, recive_date)
VALUES ('$Username', '$Lastname', '$Gender', '$Age', '$Nation', '$Address', '$Email', '$Password', '$date')";
 $sql1 = "INSERT INTO login_details (user_name, user_password, user_type)
 VALUES ('$Username', '$Password', '$user_type')";
$connection->query($sql1);

if ($connection->query($sql) === TRUE) {
    echo "Save Successfully";

} else {
    echo "Save Failed: " . $sql . "<br>" . $connection->error;
}

$connection->close();
}

?>