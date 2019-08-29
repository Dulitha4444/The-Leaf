<?php
    $user_id = $_GET['user_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "leaf";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "select * from customer_registration where user_id = $user_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<input type='text' id='txtUserId' value='".$row['user_id']."'>";
            echo "<input type='text' id='txtAge' value='".$row['age']."'>";
            echo "<input type='text' id='txtNation' value='".$row['nation']."'>";
            echo "<input type='text' id='txtVeg' value='".$row['veg']."'>";
            echo "<input type='text' id='txtPayment' value='".$row['ptype']."'>";
            echo "<input type='text' id='txtTimes' value='".$row['ftimes']."'>";
            //echo "<input type='text' value='".$row['user_id']."'>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>

      </body>

      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          let data = {
            '1' : $("#txtAge").val(),
            '2': $("#txtNation").val(),
            '3': $("#txtVeg").val(),
            '4': $("#txtTimes").val(),
            '5': $("#txtPayment").val()
          };

          $.ajax({
            url : 'http://localhost:5000/recommentdations/3',
            method: 'POST',
            data: data,
            success: function(data){
              console.log('data',data);
              response = JSON.parse(data);
              console.log(response);

              var counts = {};
              response.forEach(function(x) { counts[x] = (counts[x] || 0)+1; });
              console.log("re",counts);

              for (var k in counts){
                  if (counts.hasOwnProperty(k)) {
                       alert("Key is " + k + ", value is " + counts[k]);
                  }
              }

            }
          })
        })
      </script>
    </html>
    <!-- SELECT shop_name FROM shop_registration 
    where
    ORDER BY RAND() LIMIT 1 -->
