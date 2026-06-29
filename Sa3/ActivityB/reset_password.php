<?php

include("auth.php");
include("db/db.php");

$message = "";

$id = $_SESSION['id'];

if(isset($_POST['btnReset']))
{

    $currentpassword = $_POST['currentpassword'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    $sql = "SELECT * FROM users WHERE id='$id'";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);

    if(!password_verify($currentpassword,$row['password']))
    {

        $message = "Current password is not the same with the old password.";

    }
    else
    {

        if($newpassword != $confirmpassword)
        {

            $message = "New password and Re-Enter new password should be the same.";

        }
        else
        {

            $newpassword = password_hash($newpassword,PASSWORD_DEFAULT);

            $update = "UPDATE users
                       SET password='$newpassword'
                       WHERE id='$id'";

            if(mysqli_query($conn,$update))
            {

                $message = "Password Successfully Updated.";

            }
            else
            {

                $message = "Unable to update password.";

            }

        }

    }

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Reset Password</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

<h1>Reset Password</h1>

<form method="POST">

<input
type="password"
name="currentpassword"
placeholder="Current Password"
required>

<input
type="password"
name="newpassword"
placeholder="New Password"
required>

<input
type="password"
name="confirmpassword"
placeholder="Re-enter New Password"
required>

<button
type="submit"
name="btnReset">

Reset Password

</button>

</form>

<p class="message">

<?php echo $message; ?>

</p>

<br>

<a href="home.php">

Back to Home

</a>

</div>

</body>

</html>