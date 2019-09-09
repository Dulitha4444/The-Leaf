<?php
include "mb.php";

$foodType = $_POST['type'];
$limit = $_POST['limit'];
$user_id = $_POST['user_id'];
$code_id = $_POST['code_id'];
$last = $_POST['last_count'];

$query = "SELECT  id,shop_name,F_vp,upload_picture FROM `shop_registration` WHERE JSON_CONTAINS(food_type, '$foodType') = 1 ORDER BY RAND() LIMIT $limit";

$result = mysqli_query($connection,$query);

if($result->num_rows > 0) {
 // output data of each row
    $x = 0;
    $data = [];

    while($row = $result->fetch_assoc()) {
        $data[$x] = array(
            'id' => $row['id'],
            'name' => $row['shop_name'],
            'price' => $row['F_vp'],
            'image' => $row['upload_picture']
        );

        $i = $row['id'];
        $l = $last + $x +1;
        switch ($l) {
          case '1':
              $update_query = "UPDATE `customer_lvl_1` SET `shop1` = '$i' WHERE `customer_lvl_1`.`user_id` = '$user_id';";

                  break;
            case '2':
            $update_query = "UPDATE `customer_lvl_1` SET `shop2` = '$i' WHERE `customer_lvl_1`.`user_id` = '$user_id';";

              break;
              case '3':
              $update_query = "UPDATE `customer_lvl_1` SET `shop3` = '$i' WHERE `customer_lvl_1`.`user_id` = '$user_id';";

                break;
            default:
              // code...
              break;
        }

        $r = $connection->query($update_query);
        if(!$r){
          //echo 'error occured';
          //return;
        }

        $x++;

    }
    echo json_encode($data);
    return;
} else {
    echo 0;
}


?>
