<?php

require('mb.php');

if (isset($_POST['radio1']) and isset($_POST['combobox'])){

$Radio1 = $_POST['radio1'];
$Combobox = $_POST['combobox'];
$Radio3 = $_POST['radio3'];
$Radio4 = $_POST['radio4'];
$Check = $_POST['check'];
$Radio6 = $_POST['radio6'];
$Radio7 = $_POST['radio7'];
$Radio8 = $_POST['radio8'];
$Radio9 = $_POST['radio9'];
$Radio10 = $_POST['radio10'];
$Radio11 = $_POST['radio11'];
$Radio12 = $_POST['radio12'];



$sql = "INSERT INTO questionnaire (answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10, answer11, answer12)
VALUES ('$Radio1', '$Combobox', '$Radio3','$Radio4', '$Check', '$Radio6', '$Radio7', '$Radio8', '$Radio9', '$Radio10', '$Radio11', '$Radio12')";



if ($connection->query($sql) === TRUE) {
    echo "Save Successfully";

} else {
    echo "Save Failed: " . $sql . "<br>" . $connection->error;
}

$connection->close();
}

?>
