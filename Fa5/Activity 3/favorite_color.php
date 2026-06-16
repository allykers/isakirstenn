<?php

session_start();

if(isset($_POST['submit']))
{
    $_SESSION['colors'] = [

        $_POST['color1'],
        $_POST['color2'],
        $_POST['color3'],
        $_POST['color4'],
        $_POST['color5']

    ];

    header("Location: result_colors.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Colors</title>

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
    </style>

</head>

<body>

<div class="container">

    <div class="card">

        <div class="page-header">
            My 5 Favorite Colors
        </div>

        <form method="post">

            <div class="form-group">
                <input type="text" name="color1" placeholder="Favorite Color 1" required>
            </div>

            <div class="form-group">
                <input type="text" name="color2" placeholder="Favorite Color 2" required>
            </div>

            <div class="form-group">
                <input type="text" name="color3" placeholder="Favorite Color 3" required>
            </div>

            <div class="form-group">
                <input type="text" name="color4" placeholder="Favorite Color 4" required>
            </div>

            <div class="form-group">
                <input type="text" name="color5" placeholder="Favorite Color 5" required>
            </div>

            <div class="center">
                <button class="btn" name="submit">
                    Send Colors
                </button>
            </div>

        </form>
    </div>

</div>

</body>
</html>