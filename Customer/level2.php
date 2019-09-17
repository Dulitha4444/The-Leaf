<?php
require('mb.php');
    $user_id = $_GET['user_id'];

    $servername = "localhost";
    $username = "root";
    $password = "123";
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
      <h2 style="padding-top:10px">Suggessted Shops for Round 2</h2>
        <div class="row" id="DivShopList" style="padding-top:50px">



                  <?php

                    $query = "select shop4,shop5,shop6,shop7,shop8 from customer_lvl_1 where user_id='$user_id'  limit 1";
                    if($result = $connection->query($query)){
                      if($result->num_rows>0){
                        //echo 'alert("ersult")';
                        while($rowM = $result->fetch_assoc()) {
                          if($rowM['shop4'] == "")
                          {
                            
                            //echo 'alert("1")';
                            //echo "<script type='text/javascript'>suggestShops();</script>";
                          }
                          else{
                             

                            $q1 = "SELECT sr.*,cl.code4 FROM `customer_lvl_1` cl, shop_registration sr where cl.user_id = $user_id and cl.shop4 = sr.id LIMIT 1";
                            if($r1 = $connection->query($q1))
                            {
                              if($r1->num_rows)
                              {
                                $row = $r1->fetch_assoc();

                                //echo json_encode($row);

                                echo '<div class="col-md-4" style="">'.
                                '<div class="card" style="width:100%;">'.
                                  '<img src="../img/shopimgs/'. $row['upload_picture'] .'" class="card-img-top" alt="...">'.
                                  '<div class="card-body">'.
                                    '<h5 class="card-title">'. $row['shop_name'] .'</h5>'.
                                    '<p class="card-text">'.$row['S_od'].'</p>'.
                                    '<a href="#" class="btn btn-primary">rs '. $row['S_vp'] .'</a><hr>'.
                                    '<p><input id="txt'. '4' .'" value="'.$row['code4'].'"><span id=spn'.'4'.'></span></p><a href="#" class="btn btn-success" onClick="addCoupen('.'4'.')">Add Coupen</a>'.
                                 ' </div>'.
                                '</div>'.
                             ' </div>';

                              }
                            }

                            $q2 = "SELECT sr.*,cl.code5 FROM `customer_lvl_1` cl, shop_registration sr where cl.user_id = $user_id and cl.shop5 = sr.id LIMIT 1";
                            if($r2 = $connection->query($q2))
                            {
                              if($r2->num_rows)
                              {
                                $row = $r2->fetch_assoc();

                                //echo json_encode($row);

                                echo '<div class="col-md-4" style="">'.
                                '<div class="card" style="width:100%;">'.
                                  '<img src="../img/shopimgs/'. $row['upload_picture'] .'" class="card-img-top" alt="...">'.
                                  '<div class="card-body">'.
                                    '<h5 class="card-title">'. $row['shop_name'] .'</h5>'.
                                    '<p class="card-text">'.$row['S_od'].'</p>'.
                                    '<a href="#" class="btn btn-primary">rs '. $row['S_vp'] .'</a><hr>'.
                                    '<p><input id="txt'. '5' .'" value="'.$row['code5'].'"><span id=spn'.'5'.'></span></p><a href="#" class="btn btn-success" onClick="addCoupen('.'5'.')">Add Coupen</a>'.
                                 ' </div>'.
                                '</div>'.
                             ' </div>';

                              }
                            }


                            $q3 = "SELECT sr.*,cl.code6 FROM `customer_lvl_1` cl, shop_registration sr where cl.user_id = $user_id and cl.shop6 = sr.id LIMIT 1";
                            if($r3 = $connection->query($q3))
                            {
                              if($r3->num_rows)
                              {
                                $row = $r3->fetch_assoc();

                                //echo json_encode($row);

                                echo '<div class="col-md-4" style="">'.
                                '<div class="card" style="width:100%;">'.
                                  '<img src="../img/shopimgs/'. $row['upload_picture'] .'" class="card-img-top" alt="...">'.
                                  '<div class="card-body">'.
                                    '<h5 class="card-title">'. $row['shop_name'] .'</h5>'.
                                    '<p class="card-text">'.$row['S_od'].'</p>'.
                                    '<a href="#" class="btn btn-primary">rs '. $row['S_vp'] .'</a><hr>'.
                                    '<p><input id="txt'. '6' .'" value="'.$row['code6'].'"><span id=spn'.'6'.'></span></p><a href="#" class="btn btn-success" onClick="addCoupen('.'6'.')">Add Coupen</a>'.
                                 ' </div>'.
                                '</div>'.
                             ' </div>';

                              }
                            }

                            $q7 = "SELECT sr.*,cl.code7 FROM `customer_lvl_1` cl, shop_registration sr where cl.user_id = $user_id and cl.shop7 = sr.id LIMIT 1";
                            if($r7 = $connection->query($q7))
                            {
                              if($r7->num_rows)
                              {
                                $row = $r7->fetch_assoc();

                                //echo json_encode($row);

                                echo '<div class="col-md-4" style="">'.
                                '<div class="card" style="width:100%;">'.
                                  '<img src="../img/shopimgs/'. $row['upload_picture'] .'" class="card-img-top" alt="...">'.
                                  '<div class="card-body">'.
                                    '<h5 class="card-title">'. $row['shop_name'] .'</h5>'.
                                    '<p class="card-text">'.$row['S_od'].'</p>'.
                                    '<a href="#" class="btn btn-primary">rs '. $row['S_vp'] .'</a><hr>'.
                                    '<p><input id="txt'. '7' .'" value="'.$row['code7'].'"><span id=spn'.'7'.'></span></p><a href="#" class="btn btn-success" onClick="addCoupen('.'7'.')">Add Coupen</a>'.
                                 ' </div>'.
                                '</div>'.
                             ' </div>';

                              }
                            }


                            $q8 = "SELECT sr.*,cl.code8 FROM `customer_lvl_1` cl, shop_registration sr where cl.user_id = $user_id and cl.shop8 = sr.id LIMIT 1";
                            if($r8 = $connection->query($q8))
                            {
                              if($r8->num_rows)
                              {
                                $row = $r8->fetch_assoc();

                                //echo json_encode($row);

                                echo '<div class="col-md-4" style="">'.
                                '<div class="card" style="width:100%;">'.
                                  '<img src="../img/shopimgs/'. $row['upload_picture'] .'" class="card-img-top" alt="...">'.
                                  '<div class="card-body">'.
                                    '<h5 class="card-title">'. $row['shop_name'] .'</h5>'.
                                    '<p class="card-text">'.$row['S_od'].'</p>'.
                                    '<a href="#" class="btn btn-primary">rs '. $row['S_vp'] .'</a><hr>'.
                                    '<p><input id="txt'. '8' .'" value="'.$row['code8'].'"><span id=spn'.'8'.'></span></p><a href="#" class="btn btn-success" onClick="addCoupen('.'8'.')">Add Coupen</a>'.
                                 ' </div>'.
                                '</div>'.
                             ' </div>';

                              }
                            }
                          }
                        }
                      }
                      else {
                        //echo "<script type='text/javascript'>suggestShops();</script>";
                      }
                    }else{
                      //echo '<script>alert("4")</script>';
                    }

                  ?>


        </div>

        <div class="row">
            <div class="jumbotron" style="width:100%;">
                <p>To complete level 2....</p>
                <button id="btnLoadLevel3" class="btn btn-success" >Complete</button>
            </div>
        </div>
      </div>

      </body>

      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

</script>

      <script type="text/javascript">
        function suggestShops(){

          let data = {
            '1' : $("#txtAge").val(),
            '2': $("#txtNation").val(),
            '3': $("#txtVeg").val(),
            '4': $("#txtTimes").val(),
            '5': $("#txtPayment").val()
          };

          $.ajax({
            url : 'http://localhost:5000/recommentdations/5',
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
                         'code_id': (y+4),
                         'last_count': previous_count
                       };

                       previous_count = counts[k];

                       $.ajax({
                         url : '../Shops/suggest_shop_lv2.php',
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
                                              '<p class="card-text">'+rsp1[x]['F_od']+'</p>'+
                                              '<a href="#" class="btn btn-primary">rs '+ rsp1[x]['price'] +'</a><hr>'+
                                              '<p><input id="txt'+ (x+4) +'"><span id=spn'+(x+4)+'></span></p><a href="#" class="btn btn-success" onClick="addCoupen('+(x+4)+')">Add Coupen</a>'+
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

        $(document).ready(function(){
          let user_id = <?php echo $_GET['user_id']; ?>;

          let data = {
            '1' : $("#txtAge").val(),
            '2': $("#txtNation").val(),
            '3': $("#txtVeg").val(),
            '4': $("#txtTimes").val(),
            '5': $("#txtPayment").val()
          };

          $("#btnLoadLevel3").on('click',()=>loadLevel3());

        function loadLevel3() {
          let user_id = <?php echo $user_id; ?>;
          location.href = 'load_level3.php?user_id='+user_id;
        }


        //suggestShops();

        <?php

            $query = "select shop4,shop5 from customer_lvl_1 where user_id='$user_id'  limit 1";
            if($result = $connection->query($query)){
              if($result->num_rows>0){
                //echo 'alert("ersult")';
                while($rowM = $result->fetch_assoc()) {
                  if($rowM['shop4'] == "")
                  {
                    //echo 'alert("1")';
                    echo "suggestShops();";
                  }
                }
              }
              else {
                echo "suggestShops();";
              }
            }else{
              echo '<script>alert("4")</script>';
            }

          ?>

       });

      </script>


    </html>
    <!-- SELECT shop_name FROM shop_registration
    where
    ORDER BY RAND() LIMIT 1 -->
