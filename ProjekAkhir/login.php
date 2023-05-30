<!DOCTYPE html>
<html>
<head>
	<title>LOGIN ADMIN</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="admin.php" method="POST">
<!-- Navbar -->
<nav class="navbar">
	<a href="#" class="navbar-logo">Bea<span>Kita</span></a>

	<div class="navbar-nav">
	</div>
</nav>

	<section class="hero" id="home">

	<div class="input">
		<h1>Login</h1>
		<div class="box-input">
			<i class="fas fa-address-book"></i>
			<input type="text" name="Username" placeholder="Username">
		</div>
		<div class="box-input">
			<i class="fas fa-lock"></i>
			<input type="password" name="Password" placeholder="Password">
		</div>
		<button type="submit" name="login" class="btn-input">Login</button>

		<div class="bottom">
			<a href="index.php">Kembali</a>
		</div>
	</div>

</form>
</body>
</html>