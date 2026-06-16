<?php

if(isset($_POST['submit']))
{
    setcookie("firstname", $_POST['firstname'], time() + 10, "/");
    setcookie("middlename", $_POST['middlename'], time() + 20, "/");
    setcookie("lastname", $_POST['lastname'], time() + 30, "/");

    header("Location: cookies.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    .btn:hover{
        background:#668f93;
    }

    .result{
        margin-top:30px;
        background:#eef6f7;
        padding:20px;
        border-radius:20px;
    }

    .result h3{
        margin-bottom:15px;
    }

    .result p{
        margin-bottom:10px;
    }

    .note{
        margin-top:15px;
        color:#666;
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
                <button type="submit" class="btn" name="submit">
                    Create Cookies
                </button>
            </div>
        </form>

        <div class="result">
            <h3>Cookie Values</h3>
            <p>
                <strong>First Name:</strong>
                <span id="firstname">
                    <?= $_COOKIE['firstname'] ?? 'Not Available'; ?>
                </span>
            </p>

            <p>
                <strong>Middle Name:</strong>
                <span id="middlename">
                    <?= $_COOKIE['middlename'] ?? 'Not Available'; ?>
                </span>
            </p>

            <p>
                <strong>Last Name:</strong>
                <span id="lastname">
                    <?= $_COOKIE['lastname'] ?? 'Not Available'; ?>
                </span>
            </p>
        </div>

    </div>

</div>

<script>

const firstName = document.getElementById("firstname");
const middleName = document.getElementById("middlename");
const lastName = document.getElementById("lastname");

setTimeout(function()
{
    if(firstName)
    {
        firstName.textContent = "Not Available";
    }
}, 10000);

setTimeout(function()
{
    if(middleName)
    {
        middleName.textContent = "Not Available";
    }
}, 20000);

setTimeout(function()
{
    if(lastName)
    {
        lastName.textContent = "Not Available";
    }
}, 30000);

</script>
</body>
</html>