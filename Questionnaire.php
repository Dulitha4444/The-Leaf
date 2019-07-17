
<?php

require('mb.php');

$r1Err = $comboErr = $r3Err = $r4Err = $cErr = $r5Err = $r6Err = $r7Err = $r8Err = $r9Err = $r10Err = $r11Err = $r12Err = "";
     $r1 = $combo = $r3 = $r4 = $c = $r6 = $r7 = $r8 = $r9 = $r10 = $r11 = $r12 = "";

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["radio1"])) {

     $r1Err = "Code is required";
     } else {

     $r1 = test_input($_POST["radio1"]);
     // check if name only contains letters and whitespace

     }
      }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["combobox"])) {
    $comboErr = "Name is required";
    } else {
    $combo = test_input($_POST["combobox"]);
    // check if name only contains letters and whitespace


    }

     }
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["radio3"])) {

     $r3Err = "Mobile Number is required";
     } else {

     $r3 = test_input($_POST["radio3"]);
     // check if name only contains letters and whitespace

     }
      }
	  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["radio4"])) {

     $r4nErr = "Commission is required";
     } else {

     $r4 = test_input($_POST["radio4"]);
     // check if name only contains letters and whitespace

     }
    }
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["check"])) {

     $cErr = "Remarks is required";
     } else {

     $c = test_input($_POST["check"]);
     // check if name only contains letters and whitespace

     }
    }
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["radio6"])) {

     $r6Err = "Radio Buttons is required";
     } else {
	     // $rdErr = "";
     $r6 = test_input($_POST["radio6"]);
     // check if name only contains letters and whitespace

   }
 }
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["radio7"])) {

        $r7Err = "Radio Buttons is required";
        } else {
   	     // $rdErr = "";
        $r7 = test_input($_POST["radio7"]);
        // check if name only contains letters and whitespace

        }
      }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["radio8"])) {

           $r8Err = "Radio Buttons is required";
           } else {
      	     // $rdErr = "";
           $r8 = test_input($_POST["radio8"]);
           // check if name only contains letters and whitespace

           }
         }
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (empty($_POST["radio9"])) {

              $r9Err = "Radio Buttons is required";
              } else {
         	     // $rdErr = "";
              $r9 = test_input($_POST["radio9"]);
              // check if name only contains letters and whitespace

              }
            }
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 if (empty($_POST["radio10"])) {

                 $r10Err = "Radio Buttons is required";
                 } else {
            	     // $rdErr = "";
                 $r10 = test_input($_POST["radio10"]);
                 // check if name only contains letters and whitespace

                 }
               }
                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["radio11"])) {

                    $r10Err = "Radio Buttons is required";
                    } else {
               	     // $rdErr = "";
                    $r10 = test_input($_POST["radio11"]);
                    // check if name only contains letters and whitespace

                    }
                  }
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                       if (empty($_POST["radio12"])) {

                       $r11Err = "Radio Buttons is required";
                       } else {
                  	     // $rdErr = "";
                       $r11 = test_input($_POST["radio12"]);
                       // check if name only contains letters and whitespace

                       }
                     }


	 if(!empty($_POST["radio1"])&& !empty($_POST["combobox"])&& !empty($_POST["radio3"])&& !empty($_POST["radio4"])&& !empty($_POST["check"])&& !empty($_POST["radio6"])&& !empty($_POST["radio7"])
   && !empty($_POST["req"])&& !empty($_POST["radio9"])&& !empty($_POST["radio10"])&& !empty($_POST["radio11"])&& !empty($_POST["radio12"])) {

	   header("location: Questionnaire2.php?radio1=".$r1."&combobox=".$combo. "&radio3=".$r3. "&radio4=".$r4. "&check=".$c. "&radio6=".$r6."&radio7=".$r7."&radio8=".$r8."&radio9=".$r9."&radio10=".$r10."&radio11=".$r11."&radio12=".$r12);



    }


    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }


	  $connection->close();

?>

<!DOCTYPE html>
<html>
<head>
<title>Questionnaire</title>
<link rel="stylesheet" type="text/css" href="master.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url("Food 1.jpg"); background-size: 1350px 660px; background-repeat: no-repeat;}
form {border: 7px solid #003366; background-color:#80bfff;  width: 50%; padding: 12px 20px; margin-left: 300px;}


.container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark1 {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark1 {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark1 {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark1:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark1:after {
  display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark1:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.radiotextsty {
  color: Black;
  font-size: 14px;
}

.customradio {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 0px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.customradio input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 22px;
  width: 22px;
  background-color: white;
  border-radius: 50%;
  border:1px solid #f8204f;
}

/* On mouse-over, add a grey background color */
.customradio:hover input ~ .checkmark {
  background-color: transparent;
}

/* When the radio button is checked, add a blue background */
.customradio input:checked ~ .checkmark {
  background-color: white;
  border:1px solid #f8204f;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.customradio input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.customradio .checkmark:after {
  top: 2px;
  left: 2px;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: #f8204f;
}
.check {
    display: block;
    position: relative;
    padding-left: 25px;
    margin-bottom: 12px;
    padding-right: 15px;
    cursor: pointer;
    font-size: 14px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.check input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark1 {
    position: absolute;
    top: 3px;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #fff ;
    border-color:#f8204f;
    border-style:solid;
    border-width:2px;
}



/* When the checkbox is checked, add a blue background */
.check input:checked ~ .checkmark1 {
    background-color: #fff  ;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark1:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.check input:checked ~ .checkmark1:after {
    display: block;
}

/* Style the checkmark/indicator */
.check .checkmark1:after {
    left: 5px;
    top: 1px;
    width: 5px;
    height: 10px;
    border: solid ;
    border-color:#f8204f;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.cust-btn{
	margin-bottom: 10px;
	background-color: #f8204f;
	border-width: 2px;
	border-color: #f8204f;
	color: #fff;
}
.cust-btn:hover{

	border-color: #f8204f;
	background-color: #fff;
	color: #f8204f;
	border-radius: 20px;
	transform-style: 2s;

}
.custom-combobox {
    position: relative;
    display: inline-block;

  }
  .custom-combobox-toggle {
    position: absolute;
    top: 0;
    bottom: 0;
    margin-left: -1px;
    padding: 0;

  }
  .custom-combobox-input {
    margin: 0;
    padding-top: 2px;
    padding-bottom: 5px;
    padding-right: 5px;

  }
  .error {color: #FF0000;}

</style>
</head>

<body>
<form>
<h2><center>Questionnaire</center></h2> <br> <br>
  <form action="Questionnaire2.php" method="POST">
    <label for="Q1">1.	What is your age?</label></br>
    <div class="form-check-inline">
      <label class="customradio"><span class="radiotextsty" style="margin-left:30px">Below 20</span>
        <input type="radio"  name="radio1" value="a1" >
        <span class="checkmark" style="margin-left:30px"></span>
      </label>        
      <label class="customradio"> <span class="radiotextsty">Between 21-35</span>
    <input type="radio" name="radio1" value="a2">
    <span class="checkmark" ></span>
    </label>
    <label class="customradio" style="margin-left:30px"> <span class="radiotextsty">Between 36-50</span>
    <input type="radio" name="radio1" value="a3">
    <span class="checkmark"></span>
    </label>
    <label class="customradio" style="margin-left:30px"> <span class="radiotextsty">above 50</span>
    <input type="radio" name="radio1" value="a4">
    <span class="checkmark"></span>
  </label><span class="error"> <?php echo $r1Err;?></span>
    </div><br><br>

  <label for="Q2">2. Where are you from?</label>

    <div class="row" style="width:200px; margin-left:30px">
  		<div class="ui-widget">
              <select name="combobox" id="combobox" >
                  <option value="0"> Select Town:</option>
                  <option value="a1"> Colombo</option>
                  <option value="a2"> Kollupitiya</option>
                  <option value="a3"> Bambalapitiya</option>
                  <option value="a4"> Wallawatte</option>
                  <option value="a5"> Dehiwala</option>
                  <option value="a6"> Mt.Lavinia</option>
                  <option value="a7">Rathmalana</option>

            </select><span class="error"> <?php echo $comboErr;?></span>
          </div>
  	</div>

<br>
<label for="Q3">3. What is your nation?</label>
<br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">Sinhala</span>
    <input type="radio"  name="radio3" value="a1" >
    <span class="checkmark" style="margin-left:30px"></span>
  </label>        
  <label class="customradio"> <span class="radiotextsty">Tamil</span>
<input type="radio" name="radio3" value="a2">
<span class="checkmark" ></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">Muslim</span>
<input type="radio" name="radio3" value="a3">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">Other</span>
<input type="radio" name="radio3" value="a4" >
<span class="checkmark"></span>
</label><span class="error"> <?php echo $r3Err;?></span>
</div><br><br>
<label for="Q4">4. Are you vegetarian of non-vegetarian?</label> <br>
<div class="form-check-inline">
<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Vegetarian</span>
  <input type="radio"  name="radio4" value="a1" >
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">Non-Vegetarian</span>
  <input type="radio" name="radio4" value="a2">
  <span class="checkmark"></span>
</label><span class="error"> <?php echo $r4Err;?></span>
</div>
<br><br>

<label for="Q5">5. Which country's food do you like?</label> <br>
<div class="form-check-inline">
<label class="check">Sri Lankan
    <input type="checkbox" name="check" value="a1">
  <span class="checkmark1"></span>
</label>
<label class="check">Indian
    <input type="checkbox"  name="check" value="a2">
  <span class="checkmark1"></span>
</label>
<label class="check">Thai
    <input type="checkbox"  name="check" value="a3">
  <span class="checkmark1"></span>
</label>
<label class="check">Chineese
    <input type="checkbox"  name="check" value="a4">
  <span class="checkmark1"></span>
</label>
<label class="check">Mexican
    <input type="checkbox"  name="Check5" value="a5">
  <span class="checkmark1"></span>
</label><span class="error"> <?php echo $cErr;?></span>
</div>

<br><br>
<label for="Q6">6. How much do you pay as an average for the expenses of food items per month?</label>
<br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">Less than 1000</span>
    <input type="radio"  name="radio6" value="a1" >
    <span class="checkmark" style="margin-left:30px"></span>
  </label>  
  </div>      
  <label class="customradio"style="margin-left:30px; margin-top:10px"> <span class="radiotextsty">Between 1000-5000</span>
<input type="radio" name="radio6" value="a2">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty">Between 5000-10000</span>
<input type="radio" name="radio6" value="a3">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty">More than 10000</span>
<input type="radio" name="radio6" value="a4">
<span class="checkmark"></span>
</label><span class="error"> <?php echo $r6Err;?></span>

<br>
<label for="Q7">7. Do you like to take your meal by dine in the shop or taking away?</label>
<br>
<div class="form-check-inline">
<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Dine in</span>
  <input type="radio"  name="radio7" value="a1" >
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">Take away</span>
  <input type="radio" name="radio7" value="a2">
  <span class="checkmark"></span>
</label><span class="error"> <?php echo $r7Err;?></span>
</div>
<br><br>
<label for="Q8">8. How often are you visiting meals shops per month?</label>
<br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">1-5</span>
    <input type="radio"  name="radio8" value="a1">
    <span class="checkmark" style="margin-left:30px"></span>
  </label>        
  <label class="customradio"> <span class="radiotextsty">5-10</span>
<input type="radio" name="radio8" value="a2">
<span class="checkmark" ></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">10-20</span>
<input type="radio" name="radio8" value="a3">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">20+</span>
<input type="radio" name="radio8" value="a4">
<span class="checkmark"></span>
</label><span class="error"> <?php echo $r8Err;?></span>
</div>
<br><br>
<label for="Q9">9. Do you go to food shops as a group or individually?</label>
<br>
<div class="form-check-inline">
<label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty" >Individually</span>
<input type="radio" name="radio9" value="a1">
<span class="checkmark"></span>
</label>    
</div>
  <label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty" >Group of 2 to 3 members</span>
<input type="radio" name="radio9" value="a2">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty">Gruop of 4 to 5 members</span>
<input type="radio" name="radio9" value="a3">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty">Group of more than 5 memebers</span>
<input type="radio" name="radio9" value="a4">
<span class="checkmark"></span>
</label><span class="error"> <?php echo $r9Err;?></span>
<br>
<label for="Q10">10. Do you like drive through service?</label>
<br>
<div class="form-check-inline">
<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Yes</span>
  <input type="radio"  name="radio10" value="a1" >
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">No</span>
  <input type="radio" name="radio10" value="a2">
  <span class="checkmark"></span>
</label><span class="error"> <?php echo $r10Err;?></span>
</div>
<br><br>
<label for="Q11">11. What time you choose the time for your meal? Breakfast, Lunch, Tea time or Dinner?</label><br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">Breakfast</span>
    <input type="radio"  name="radio11" value="a1" >
    <span class="checkmark" style="margin-left:30px"></span>
  </label>        
  <label class="customradio"> <span class="radiotextsty">Lunch</span>
<input type="radio" name="radio11" value="a2">
<span class="checkmark" ></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">Tea time</span>
<input type="radio" name="radio11" value="a3">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">Dinner</span>
<input type="radio" name="radio11" value="a4">
<span class="checkmark"></span>
</label><span class="error"> <?php echo $r11Err;?></span>
</div>
<br><br>
<label class="Q12">12. Do you make Cash payments or Card payments ?</label><br>
<div class="form-check-inline">

<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Card Payments</span>
  <input type="radio" name="radio12" value="a1">
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">Cash Payments</span>
  <input type="radio" name="radio12" value="a2">
  <span class="checkmark"></span>
</label><span class="error"> <?php echo $r12Err;?></span>
</div>
<br><br>
<center><button  class="btn cust-btn " type="submit" value="save" style="font-size: 20px;letter-spacing: 1px;">Save</button></center>



</form>

</body>
</html>



<script>
$( function() {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<span>" )
          .addClass( "custom-combobox" )
          .insertAfter( this.element );

        this.element.hide();
        this._createAutocomplete();
        this._createShowAllButton();
      },

      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
          value = selected.val() ? selected.text() : "";

        this.input = $( "<input>" )
          .appendTo( this.wrapper )
          .val( value )
          .attr( "title", "" )
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: $.proxy( this, "_source" )
          })
          .tooltip({
            classes: {
              "ui-tooltip": "ui-state-highlight"
            }
          });

        this._on( this.input, {
          autocompleteselect: function( event, ui ) {
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
          },

          autocompletechange: "_removeIfInvalid"
        });
      },

      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false

        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Show All Items" )
          .attr( "height", "" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: "false"
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .on( "mousedown", function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .on( "click", function() {
            input.trigger( "focus" );

            // Close if already visible
            if ( wasOpen ) {
              return;
            }

            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
      },

      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
          if ( this.value && ( !request.term || matcher.test(text) ) )
            return {
              label: text,
              value: text,
              option: this
            };
        }) );
      },

      _removeIfInvalid: function( event, ui ) {

        // Selected an item, nothing to do
        if ( ui.item ) {
          return;
        }

        // Search for a match (case-insensitive)
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( $( this ).text().toLowerCase() === valueLowerCase ) {
            this.selected = valid = true;
            return false;
          }
        });

        // Found a match, nothing to do
        if ( valid ) {
          return;
        }

        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", value + " didn't match any item" )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.autocomplete( "instance" ).term = "";
      },

      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });

    $( "#combobox" ).combobox();
    $( "#toggle" ).on( "click", function() {
      $( "#combobox" ).toggle();
    });
  } );
</script>
