<!DOCTYPE html>
<html>
<head>
	<title>User Authentication</title>
	<link rel="stylesheet" type="text/css" href="../assets/style2.css">
	<script src="../app/script.js"></script>
</head>
<body>
	<h2>Login</h2>
	<form action="login.php" method="POST">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" value="Login">
		<p>Don't have an account? <a href="register.php">Register here</a>.</p>
	</form>

	
</body>
</html>
