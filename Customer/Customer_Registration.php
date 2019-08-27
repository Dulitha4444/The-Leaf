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
/* body {font-family: Arial, Helvetica, sans-serif; background-image: url("images/Food 1.jpg"; "images/Food 2.jpg";"images/Food 3.jpg"); padding-left: 840px; background-size: 1000px 1320px; background-repeat:repeat;} */

.split { height: 100%;  position: fixed; z-index: 1; top: 30; overflow-x: hidden;  }

.left { width: 89%;}

.right { right: 0; padding-left:500px; width: 70%; height: 100%;}

</style>

		<!------- NavigationBar------------>


<!-- <div id="slider" style="padding-right: 500px"> -->
<div class="split left">
	<div id="headerSlider" class="carousel slide" data-ride="carousel">
		<!-- <ol class="carousel-indicators">
			<li data-target="#headerSlider" data-slide-to="0" class="active"></li>
			<li data-target="#headerSlider" data-slide-to="1"></li>
			<li data-target="#headerSlider" data-slide-to="2"></li>
			<li data-target="#headerSlider" data-slide-to="3"></li>
			<li data-target="#headerSlider" data-slide-to="4"></li>

		</ol> -->
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/new 1.jpg" class="d-block w-100">
		</div>

		<div class="carousel-item">
			<img src="images/new 2.jpg" class="d-block w-100">
		</div>

		<div class="carousel-item">
			<img src="images/new 3.jpg" class="d-block w-100">
		</div>
		<div class="carousel-item">
			<img src="images/new 4.jpg" class="d-block w-100">
		</div>
		<div class="carousel-item">
			<img src="images/new 7.jpg" class="d-block w-100">
		</div>


	</div>
	<a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only"></span>
	</a>
	<a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only"></span>
	</a>
	</div>
</div>


<!--	<div class="limiter" style="padding-left: 840px;">  -->
	<div class="split right">
		<div class="container-login100">
			<section id="nav-bar" style="background-color: white;">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="#"> <img src="images/icons/logo.jpg"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="../homepage.html">HOME</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="#services">SERVICES</a>
							</li> -->
							<li class="nav-item">
								<a class="nav-link" href="#contact"></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">SIGN IN</a>
								</section>

							</li>

				  	</ul>
			   </nav>

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
						<input type="radio" id="gender"  name="gender" value="male" checked >
						<span class="checkmark" style="margin-left:30px"></span>     
					<label class="label-input100"><span class="radiotextsty">Female</span></label>
						<input type="radio" name="gender" value="female">
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
						  <input type="radio" name="nation" value="sinhala" checked>
						  <span class="checkmark"></span></label> 
					<label class="label-input100" style="margin-left:10px"><span class="radiotextsty">Tamil</span>
					  <input type="radio" name="nation" value="tamil" >
					  <span class="checkmark"></span></label>
						<label class="label-input100" style="margin-left:10px"><span class="radiotextsty">Muslim</span>
						  <input type="radio" name="nation" value="muslim">
						  <span class="checkmark"></span></label>
						<label class="label-input100"><span class="radiotextsty">Other</span>
							 <input type="radio" name="nation" value="other">
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
									<a href="#" class="txt2 hov1" data-toggle="modal" data-target="#myModal1">
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

						<a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30" data-toggle="modal" data-target="#myModal">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
						<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						<div class="modal-header">
						<h4 class="modal-title">Login</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>

						</div>
						<div class="modal-body">
							<div class="row">
															<div class="col-md-12">
																 <form class="form" role="form" method="post" action="login.php">
																		<div class="form-group">
																			 <label class="sr-only" for="exampleInputEmail2">Email address</label>
																			 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
																		</div>
																		<div class="form-group">
																			 <label class="sr-only" for="exampleInputPassword2">Password</label>
																			 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
																		</div>
																		<div class="checkbox">
																			 <label>
																			 <input type="checkbox"> Remember me
																			 </label>
																		</div>
																		<div class="form-group">
																			 <button type="submit" class="btn btn-success btn-block">Sign in</button>
																		</div>
																 </form>
															</div>
													 </div>
						</div>
						</div>

						</div>
						</div>

						<div class="modal fade" id="myModal1" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						<div class="modal-header">
						<h4 class="modal-title">Rules</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>

						</div>
						<div class="modal-body">
							<div class="row">
															<div class="col-md-12">
																 <form class="form" role="form">
																		<div class="form-group">
																			<ul style="list-style-type:disc;">
																			<span style="font-family: 'book antiqua', palatino; font-size: 14pt;">
																			<li>Now, this system exists only in shops near the Colombo area.</li><br>
																			<li>In first level, Customers should go to five shops and purchase goods according to the targets given.</li><br>
																			<li>Customer should enter the correct code to the system which is given by the shop.</li><br>
																			<li>Only one person can access to one shop.</li><br>
																	  	</span>
																			</ul>

																		<!-- <div class="form-group">
																			 <button type="button" class="btn btn-success btn-block">Ok</button>
																		</div> -->
																 </form>
															</div>
													 </div>
						</div>
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
