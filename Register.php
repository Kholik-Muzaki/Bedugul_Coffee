<?php
ob_start();
	require 'function.php';
	if(isset($_POST["Register"])) {
		if(Register($_POST) > 0) {
			print "<script> alert('Kamu Telah mengregistrasi akunmu!')</script>";
			
			header("Location:Login.php");
		} 
			else {
			print mysqli_error($koneksi);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/login&regis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <h1>Sign UP</h1>
        <form method="POST" action="">
            <input type="text" id="username" name="username" autocomplete="on" placeholder="Username" required>
            <input type="password" id="password" name="password" autocomplete="off" placeholder="Password">
            <input type="password" id="Password2" name="password2" autocomplete="off" placeholder="Confirm Password">
			<button type="submit" name="Register" >Sign Up</button>
        
			<div class="terms">
				<input type="checkbox" id="checkbox">
				<label for="checkbox">I agree<a href="#">Term & conditions</a></label>
			</div>
		
			<div class="member">
				Already member <a href="Login.php">Login Now</a>
			</div>
		</form>
	</div>
</body>
</html>