<?php
session_start();

if(isset($_SESSION['username']))
{
    header("Location: home.php");
}

$message = "";

$firstname = "";
$lastname = "";
$email = "";
$username = "";
$password = "";
$confirmpassword = "";

if(isset($_POST['btnRegister']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if($password != $confirmpassword)
    {
        $message = "Password and Confirm Password are not the same.";
    }
    else
    {
        $message = "Registration Successful!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Registration</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

    <h1>Registration Form</h1>

    <form method="POST">

        <input
        type="text"
        name="firstname"
        placeholder="First Name"
        value="<?php echo $firstname; ?>"
        required>

        <input
        type="text"
        name="lastname"
        placeholder="Last Name"
        value="<?php echo $lastname; ?>"
        required>

        <input
        type="email"
        name="email"
        placeholder="Email"
        value="<?php echo $email; ?>"
        required>

        <input
        type="text"
        name="username"
        placeholder="Username"
        value="<?php echo $username; ?>"
        required>

        <input
        type="password"
        name="password"
        placeholder="Password"
        required>

        <input
        type="password"
        name="confirmpassword"
        placeholder="Confirm Password"
        required>

        <button type="submit" name="btnRegister">
            Register
        </button>

    </form>

    <p class="message">
        <?php echo $message; ?>
    </p>

<?php

if(isset($_POST['btnRegister']) && $password == $confirmpassword)
{
?>

<hr>

<h3>Submitted Information</h3>

<p><strong>First Name:</strong> <?php echo $firstname; ?></p>

<p><strong>Last Name:</strong> <?php echo $lastname; ?></p>

<p><strong>Email:</strong> <?php echo $email; ?></p>

<p><strong>Username:</strong> <?php echo $username; ?></p>

<p><strong>Password:</strong> <?php echo $password; ?></p>

<?php
}
?>

<br>

Already have an account?

<a href="login.php">Login</a>

</div>

</body>

</html>
