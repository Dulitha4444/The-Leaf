<?php
require('mb.php');
  $user_id = $_POST['user_id'];
  $code_id = $_POST['code_id'];
  $coupen = $_POST['coupen'];

  switch ($code_id) {
    case '1':
      $sql = "select * from customer_registration where user_id = '$user_id' and code1 = '$coupen'";

      $update_query = "UPDATE `customer_lvl_1` SET `code1` = 'complete' WHERE `customer_lvl_1`.`user_id` = '$user_id';";
      break;
    case '2':
      $sql = "select * from customer_registration where user_id = '$user_id' and code2 = '$coupen'";

      $update_query = "UPDATE `customer_lvl_1` SET `code2` = 'complete' WHERE `customer_lvl_1`.`user_id` = '$user_id';";
      break;
    case '3':
      $sql = "select * from customer_registration where user_id = '$user_id' and code3 = '$coupen'";

      $update_query = "UPDATE `customer_lvl_1` SET `code3` = 'complete' WHERE `customer_lvl_1`.`user_id` = '$user_id';";
      break;

    default:
      return 'no valid data';
      break;
  }

  if($result = $connection->query($sql)) {
    if($result->num_rows > 0)
    {
          if($connection->query($update_query))
          {
            echo '1';
          }else{
            echo '2';//invalid code
          }
    }
    else{
      echo '3';
    }

  }
  else{
    echo $connection->error;
  }




 ?>
