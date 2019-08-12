<?php

if (isset($_POST['submit'])) {

  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  if(in_array($fileActualExt, $allowed)){
    if($fileError === 0){
      if ($fileSize < 1000000) {
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        $fileDestination = 'uploads/';
        move_uploaded_file($fileTmpName, $fileDestination.$fileName);
        // header("Location: Shop_Registration.php?uploadsucess");

      }else {
        echo"Your file is too big!";
      }

    }else {
      echo"There was an error uploading your file!";
    }

  }else {
    echo"You cannot upload file of this type!";
  }
  // code...
}


 require('mb.php');

 if (isset($_POST['username']) and isset($_POST['shopname'])){

 $Username = $_POST['username'];
 $Shopname = $_POST['shopname'];
 $check = json_encode($_POST['check']);
 $fileName = $_FILES['file']['name'];
 $Vp1= $_POST['vp1'];
 $Od1 = $_POST['od1'];
 $Vp2= $_POST['vp2'];
 $Od2 = $_POST['od2'];
 $Drive= $_POST['drive'];
 $Email = $_POST['email'];
 $Password= $_POST['password'];
 $date = date("Y-m-d H:i:s");




 $sql = "INSERT INTO shop_registration (user_name, shop_name, food_type, upload_picture, F_vp, F_od, S_vp, S_od, Drive, email, password, recive_date)
 VALUES ('$Username', '$Shopname', '$check', '$fileName', '$Vp1', '$Od1', '$Vp2', '$Od2', '$Drive', '$Email', '$Password', '$date')";



 if ($connection->query($sql) === TRUE) {
     echo "Save Successfully";

 } else {
     echo "Save Failed: " . $sql . "<br>" . $connection->error;
 }

 $connection->close();
 }
