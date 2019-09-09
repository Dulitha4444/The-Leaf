<?php
require('mb.php');
    $user_id = $_GET['user_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "leaf";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style media="screen">

          .fa-check-circle{
            color:green;
          }

          .fa-times-circle{
            color:red;
          }
        </style>
      </head>
      <body>

      <div class="container">
      <h2 style="padding-top:10px">Suggessted Shops for Round 1</h2>
        <div class="row" id="DivShopList" style="padding-top:50px">

        </div>
      </div>

      </body>

      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
function suggestShops1() {
  alert("suggestShops");
}
</script>

      <script type="text/javascript">


        $(document).ready(function(){
          let user_id = <?php echo $_GET['user_id']; ?>;

          let data = {
            '1' : $("#txtAge").val(),
            '2': $("#txtNation").val(),
            '3': $("#txtVeg").val(),
            '4': $("#txtTimes").val(),
            '5': $("#txtPayment").val()
          };

        function suggestShops(){
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

              let y = 0;
              let previous_count = 0;
              for (var k in counts){
                  if (counts.hasOwnProperty(k)) {
                       //alert("Key is " + k + ", value is " + counts[k]);

                       d = {
                         'type' : k,
                         'limit': counts[k],
                         'user_id': <?php echo $_GET['user_id']; ?>,
                         'code_id': (y+1),
                         'last_count': previous_count
                       };

                       previous_count = counts[k];

                       $.ajax({
                         url : '../Shops/suggest_shop.php',
                         method: 'POST',
                         data: d,
                         success: function(rsp1) {
                           rsp1 = JSON.parse(rsp1);
                           console.log("r",rsp1);
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
                                              '<p><input id="txt'+ (x+1) +'"><span id=spn'+(x+1)+'></span></p><a href="#" class="btn btn-success" onClick="addCoupen('+(x+1)+')">Add Coupen</a>'+
                                           ' </div>'+
                                          '</div>'+
                                       ' </div>';
                          }
                            div.append(content);

                         }
                       })

                  }

                  y++;
              }

            }
          })
        }

        function alerss(){
          alert("dfdfdfd");
        }



        function addCoupen(id){
          let userid = <?php echo $user_id; ?>;

          $.ajax({
              url: 'addCoupen.php',
              method: 'POST',
              data: {
                'user_id': userid,
                'code_id': id,
                'coupen': $('#txt'+id).val()
              },
              success: function(data) {
                console.log("d",data);
                if(data == '1')
                {
                  $('#spn'+id).html('<i class="fa fa-check-circle"></i>');
                }else{
                  $('#spn'+id).html('<i class="fa fa-times-circle"></i>');
                }
              }
          })
        }

        <?php

          $query = "select shop1 from customer_lvl_1 where user_id='$user_id'";
          if($result = $connection->query($query)){
            if($result->num_rows>0){
              while($row = $result->fetch_assoc()) {
                if($row['shop1'] == "")
                {
                  echo "suggestShops();";
                }
                else{

                  $sql = "SELECT shop1,shop2,shop3 FROM `customer_lvl_1`  limit 1";
                  //echo $sql;
                  $r = $connection->query($sql);

                    if($r->num_rows>0){
                      //echo 'alerss()';
                      $row = $result->fetch_assoc();
                      echo json_encode($r);
                        echo 'alerss();';
                        echo 'alert("'.$row['shop2'].'");';
                        echo 'alert("'.$row['shop3'].'");';

                    }
                    else{
                      echo 'alerss()';
                    }

                  //echo 'alerss()';
                }
              }
            }
          }

         ?>

       });
      </script>


    </html>
    <!-- SELECT shop_name FROM shop_registration
    where
    ORDER BY RAND() LIMIT 1 -->
