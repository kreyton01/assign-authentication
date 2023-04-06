<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../assets/style2.css">
<script src="../assets/script.js"></script>
</html>
<?php
session_start();

// connect to database
$conn = mysqli_connect("localhost", "root", "", "user_info");

// check if user has submitted the form
if(isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

// retrieve user from database
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

// check if user exists in the database
if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $db_password = $row['password'];

    // verify password
    if ($password == $db_password) {
        // login successful, save user session
        $_SESSION['username'] = $username;

        // redirect to index.html
        header("Location: index.html");
    } else {
        // login failed, display error message
        header('Location: index.php?error=Invalid%20username%20or%20password.%20Please%20try%20again.');
    }
} else {
    // login failed, display error message
    header('Location: index.php?error=Invalid%20username%20or%20password.%20Please%20try%20again.');
}
exit();

}
?>
