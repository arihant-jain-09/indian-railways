<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body {
		  background-image: url('https://www.irctc.co.in/nget/swach_banner2.391192cab480269195cd.jpg');
		  background-repeat: no-repeat;
		  background-size: cover;

		}
		button .btn{
			padding: 10px;
			margin: 10px auto;
			font-size: 15px;
			border: none;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarText">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="index.php">Book Tickets<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="train_stas.php">Train Schedule</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="pnr.php">PNR Enquiry</a>
			      </li>
			    </ul>
			    <span class="navbar-text" class="nav-item">
			      <a class="nav-link" href="register.php">Register</a>
			    </span>
			  </div>
			</nav>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn" style="color: white; background: #5F9EA0;">  Login  </button>
		</div>
		<p>
			Not yet a member?<a href="register.php">Sign up</a>
		</p>
	</form>
		<?php include('footer.php'); ?>

</body>
</html>