<?php

ob_start();
SESSION_START();
require 'function.php';
if (isset($_POST['Login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username'");
	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {

			$_SESSION["Login"] = $row["username"];
			echo "<script> alert('Selamat Datang Di Halaman TJAKS COFFEE');</script>";
			header("Location:index.php");
			exit;
		} else {
			echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
		}
	} 
	$error = true;
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login&regis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <h1>Login</h1>
        <form method="POST" action="">
            <input type="text" placeholder="Username" id="username" name="username" autocomplete="on" required> 
            <input type="password" placeholder="Username" id="password" name="password" autocomplete="off">
			<button type="submit" name="Login">Login Now</button>
		
			<div class="member">
				Not member <a href="Register.php">Register now</a>
			</div>
		</form>
    </div>
</body>
</html>