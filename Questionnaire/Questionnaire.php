
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

  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url("Food 2.jpg"); background-size: 1350px 1320px; background-repeat:repeat;}
form {border: 7px solid transparent; background-color:transparent;  width: 50%; padding: 12px 20px; margin-left: 20px;}


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


  <form action="Questionnaire2.php" method="POST" >
    <h2><center>Questionnaire</center></h2> <br> <br>
    <label for="Q1">1.	What is your age?</label></br>
    <div class="form-check-inline">
      <label class="customradio"><span class="radiotextsty" style="margin-left:30px" >Below 20</span>
        <input type="radio"  name="radio1" id="radio1" value="1">
        <span class="checkmark" style="margin-left:30px"></span>
      </label>        
      <label class="customradio"> <span class="radiotextsty">Between 21-35</span>
    <input type="radio" name="radio1" value="2">
    <span class="checkmark" ></span>
    </label>
    <label class="customradio" style="margin-left:30px"> <span class="radiotextsty">Between 36-50</span>
    <input type="radio" name="radio1" value="3">
    <span class="checkmark"></span>
    </label>
    <label class="customradio" style="margin-left:30px"> <span class="radiotextsty">above 50</span>
    <input type="radio" name="radio1" value="4">
    <span class="checkmark"></span>
  </label>
    </div><br><br>

  <label for="Q2">2. Where are you from?</label>

    <div class="row" style="width:200px; margin-left:30px">
  		<div class="ui-widget">
              <select name="combobox" id="combobox" >
                  <option value="0"> Select Town:</option>
                  <option value="1"> Colombo</option>
                  <option value="2"> Kollupitiya</option>
                  <option value="3"> Bambalapitiya</option>
                  <option value="4"> Wallawatte</option>
                  <option value="5"> Dehiwala</option>
                  <option value="6"> Mt.Lavinia</option>
                  <option value="7">Rathmalana</option>

            </select>
          </div>
  	</div>

<br>
<label for="Q3">3. What is your nation?</label>
<br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">Sinhala</span>
    <input type="radio"  name="radio3" id="radio3" value="1" >
    <span class="checkmark" style="margin-left:30px"></span>
  </label>        
  <label class="customradio"> <span class="radiotextsty">Tamil</span>
<input type="radio" name="radio3" value="2">
<span class="checkmark" ></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">Muslim</span>
<input type="radio" name="radio3" value="3">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">Other</span>
<input type="radio" name="radio3" value="4" >
<span class="checkmark"></span>
</label>
</div><br><br>
<label for="Q4">4. Are you vegetarian or non-vegetarian?</label> <br>
<div class="form-check-inline">
<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Vegetarian</span>
  <input type="radio" id="radio4"  name="radio4" value="1" >
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">Non-Vegetarian</span>
  <input type="radio" name="radio4" value="2">
  <span class="checkmark"></span>
</label>
</div>
<br><br>

<label for="Q5">5. Which country's food do you like?</label> <br>
<div class="form-check-inline">
<label class="check">Sri Lankan
    <input type="checkbox" name="check[]" id="check" value="1">
  <span class="checkmark1"></span>
</label>
<label class="check">Indian
    <input type="checkbox"  name="check[]" value="2">
  <span class="checkmark1"></span>
</label>
<label class="check">Thai
    <input type="checkbox"  name="check[]" value="3">
  <span class="checkmark1"></span>
</label>
<label class="check">Chineese
    <input type="checkbox"  name="check[]" value="4">
  <span class="checkmark1"></span>
</label>
<label class="check">Mexican
    <input type="checkbox"  name="check[]" value="5">
  <span class="checkmark1"></span>
</label>
</div>

<br><br>
<label for="Q6">6. How much do you pay as an average for the expenses of food items per month?</label>
<br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">Less than 1000</span>
    <input type="radio"  name="radio6" id="radio6" value="1" >
    <span class="checkmark" style="margin-left:30px"></span>
  </label>  
  </div>      
  <label class="customradio"style="margin-left:30px; margin-top:10px"> <span class="radiotextsty">Between 1000-5000</span>
<input type="radio" name="radio6" value="2">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty">Between 5000-10000</span>
<input type="radio" name="radio6" value="3">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty">More than 10000</span>
<input type="radio" name="radio6" value="4">
<span class="checkmark"></span>
</label>

<br>
<label for="Q7">7. Do you like to take your meal by dine in the shop or taking away?</label>
<br>
<div class="form-check-inline">
<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Dine in</span>
  <input type="radio"  name="radio7" id="radio7" value="1" >
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">Take away</span>
  <input type="radio" name="radio7" value="2">
  <span class="checkmark"></span>
</label>
</div>
<br><br>
<label for="Q8">8. How often are you visiting meals shops per month?</label>
<br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">1-5</span>
    <input type="radio"  name="radio8" id="radio8" value="1">
    <span class="checkmark" style="margin-left:30px"></span>
  </label>        
  <label class="customradio"> <span class="radiotextsty">5-10</span>
<input type="radio" name="radio8" value="2">
<span class="checkmark" ></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">10-20</span>
<input type="radio" name="radio8" value="3">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">20+</span>
<input type="radio" name="radio8" value="4">
<span class="checkmark"></span>
</label>
</div>
<br><br>
<label for="Q9">9. Do you go to food shops as a group or individually?</label>
<br>
<div class="form-check-inline">
<label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty" >Individually</span>
<input type="radio" name="radio9" id="radio9" value="1">
<span class="checkmark"></span>
</label>    
</div>
  <label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty" >Group of 2 to 3 members</span>
<input type="radio" name="radio9" value="2">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty">Gruop of 4 to 5 members</span>
<input type="radio" name="radio9" value="3">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty">Group of more than 5 memebers</span>
<input type="radio" name="radio9" value="4">
<span class="checkmark"></span>
</label>
<br>
<label for="Q10">10. Do you like drive through service?</label>
<br>
<div class="form-check-inline">
<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Yes</span>
  <input type="radio"  name="radio10" id="radio10" value="1" >
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">No</span>
  <input type="radio" name="radio10" value="2">
  <span class="checkmark"></span>
</label>
</div>
<br><br>
<label for="Q11">11. What time you choose the time for your meal? Breakfast, Lunch, Tea time or Dinner?</label><br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">Breakfast</span>
    <input type="radio"  name="radio11" id="radio11" value="1" >
    <span class="checkmark" style="margin-left:30px"></span>
  </label>        
  <label class="customradio"> <span class="radiotextsty">Lunch</span>
<input type="radio" name="radio11" value="2">
<span class="checkmark" ></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">Tea time</span>
<input type="radio" name="radio11" value="3">
<span class="checkmark"></span>
</label>
<label class="customradio" style="margin-left:30px"> <span class="radiotextsty">Dinner</span>
<input type="radio" name="radio11" value="4">
<span class="checkmark"></span>
</label>
</div>
<br><br>
<label class="Q12">12. Do you make Cash payments or Card payments ?</label><br>
<div class="form-check-inline">

<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Card Payments</span>
  <input type="radio" name="radio12" id="radio12" value="1">
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">Cash Payments</span>
  <input type="radio" name="radio12" value="2">
  <span class="checkmark"></span>
</label>
</div>
<br><br>
<center><button  class="btn cust-btn " type="submit" value="save" style="font-size: 20px;letter-spacing: 1px;">Save</button><td>
<button  class="btn cust-btn " type="reset" value="reset" style="font-size: 20px;letter-spacing: 1px;">Reset</button></center>



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