<!DOCTYPE html>
<html lang="en">
<head>
	<title>Customer Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<!--===============================================================================================-->
	<link rel="icon" type="image/jpeg" href="images/icons/favicon1.jpeg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<style>
 body {font-family: Arial, Helvetica, sans-serif; background-image: url("images/Food 1.jpg"); padding-left: 840px; background-size: 1000px 1320px; background-repeat:repeat;}

</style>
<!-- <div id="slider" style="padding-right: 500px">
	<div id="headerSlider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#headerSlider" data-slide-to="0" class="active"></li>
			<li data-target="#headerSlider" data-slide-to="1"></li>
			<li data-target="#headerSlider" data-slide-to="2"></li>
		</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/food 1.jpg" class="d-block w-100">
			<div class="carousel-caption">

				<h5> WELCOME </h5>

			</div>
		</div>

		<div class="carousel-item">
			<img src="images/food 2.jpg" class="d-block w-100">
		</div>
			<div class="carousel-caption">
				<h5> WELCOME </h5>
			</div>
		<div class="carousel-item">
			<img src="images/food 3.jpg" class="d-block w-100">
		</div>
			<div class="carousel-caption">
				<h5> WELCOME </h5>
			</div>
	</div>
	<a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>
</div> -->



	<div class="limiter">
		<div class="container-login100">


			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="Customer_Registration2.php" method="POST">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="User Name is required">
						<span class="label-input100">User Name</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Last Name is required">
						<span class="label-input100">Last Name</span>
						<input class="input100" type="text" name="lastname" placeholder="Lastname...">
						<span class="focus-input100"></span>
					</div>


					<span class="label-input100">Gender:</span> <br>
					<div class="form-check-inline">
					<label class="label-input100"><span class="radiotextsty" style="margin-left:30px">Male</span>
						<input type="radio" id="gender"  name="gender" value="Male" checked >
						<span class="checkmark" style="margin-left:30px"></span>     
					<label class="label-input100"><span class="radiotextsty">Female</span></label>
						<input type="radio" name="gender" value="Female">
						<span class="checkmark"></span></label>

					</div>
					<br> <br>


					<div class="wrap-input100 validate-input" data-validate="Age is required">
						<span class="label-input100">Age</span>
						<input class="input100" type="text" name="age" placeholder="Age...">
						<span class="focus-input100"></span>
					</div>



					<div class="form-check-inline">
						<span class="label-input100">Nation:</span> <br>
						<div class="form-check-inline" style="margin-top:10px">
						<label class="label-input100"><span class="radiotextsty">Sinhala</span>
						  <input type="radio" name="nation" value="Sinhala" checked>
						  <span class="checkmark"></span></label> 
					<label class="label-input100" style="margin-left:10px"><span class="radiotextsty">Tamil</span>
					  <input type="radio" name="nation" value="Tamil" >
					  <span class="checkmark"></span></label>
						<label class="label-input100" style="margin-left:10px"><span class="radiotextsty">Muslim</span>
						  <input type="radio" name="nation" value="Muslim">
						  <span class="checkmark"></span></label>
						<label class="label-input100" style="margin-left:10px"><span class="radiotextsty">Other</span>
							 <input type="radio" name="nation" value="Other">
							 <span class="checkmark"></span></label>	<br>


					<br> <br>
					</div>
        </div>

				<div class="wrap-input100 validate-input" data-validate = "Address is required....">
					<span class="label-input100">Address</span>
					<input class="input100" type="text" name="address" placeholder="Address...">
					<span class="focus-input100"></span>
				</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email address...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<!-- <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="text" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div> -->

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="checkbox">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>


					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onClick="ValidateForm(this.form)">
								Sign Up
							</button>
						</div>

						<a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script LANGUAGE="JavaScript">
	function ValidateForm(form){
	ErrorText= "";
	if ( ( form.checkbox.checked == false ) )
	{
	alert ( "Please, You should agree the terms." );
	return false;
	}
	if (ErrorText= "") { form.submit() }
	}
	</script>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
