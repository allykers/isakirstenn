<?php
include("auth.php");
?>

<!DOCTYPE html>
<html>

<head>

    <title>Home</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

    <h1>Home Page</h1>

    <h2>

        Welcome,
        <?php echo $_SESSION['username']; ?>

    </h2>

    <br>

    <p>

        You have successfully logged in.

    </p>

    <br>

    <a href="logout.php">

        Logout

    </a>

</div>

</body>

</html>