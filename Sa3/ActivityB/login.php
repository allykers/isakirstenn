<?php

session_start();

include("db/db.php");

if(isset($_SESSION['username']))
{
    header("Location: home.php");
    exit();
}

$message = "";

if(isset($_POST['btnLogin']))
{

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1)
    {

        $row = mysqli_fetch_assoc($result);

        if(password_verify($password,$row['password']))
        {

            $_SESSION['id'] = $row['id'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['username'] = $row['username'];

            header("Location: home.php");
            exit();

        }
        else
        {
            $message = "Incorrect Password.";
        }

    }
    else
    {
        $message = "Username does not exist.";
    }

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Login</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

<h1>Login</h1>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button
type="submit"
name="btnLogin">

Login

</button>

</form>

<p class="message">

<?php echo $message; ?>

</p>

<br>

Don't have an account?

<a href="register.php">

Register

</a>

</div>

</body>

</html>