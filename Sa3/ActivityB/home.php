<?php

include("auth.php");

include("db/db.php");

$id = $_SESSION['id'];

$sql = "SELECT * FROM users WHERE id='$id'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>

<html>

<head>

<title>Home</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

<h1>User Profile</h1>

<hr>

<p>

<strong>First Name :</strong>

<?php echo $row['firstname']; ?>

</p>

<p>

<strong>Last Name :</strong>

<?php echo $row['lastname']; ?>

</p>

<p>

<strong>Email :</strong>

<?php echo $row['email']; ?>

</p>

<p>

<strong>Username :</strong>

<?php echo $row['username']; ?>

</p>

<br>

<a href="reset_password.php">

Reset Password

</a>

<br><br>

<a href="logout.php">

Logout

</a>

</div>

</body>

</html>