<?php 
session_start();
include_once 'koneksi.php';
if (!isset($_SESSION['log'])) {
} else {
  header('location:index.php');
}

if (isset($_POST['login'])) {
  $user = mysqli_real_escape_string($koneksi, $_POST['username']);
  $pass = mysqli_real_escape_string($koneksi, $_POST['password']);
  $queryuser = mysqli_query($koneksi, "SELECT * FROM login where username='$user'");
  if (password_verify($pass, $cariuser['password'])) {
    $_SESSION['userid'] = $cariuser['id'];
    $_SESSION['username'] = $cariuser['username'];
    $_SESSION['log'] = 'login';

	if ($cariuser) {
	echo '<script>alert("Anda Berhasil Login Sebagai' . $cariuser ['username'] .'");windows.location="index.php"</script?>';
  } else {
	echo '<script>alert("Data yang anda masukan salah!.");history.go(-1);</script?>';
  }
} else{
  echo '<script>alert("Data yang anda masukan salah!.");history.go(-1);</script?>';
	}
};
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RIZKY | LOGIN </title>

	<!--=========css=========== -->	
	<link rel="icon" href="image/1.png">
	<link rel="stylesheet" type="text/css" href="form_login/assets/index.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

	<!-- ==========js============ -->
 	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</head>
<body class="animate__animated animate__fadeIn animate__delay-0s animate__fast" style=" background-color: black">
	<img class="wave" src="../images/ALMET.png" style="object-fit: contain">
	<div class="container">
		<div class="login-container">
			<form action="index.php">
				<img class="logo "src="../images/ALMET.png" style="border-radius: 30px">
				<h2 style="font-family: hanson">M.RIZKY HERNANDA</h2>
				<div class="input-div">
					<div class="i">
						<ion-icon name="contact"></ion-icon>
					</div>
					<div>
						<h5>Username</h5>
						<input class="input" type="text" name="username" autofocus>
					</div>
				</div>
				<div class="input-div">
					<div class="i">
						<ion-icon name="lock"></ion-icon>
					</div>
					<div>
						<h5>Password</h5>
						<input class="input" type="password" name="password" id="myInput">
							<span class="show-hide" onclick="myFunction()">
								<ion-icon id="show" name="eye"></ion-icon>
								<ion-icon id="hide"name="eye-off"></ion-icon>								
							</span>			
					</div>
				</div>
					<input type="submit" class="btn" name="login" value="Login">
			</form>
		</div>
	</div>
</body>

	<script type="text/javascript" src="form_login/js/main.js"></script>

</html>