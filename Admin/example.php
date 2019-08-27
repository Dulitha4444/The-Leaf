<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "tileshop";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query for contact_messages
$query1 = "SELECT COUNT(*) FROM `contact_messages`";
$result1 = mysqli_query($connect, $query1);
$rows = mysqli_fetch_row($result1);

// mysql select query for customers
$query2 = "SELECT COUNT(*) FROM `user_details`";
$result2 = mysqli_query($connect, $query2);
$rows2 = mysqli_fetch_row($result2);

// mysql select query for items
$query3 = "SELECT COUNT(*) FROM `item_list`";
$result3 = mysqli_query($connect, $query3);
$rows3 = mysqli_fetch_row($result3);

// mysql select query for bathware
$query4 = "SELECT COUNT(*) FROM `orders1`";
$result4 = mysqli_query($connect, $query4);
$rows4 = mysqli_fetch_row($result4);

// mysql select query for tiles
$query5 = "SELECT COUNT(*) FROM `orders`";
$result5 = mysqli_query($connect, $query5);
$rows5 = mysqli_fetch_row($result5);

mysqli_close($connect);

?>

<?php

	$dataPoints = array();

	try{
		// Creating a new connection.
		// Replace your-hostname, your-db, your-username, your-password according to your database
		$link = new \PDO(   'mysql:host=localhost;dbname=tileshop;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        '', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );

		$handle = $link->prepare('Select MONTHNAME(date) AS a, COUNT(id) AS b from user_details Group By Month(date)');
		$handle->execute();
		$result = $handle->fetchAll(\PDO::FETCH_OBJ);

		foreach($result as $row){
			array_push($dataPoints, array("label"=> $row->a, "y"=> $row->b));
		}
		$link = null;
	}
	catch(\PDOException $ex){
		print($ex->getMessage());
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Page</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css1/sb-admin.css" rel="stylesheet">
  <!-- Sweat Alert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- nobackpage-->
   <script type="text/javascript" src="js1/nobackpage.js"></script>

      <script>
		window.onload = function () {

			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				exportEnabled: true,
				theme: "light2", // "light1", "light2", "dark1", "dark2"
				/* 	title:{
				text: "PHP Column Chart from Database"
				}, */
				axisX: {
				title: "Months",
				},
				axisY: {
				title: "No. of Customers",

				},
				data: [{
				type: "line", //change type to bar, line, area, pie, etc
				dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
				}]
			});
			chart.render();

		}
	  </script>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="adminpanel.php">Sisila Grani Tiles</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="adminpanel.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="nav-link-text">Messages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="message.html">Inbox</a>
            </li>
			<li>
              <a href="reply.html">Reply Messages</a>
            </li>
          </ul>
        </li>

		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Item">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseItems" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Manage Item</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseItems">
            <li>
              <a href="item.html">Add Bath-ware Items </a>
            </li>
			<li>
              <a href="item1.html">Add Tiles Items</a>
            </li>
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Request for Quotations">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseQuotations" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cart-plus"></i>
            <span class="nav-link-text">Request for Quotations</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseQuotations">
            <li>
              <a href="reqBware.html">Quotations for Bath-ware</a>
            </li>
			<li>
              <a href="reqTiles.html">Quotations for Tiles</a>
            </li>
            <li>
              <a href="reqBwareReply.html">Reply Messages Bath-ware</a>
            </li>
			<li>
              <a href="reply.html">Reply Messages Tiles</a>
            </li>
          </ul>
        </li>

		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registered Customers">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUsers" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Registered Customers</span>
          </a>
		   <ul class="sidenav-second-level collapse" id="collapseUsers">
            <li>
              <a href="customer.html">All Customers</a>
            </li>

          </ul>

        </li>

		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Admin Details">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAdmin" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">Admin Details</span>
          </a>
		   <ul class="sidenav-second-level collapse" id="collapseAdmin">
            <li>
              <a href="adminPassChange.html">Change Password</a>
            </li>

          </ul>

        </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Over View</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5"><?php echo $rows[0];?> New Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="message.html">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
		<div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php echo $rows3[0];?>  New Items!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="item.html">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
        </div>
		<div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo $rows4[0];?> New Quotation!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Bath-ware Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
        </div>
		<div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo $rows5[0];?> New Quotation!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Tiles Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
        </div>
		<div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-user-plus"></i>
                </div>
                <div class="mr-5"><?php echo $rows2[0];?> New Customers!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="customer.html">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
        </div>
		<div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-cogs"></i>
                </div>
                <div class="mr-5">Admin!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="adminPassChange.html">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
        </div>
	  </div>
    </div>

	<!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Customer Growth Chart</div>
          <div class="card-body">
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
			<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
          </div>
		   <div class="card-footer small text-muted">Latest updates for every month</div>
        </div>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyrights &copy; 2019 All Rights Reserved by CreativeTechnizers Inc</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js1/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js1/sb-admin-datatables.min.js"></script>
    <script src="js1/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
