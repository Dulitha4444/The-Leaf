


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


  <form action="Questionnaire2.php" method="POST" >
    <h2><center>Questionnaire</center></h2> <br> <br>
    <label for="Q1">1.	What is your age?</label></br>
    <div class="form-check-inline">
      <label class="customradio"><span class="radiotextsty" style="margin-left:30px">Below 20</span>
        <input type="radio"  name="radio1" value="a1" id="radio1" >
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
  </label>
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

            </select>
          </div>
  	</div>

<br>
<label for="Q3">3. What is your nation?</label>
<br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">Sinhala</span>
    <input type="radio"  name="radio3" value="a1"  id="radio3">
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
</label>
</div><br><br>
<label for="Q4">4. Are you vegetarian of non-vegetarian?</label> <br>
<div class="form-check-inline">
<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Vegetarian</span>
  <input type="radio"  name="radio4" value="a1" id="radio4">
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">Non-Vegetarian</span>
  <input type="radio" name="radio4" value="a2">
  <span class="checkmark"></span>
</label>
</div>
<br><br>

<label for="Q5">5. Which country's food do you like?</label> <br>
<div class="form-check-inline">
<label class="check">Sri Lankan
    <input type="checkbox" name="check" value="a1" id="radio5">
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
</label>
</div>

<br><br>
<label for="Q6">6. How much do you pay as an average for the expenses of food items per month?</label>
<br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">Less than 1000</span>
    <input type="radio"  name="radio6" value="a1" id="radio6" >
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
</label>

<br>
<label for="Q7">7. Do you like to take your meal by dine in the shop or taking away?</label>
<br>
<div class="form-check-inline">
<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Dine in</span>
  <input type="radio"  name="radio7" value="a1" id="radio7">
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">Take away</span>
  <input type="radio" name="radio7" value="a2">
  <span class="checkmark"></span>
</label>
</div>
<br><br>
<label for="Q8">8. How often are you visiting meals shops per month?</label>
<br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">1-5</span>
    <input type="radio"  name="radio8" value="a1" id="radio8">
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
</label>
</div>
<br><br>
<label for="Q9">9. Do you go to food shops as a group or individually?</label>
<br>
<div class="form-check-inline">
<label class="customradio" style="margin-left:30px; margin-top:10px"> <span class="radiotextsty" >Individually</span>
<input type="radio" name="radio9" value="a1" id="radio9">
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
</label>
<br>
<label for="Q10">10. Do you like drive through service?</label>
<br>
<div class="form-check-inline">
<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Yes</span>
  <input type="radio"  name="radio10" value="a1" id="radio10">
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">No</span>
  <input type="radio" name="radio10" value="a2">
  <span class="checkmark"></span>
</label>
</div>
<br><br>
<label for="Q11">11. What time you choose the time for your meal? Breakfast, Lunch, Tea time or Dinner?</label><br>
<div class="form-check-inline">
  <label class="customradio"><span class="radiotextsty" style="margin-left:30px">Breakfast</span>
    <input type="radio"  name="radio11" value="a1" id="radio11">
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
</label>
</div>
<br><br>
<label class="Q12">12. Do you make Cash payments or Card payments ?</label><br>
<div class="form-check-inline">

<label class="customradio"><span class="radiotextsty" style="margin-left:30px">Card Payments</span>
  <input type="radio" name="radio12" value="a1" id="radio12">
  <span class="checkmark" style="margin-left:30px"></span>
</label>        
<label class="customradio"><span class="radiotextsty">Cash Payments</span>
  <input type="radio" name="radio12" value="a2">
  <span class="checkmark"></span>
</label>
</div>
<br><br>
<center><input type="submit" value="Save"></center>



</form>

</body>
</html>



