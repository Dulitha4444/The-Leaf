<?php
include "mb.php";

$foodType = 1;
$limit = 2;

$query = "SELECT shop_name,F_vp,upload_picture FROM `shop_registration` WHERE JSON_CONTAINS(food_type, '$foodType') = 1 ORDER BY RAND() LIMIT $limit";

$result = mysqli_query($connection,$query);


if($result->num_rows > 0) {
 // output data of each row
    $x = 0;
    $data = [];
    while($row = $result->fetch_assoc()) {
        $data[$x] = array(
            'name' => $row['shop_name'],
            'price' => $row['F_vp'],
            'image' => $row['upload_picture']
        );
        $x++;

    }
    echo json_encode($data);
    return;
} else {
    echo 0;
}


?>