<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Session Result</title>

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

.title{
    text-align:center;
    margin-bottom:20px;
}

.color-box{
    background:#eaf4f6;
    padding:18px;
    border-radius:20px;
    margin-bottom:12px;
    text-align:center;
    font-size:18px;
}

.center{
    text-align:center;
}

.back-btn,
.home-btn{
    display:inline-block;
    text-decoration:none;
    background:#79a7ab;
    color:white;
    padding:12px 25px;
    border-radius:25px;
    margin:10px;
}

</style>

</head>

<body>

<div class="container">

<div class="card">

<div class="page-header">
Session Result
</div>

<h3 class="title">
My Favorite Colors
</h3>

<?php

if(isset($_SESSION['colors']))
{
    foreach($_SESSION['colors'] as $color)
    {
        echo "<div class='color-box'>";
        echo $color;
        echo "</div>";
    }
}
else
{
    echo "<p style='text-align:center;'>No session data found.</p>";
}

?>

<div class="center">

<a href="favorite_color.php" class="back-btn">
Back
</a>

<a href="../index.php" class="home-btn">
Home
</a>

</div>

</div>

</div>

</body>
</html>