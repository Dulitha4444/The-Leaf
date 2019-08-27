<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
<!--login form validation-->
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
			<script type="text/javascript">
						$(document).ready(function(){

								$("#but_submit").click(function(){
										var username = $("#user_id").val().trim();
										var password = $("#user_pass").val().trim();

									 if( username == "" && password == ""){

						 $('#message3').html("Please enter User Name & Password");

					}
										else if( username == "" ){

						 $('#message1').html("User Name is required");
						 $('#message3').fadeOut();
					}
					else if( password == "" ){

						 $('#message2').html("Password is required");
						 $('#message1').fadeOut();
							$('#message3').fadeOut();
					}
					else{
												$.ajax({
														url:'login.php',
														type:'post',
														data:{username:username,password:password},
														success:function(response){
																var msg = "";
																if(response == "admin"){
																		window.location = "../Admin/adminpanel.php";
																}
															else if(response == "customer"){
																window.location = "../Customer/Customer_Registration.php";
																}
																else if(response == "shop"){
																 window.location = "Shops/Shop_Registration.php"
																 }
																else{
																		msg = "Invalid username and password!";
																}
																$("#message").html(msg);
								$('#message1').fadeOut();
								$('#message2').fadeOut();
														}
												});
										}
								});

						});
				</script>
</head>
<body>
<style>
/* body {font-family: Arial, Helvetica, sans-serif; background-image: url("images/Food 1.jpg"; "images/Food 2.jpg";"images/Food 3.jpg"); padding-left: 840px; background-size: 1000px 1320px; background-repeat:repeat;} */

.split { height: 100%;  position: fixed; z-index: 1; top: 30; overflow-x: hidden;  }

.left { width: 80%;}

.right { right: 0; padding-left: 450px; width: 70%}

</style>


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
				<img src="images/new 5.jpg" class="d-block w-100">
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

	<div class="split right">
		<div class="container-login100">
			<!------- NavigationBar------------>
		<section id="nav-bar">
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
				<a class="navbar-brand" href="#"><img src="images/icons/logo.jpg"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="../homepage.html">HOME</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#contact"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">SIGN IN</a>
							</section>
						</li>
								</li>

									</ul>

			</nav>									<!-- Modal -->


			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="Shop_Registration2.php" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="User Name is required">
						<span class="label-input100">User Name</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Shop Name is required">
						<span class="label-input100">Shop Name</span>
						<input class="input100" type="text" name="shopname" placeholder="Shopname...">
						<span class="focus-input100"></span>
					</div>

					<span class="label-input100">Food Type:</span> <br><br>
					<div class="form-check-inline">
					<label class="label-input100">Sri Lankan
					    <input type="checkbox" name="check[]" id="check" value="Sri Lankan" checked>
					  <span class="checkmark1"></span>
					</label>
					<label class="label-input100"  style="margin-left:30px">Indian
					    <input type="checkbox"  name="check[]" value="Indian">
					  <span class="checkmark1"></span>
					</label>
					<label class="label-input100"  style="margin-left:30px">Thai
					    <input type="checkbox"  name="check[]" value="Thai">
					  <span class="checkmark1"></span>
					</label>
					<label class="label-input100" >Chaineese
					    <input type="checkbox"  name="check[]" value="Chaineese">
					  <span class="checkmark1"></span>
					</label>
					<label class="label-input100"  style="margin-left:30px">Mexican
					    <input type="checkbox"  name="check[]" value="Mexican">
					  <span class="checkmark1"></span>
					</label>
					<br><br>
					</div>

          <label class = "label-input100">Upload Picture</label>
					<input type="file" name="file">
					<br><br><br>

					<div class="wrap-input100 validate-input" data-validate="Offers or Discounts is required.....">
						<label class="label-input100">First Level : Valid Price</label>
						<input class="input100" type="text" name="vp1"  placeholder="Valid Price.....">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Offers or Discounts is required.....">
						<label class="label-input100">First Level : Offers & Discounts</label>
						<input class="input100" type="text" name="od1"  value="   %">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Offers or Discounts is required.....">
						<label class="label-input100">First Level : Valid Price</label>
						<input class="input100" type="text" name="vp2"  placeholder="Valid Price.....">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Offers or Discounts is required.....">
						<label class="label-input100">Second Level : Offers & Discounts</label>
						<input class="input100" type="text" name="od2"  value="   %">
						<span class="focus-input100"></span>
					</div>

					<span class="label-input100">Drive Through Service:</span> <br>
					<div class="form-check-inline">
					<label class="label-input100"><span class="radiotextsty" style="margin-left:30px">Yes</span>
						<input type="radio" id="drive"  name="drive" value="yes" checked >
						<span class="checkmark" style="margin-left:30px"></span>     
					<label class="label-input100"><span class="radiotextsty">No</span></label>
						<input type="radio" name="drive" value="no">
						<span class="checkmark"></span></label>
					</div>
					<br> <br>

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
							<button class="login100-form-btn" type="submit" name="submit" onClick="ValidateForm(this.form)">
								Sign Up
							</button>
						</div>

						<a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30"  data-toggle="modal" data-target="#myModal">
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
														<label class="sr-only" for="exampleInputEmail2">User Name</label>
														<input type="username" class="form-control" name="user_id" id="user_id" placeholder="User Name" required>
														<div id="message1" style="color:#ff0000"></div>
												 </div>
												 <div class="form-group">
														<label class="sr-only" for="exampleInputPassword2">Password</label>
														<input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="Password" required>
													 <div id="message2" style="color:#ff0000"></div>
												 </div>
												 <div class="checkbox">
														<label>
														<input type="checkbox"> Remember me
														</label>
												 </div>
												 <div class="form-group">
													 <input type="button" name="but_submit" id="but_submit" value="Sign in" class="btn btn-success btn-block"/>
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
                            <li>Shops should have registered with the system.</li><br>
                            <li>Only one shop can access to one shop.</li><br>
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
