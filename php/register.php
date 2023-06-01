<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Polar Shift Band Login</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">

	
	
</head>
<body>
	<div class="wrapper">
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark ">
			<div class="container-fluid">
				<a class="navbar-brand" href="../index.html"><img src="../img/logoW.png" href="../index.html"> </a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="../index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../index.html#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../pages/music.html">Music</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../pages/events.html">Events</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../index.html#about">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Shop</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Patreon</a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>


	</header>

	<main>
		<section class="heroL">
			<div class="wrapperLogin" id="wrapperLogin" novalidate>
				<div class="form-box register">
					<h2>Registration</h2>
					<form id="loginform" name="loginform" action="../pages/danke.html" method="post">
						<div class="input-box">
							<input type="text" name="usernameR" id="usernameR" placeholder="Username(*)">
							<label for="usernameR"></label>
							
						</div>
						<div class="input-box">
							<input type="text" name="email"  id="email" placeholder="Email(*)">
							<label for="email"></label>
							
						</div>
						<div class="input-box">
							<input type="text" name="tel" id="tel" placeholder="Tel.Number(*): 0761112233">
							<label for="tel"></label>
						</div>
						<div class="input-box">
							<input type="password" name="passwordR" id="passwordR" placeholder="Password(*)" >
							<label for="passwordR"></label>
						</div>
						<div class="input-box">
							<input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password(*)">
							<label for="confirm_password"></label>
						</div>
						<div class="remember-forgot">
							<label><input type="checkbox" name="agb" id="agb" required>I agree to the terms & conditions(*)</label>
						</div>
						<div class="remember-forgot">
							<label><input type="checkbox" name="newsletter" id="newsletter">Would you like to subscribe to our Newsletter?</label>
						</div>
						<button type="submit" class="btnL">Register</button>

						<div class="login-register">
							<p>Already have an account?<a href="login.php" class="login-link">Login</a></p>
						</div>
					</form>	
				</div>
			</div>
		</section>

		
	</main>

	<footer>
		<p>&copy; 2023 PolarShift</p>
	</footer>
</div>

<script src="../js/jquery-3.1.1.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/validate.js"></script>



</body>
</html>