<?php
    $user_id = $_GET['user_id'];

    $servername = "localhost";
    $username = "root";
    $password = "123";
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
            echo "<input type='text' hidden id='txtUserId' value='".$row['user_id']."'>";
            echo "<input type='text' hidden id='txtAge' value='".$row['age']."'>";
            echo "<input type='text' hidden id='txtNation' value='".$row['nation']."'>";
            echo "<input type='text' hidden id='txtVeg' value='".$row['veg']."'>";
            echo "<input type='text' hidden id='txtPayment' value='".$row['ptype']."'>";
            echo "<input type='text' hidden id='txtTimes' value='".$row['ftimes']."'>";
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>

      <div class="container">
      <h2 style="padding-top:10px">Suggessted Shops for Round 1</h2>
        <div class="row" id="DivShopList" style="padding-top:50px">

          <!-- <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="../img/shopimgs/Food.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div> -->


        </div>
      </div>

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
                       //alert("Key is " + k + ", value is " + counts[k]);

                       d = {
                         'type' : k,
                         'limit': counts[k]
                       };

                       $.ajax({
                         url : '../Shops/suggest_shop.php',
                         method: 'POST',
                         data: d,
                         success: function(rsp1) {
                           rsp1 = JSON.parse(rsp1);
                           console.log(rsp1);
                           div = $("#DivShopList");

                          let x;
                          let content = "";
                          for(x =0; x<rsp1.length; x++ ){

                            content += '<div class="col-md-4" style="">'+
                                          '<div class="card" style="width:100%;">'+
                                            '<img src="../img/shopimgs/'+ rsp1[x]['image'] +'" class="card-img-top" alt="...">'+
                                            '<div class="card-body">'+
                                              '<h5 class="card-title">'+ rsp1[x]['name'] +'</h5>'+
                                              '<p class="card-text"></p>'+
                                              '<a href="#" class="btn btn-primary">rs '+ rsp1[x]['price'] +'</a><hr>'+
                                              '<p><input></p><a href="#" class="btn btn-success">Add Coupen</a>'+
                                           ' </div>'+
                                          '</div>'+
                                       ' </div>';
                          }
                            div.append(content);

                         }
                       })

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
