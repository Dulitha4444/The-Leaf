<?php

require('mb.php');

if (isset($_GET['radio1']) and isset($_GET['combobox'])){

$Radio1 = $_GET['radio1'];
$Combobox = $_GET['combobox'];
$Radio3 = $_GET['radio3'];
$Radio4 = $_GET['radio4'];
$Check = $_GET['check'];
$Radio6 = $_GET['radio6'];
$Radio7 = $_GET['radio7'];
$Radio8 = $_GET['radio8'];
$Radio9 = $_GET['radio9'];
$Radio10 = $_GET['radio10'];
$Radio11 = $_GET['radio11'];
$Radio12 = $_GET['radio12'];



$sql = "INSERT INTO questionnaire ( answer1 ,answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10, answer11, answer12)
VALUES ('$Radio1', '$Combobox', '$Radio3','$Radio4', '$Check', '$Radio6', '$Radio7', '$Radio8', '$Radio9', '$Radio10, '$Radio11', '$Radio12')";



if ($connection->query($sql) === TRUE) {
    echo "Save Successfully";

} else {
    echo "Save Failed: " . $sql . "<br>" . $connection->error;
}

$connection->close();
}

?>
