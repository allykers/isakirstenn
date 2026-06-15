<?php

if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>POST Result</title>

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
    background:#79a7ab;
    color:white;
    padding:25px;
    border-radius:20px;
    text-align:center;
    font-size:36px;
    font-weight:700;
    margin-bottom:30px;
}

.result{
    background:#eef6f7;
    padding:25px;
    border-radius:20px;
}

.result p{
    margin-bottom:12px;
}

.center{
    text-align:center;
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
Submitted Information
</div>

<div class="result">

<p><strong>First Name:</strong> <?= $firstname ?></p>
<p><strong>Middle Name:</strong> <?= $middlename ?></p>
<p><strong>Last Name:</strong> <?= $lastname ?></p>
<p><strong>Date of Birth:</strong> <?= $dob ?></p>
<p><strong>Address:</strong> <?= $address ?></p>

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