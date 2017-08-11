<?php 

# Start Session:
session_start();

# Database Connection:
include 'config/connection.php';


if($_POST) {
	
	$q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
	$r = mysqli_query($dbc, $q);
	
	if(mysqli_num_rows($r) == 1) {
		$_SESSION['username'] = $_POST['email'];
		header('Location: index.php');	
	}
}

?>

<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include 'template/h1.php'; ?>

</head>
	
<body>
<div id="wrap">
	<div class="container-fluid">
	<div style="margin-top:100px;margin-bottom:10px;">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<strong>Login</strong>
					</div><!-- END panel-heading -->
					
					<div class="panel-body">
						<form action="login.php" method="post" role="form">
							<div class="form-group">
							    <label for="email">Email address</label>
							    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
							 </div>
							  
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>

							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div><!-- END panel-body -->
				</div><!-- END panel -->				
			</div><!-- END col -->
		</div><!-- END row -->
	</div><!-- END Style -->
	</div><!-- END container fluid-->
</div><!-- END wrap -->		

	</div><!-- END wrap -->
<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
					<p class="copyright">Copyright &copy; 2017.<a href="login.php"> All Records</a></p>
			</div>
		</div>		
	</div>	
</div>

<script src="config/js/jquery.min.js"></script>
<script src="config/js/bootstrap.min.js"></script>
</body>
</html>
	
</body>

</html>