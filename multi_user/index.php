<!DOCTYPE html>
<html>
<head>
	<title>Login | BANGKU POJOK</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="back_satu">
	<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan']=="gagal") {
				echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
			}
		}
	?>

	<div class="kotak_login">
		<p class="tulisan_login">CHANNEL</p>

		<form action="cek_login.php" method="post">
			<!-- <label>Username</label> -->
			<input type="text" name="username" class="form_login" placeholder="Username">

			<!-- <label>Password</label> -->
			<input type="password" name="password" class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login" value="LOGIN" name="">
			<br><br>
			<center>
				<a class="link" href=" "></a>
			</center>
		</form>
	</div>
</body>
</html>