<?php require 'common.php';
if(isset($_SESSION['email'])){
    header('location:product.php');
}?>
<!DOCTYPE html>
<html>

<head>
	<title>LifeStyle Stores SignUp</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php include 'header.php';?>
	<div class="container panel-margin col-xs-4">
		<div class="panel panel-default panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title">SignUp</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="signup_script.php">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Name" required="true">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@ [a-z0-9.-]+\.[a-z] {2,3}$">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="true" pattern=".{6,}">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="contact" placeholder="Contact" required="true" pattern=".{10,}">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="city" placeholder="City" required="true">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="address" placeholder="Address" required="true">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="panel-footer">
				Already have an account?Click <a href="login.html">here</a> to login.
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>

</html>