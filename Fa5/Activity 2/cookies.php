<?php

if(isset($_POST['submit']))
{
    setcookie("firstname", $_POST['firstname'], time()+10, "/");
    setcookie("middlename", $_POST['middlename'], time()+20, "/");
    setcookie("lastname", $_POST['lastname'], time()+30, "/");

    header("Refresh:0");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Cookies Activity</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#eef6f7;
    min-height:100vh;
    padding:60px 20px;
}

.container{
    max-width:800px;
    margin:auto;
}

.card{
    background:white;
    border-radius:25px;
    padding:40px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.page-header{
    background:#dcecee;
    padding:25px;
    border-radius:20px;
    text-align:center;
    font-size:36px;
    font-weight:700;
    margin-bottom:30px;
}

.form-group{
    margin-bottom:20px;
}

input{
    width:100%;
    padding:15px;
    border:none;
    border-radius:20px;
    background:#eaf4f6;
}

.center{
    text-align:center;
}

.btn{
    background:#79a7ab;
    color:white;
    border:none;
    padding:15px 30px;
    border-radius:25px;
    cursor:pointer;
}

.result{
    margin-top:30px;
    background:#eef6f7;
    padding:20px;
    border-radius:20px;
}

.result p{
    margin-bottom:10px;
}

.note{
    color:#666;
}

.home{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#79a7ab;
    color:white;
    padding:12px 25px;
    border-radius:25px;
}

</style>

</head>

<body>

<div class="container">

<div class="card">

<div class="page-header">
Cookies Activity
</div>

<form method="post">

<div class="form-group">
<input type="text" name="firstname" placeholder="First Name" required>
</div>

<div class="form-group">
<input type="text" name="middlename" placeholder="Middle Name" required>
</div>

<div class="form-group">
<input type="text" name="lastname" placeholder="Last Name" required>
</div>

<div class="center">
<button class="btn" name="submit">
Create Cookies
</button>
</div>

</form>

<div class="result">

<h3>Cookie Values</h3>

<br>

<p>
<strong>Firstname:</strong>
<?= $_COOKIE['firstname'] ?? 'Not Available Yet'; ?>
</p>

<p>
<strong>Middlename:</strong>
<?= $_COOKIE['middlename'] ?? 'Not Available Yet'; ?>
</p>

<p>
<strong>Lastname:</strong>
<?= $_COOKIE['lastname'] ?? 'Not Available Yet'; ?>
</p>

<br>

<p class="note">
Firstname expires after 10 seconds.<br>
Middlename expires after 20 seconds.<br>
Lastname expires after 30 seconds.
</p>

</div>

<div class="center">
<a href="../index.php" class="home">
Back to Home
</a>
</div>

</div>

</div>

</body>
</html>