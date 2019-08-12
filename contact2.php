<?php

require('mb.php');

if (isset($_POST['yourname']) and isset($_POST['phonenumber'])){

$Yourname = $_POST['yourname'];
$Phonenumber = $_POST['phonenumber'];
$Email = $_POST['email'];
$Reply = $_POST['reply'];
$date = date("Y-m-d H:i:s");




$sql = "INSERT INTO contact (username, phone_number, email, reply, recive_date)
VALUES ('$Yourname', '$Phonenumber', '$Email', '$Reply', '$date')";



if ($connection->query($sql) === TRUE) {
    echo "Save Successfully";

} else {
    echo "Save Failed: " . $sql . "<br>" . $connection->error;
}

$connection->close();
}

?>
