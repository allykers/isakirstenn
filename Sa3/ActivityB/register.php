<?php

include("db/db.php");

$message = "";

$firstname = "";
$lastname = "";
$email = "";
$username = "";

if(isset($_POST['btnRegister']))
{

    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if($password != $confirmpassword)
    {
        $message = "Password and Confirm Password are not the same.";
    }
    else
    {

        $check = "SELECT * FROM users WHERE username='$username'";

        $result = mysqli_query($conn,$check);

        if(mysqli_num_rows($result) > 0)
        {

            $message = "Username already exists.";

        }
        else
        {

            $password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(firstname,lastname,email,username,password)

                    VALUES

                    ('$firstname',
                     '$lastname',
                     '$email',
                     '$username',
                     '$password')";

            if(mysqli_query($conn,$sql))
            {

                $message = "Registration Successful!";

                $firstname="";
                $lastname="";
                $email="";
                $username="";

            }
            else
            {

                $message = "Registration Failed.";

            }

        }

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

<button
type="submit"
name="btnRegister">

Register

</button>

</form>

<p class="message">

<?php echo $message; ?>

</p>

<br>

Already have an account?

<a href="login.php">

Login

</a>

</div>

</body>

</html>