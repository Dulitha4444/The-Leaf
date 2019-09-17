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

      case '4':
      $sql = "select * from customer_registration where user_id = '$user_id' and code4 = '$coupen'";

      $update_query = "UPDATE `customer_lvl_1` SET `code4` = 'complete' WHERE `customer_lvl_1`.`user_id` = '$user_id';";
      break;

      case '5':
      $sql = "select * from customer_registration where user_id = '$user_id' and code5 = '$coupen'";

      $update_query = "UPDATE `customer_lvl_1` SET `code5` = 'complete' WHERE `customer_lvl_1`.`user_id` = '$user_id';";
      break;

      case '6':
      $sql = "select * from customer_registration where user_id = '$user_id' and code6 = '$coupen'";

      $update_query = "UPDATE `customer_lvl_1` SET `code6` = 'complete' WHERE `customer_lvl_1`.`user_id` = '$user_id';";
      break;

      case '7':
      $sql = "select * from customer_registration where user_id = '$user_id' and code7 = '$coupen'";

      $update_query = "UPDATE `customer_lvl_1` SET `code7` = 'complete' WHERE `customer_lvl_1`.`user_id` = '$user_id';";
      break;

      case '8':
      $sql = "select * from customer_registration where user_id = '$user_id' and code8 = '$coupen'";

      $update_query = "UPDATE `customer_lvl_1` SET `code8` = 'complete' WHERE `customer_lvl_1`.`user_id` = '$user_id';";
      break;

    default:
      echo 'no valid data';
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
      echo $sql;
    }

  }
  else{
    echo $connection->error;
  }




 ?>
