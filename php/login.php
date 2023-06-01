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

<?php 
    session_start();
    if (isset($_GET['username']) && isset($_GET['password'])){
    if ($_GET['username']=="admin" && $_GET['password']=="Admin1234"){
        $_SESSION['login_user']="intern";
    }
    else {
        unset($_SESSION['login_user']);         
    }} ?>
        
<!-- logout hier einfügen -->       
    <?php if (isset($_GET["logout"])){
        unset($_SESSION['login_user']);
    } ?>


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
							<a class="nav-link" href="../pages/comingSoon.html">Shop</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Patreon</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../pages/comingSoon.html">Gallery</a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<section class="heroL">
			<?php if (!isset($_SESSION['login_user'])){?>
			<div class="wrapperLogin" id="wrapperLogin" novalidate>
				<div class="form-box login">
					
					<h2>Login</h2>
					<form id="loginform" name="loginform" action="#" method="GET">
						<div class="input-box">
							<input type="text" name="username" id="username" placeholder="Username(*)">
							<label for="username"></label>
							
						</div>
						<div class="input-box">
							<input type="password" name="password" id="password" placeholder="Password(*)">
							<label for="password"></label>
							
						</div>
						<div class="remember-forgot">
							<label><input type="checkbox">Remember me</label>
							<a href="#">Forgot Password?</a>
						</div>
						
						<button type="submit" class="btnL">Login</button>

						<div class="login-register">
							<p>Dont have an account?<a href="register.php" class="register-link">Register</a></p>
						</div>

					</form>	

				</div>
			</div>
		</section>
		<?php } else {?>
			<h2>Exclusive Content Coming Soon</h2>
			<form action="" method="GET">
	        	<input type="hidden" name="logout" value="true"/>
	        	<input type="submit" class="btnL" value="Log out"/>      
    		</form>
		

		<?php } ?>
		
		
	</main>

	<footer>
		<p>&copy; 2023 PolarShift</p>
	</footer>
</div>

<script src="../js/jquery-3.1.1.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/validate.js"></script>


<script src="../js/login.js"></script>


</body>
</html>