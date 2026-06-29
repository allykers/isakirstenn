<?php
session_start();

if(isset($_SESSION['username']))
{
    header("Location: home.php");
}

$message = "";

$cookieUsername = "";
$cookiePassword = "";

if(isset($_COOKIE['username']))
{
    $cookieUsername = $_COOKIE['username'];
}

if(isset($_COOKIE['password']))
{
    $cookiePassword = $_COOKIE['password'];
}

// Static Username and Password
$correctUsername = "admin";
$correctPassword = "12345";

if(isset($_POST['btnLogin']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $correctUsername && $password == $correctPassword)
    {
        $_SESSION['username'] = $username;

        if(isset($_POST['remember']))
        {
            setcookie("username", $username, time() + 86400, "/");
            setcookie("password", $password, time() + 86400, "/");
        }
        else
        {
            setcookie("username", "", time() - 3600, "/");
            setcookie("password", "", time() - 3600, "/");
        }

        header("Location: home.php");
    }
    else
    {
        $message = "Invalid Username or Password.";
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

    <h1>Login Form</h1>

    <form method="POST">

        <input
        type="text"
        name="username"
        placeholder="Username"
        value="<?php echo $cookieUsername; ?>"
        required>

        <input
        type="password"
        name="password"
        placeholder="Password"
        value="<?php echo $cookiePassword; ?>"
        required>

        <label>

            <input
            type="checkbox"
            name="remember">

            Remember Me

        </label>

        <br><br>

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