<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Details</title center>
  <link rel="stylesheet" type="text/css" href="../assets/style.css">
  <script src="../assets/script.js"></script>
</head>
<body>
  <div class="page-wrapper">
    <h1 style="text-align: center;">A. Student Details</h1>
    <div class="container">
      <form method="POST" action="process_form.php">
        
        <div class="form-row">
          <label for="name">Name (Legal/Official):</label>
          <input type="text" id="name" name="name" pattern="[A-Za-z\s]+" required>
        </div>
        <div class="form-row">
          <label for="matric_no">Matric No:</label>
          <input type="text" id="matric_no" name="matric_no" pattern="[0-9]+" required>
        </div>
        <div class="form-row">
          <label for="current_address">Current Address:</label>
          <textarea id="current_address" name="current_address" rows="3" required></textarea>
        </div>
        <div class="form-row">
          <label for="home_address">Home Address:</label>
          <textarea id="home_address" name="home_address" rows="3" required></textarea>
        </div>
        <div class="form-row">
          <label for="email">Email (Gmail Account):</label>
          <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@gmail\.com$" required>
        </div>
        <div class="form-row">
          <label for="mobile_phone">Mobile Phone No:</label>
          <input type="tel" id="mobile_phone" name="mobile_phone" pattern="[0-9]+" required>
        </div>
        <div class="form-row">
          <label for="home_phone">Home Phone No (Emergency):</label>
          <input type="tel" id="home_phone" name="home_phone" pattern="[0-9]+" required>
        </div>
        <div class="form-row">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
