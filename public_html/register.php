<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
     <link rel="stylesheet" type="text/css" href="../assets/style2.css">
	 <script src="../app/script.js"></script>
</head>
<body>
	<h2>Register</h2>
  <form action="register.php" method="post">

  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"  pattern="[a-z0-9]+" required>
	<span id="username-message" class="text-danger"></span>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" minlength="8" required>
    <span id="password-message" class="text-danger"></span>
  </div>
  <input type="submit" class="btn btn-primary"></button>
	<p>Already have an account? <a href="index.php">Login here</a>.</p>
	</form>

</body>
</html>




<?php
session_start();
// connect to database
require_once('../app/config.php');

// connect to the database
$conn = mysqli_connect($database_host, $database_user, $database_password, $database_name);


// check if user has submitted the form
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username already exists in the database
    $sql_check = "SELECT * FROM users WHERE username='$username'";
    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) > 0) {
        // Show error message and redirect to registration page
        echo "<script>showError('Error: Username already exists. Please choose a different username.');</script>";


		
    } elseif (strlen($password) < 8) {
        // Show error message and redirect to registration page
        echo "<script>showError('Error: Password must be at least 8 characters long. Please try again.');</script>";
    } elseif (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
        // Show error message and redirect to registration page
        echo "<script>showError('Error: Username must contain only letters and numbers. Please try again.');</script>";
    } else {
        // Insert the username and password into the database
        $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Registration successful, display success message and redirect to login page
            echo "<script>alert('User registration successful! Please login.');</script>";
            header("Location: ../public_html/index.php?success=User registration successful! Please login.");
            exit();
        } else {
            // Show error message and redirect to registration page
            echo "<script>showError('Error: Could not register user. Please try again.');</script>";
        }
    }
}
?>