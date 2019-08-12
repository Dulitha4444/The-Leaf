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
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url("images/Food 1.jpg"); padding-left: 840px; background-size: 1000px 1600px; background-repeat:repeat;}

</style>

	<div class="limiter">
		<div class="container-login100">


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
							<button class="login100-form-btn" type="submit" name="submit" onClick="ValidateForm(this.form)">
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
