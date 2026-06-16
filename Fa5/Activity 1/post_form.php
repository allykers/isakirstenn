<?php

$firstname = "";
$middlename = "";
$lastname = "";
$dob = "";
$address = "";

$errors = [];

if(isset($_POST['submit']))
{
    $firstname = trim($_POST['firstname']);
    $middlename = trim($_POST['middlename']);
    $lastname = trim($_POST['lastname']);
    $dob = trim($_POST['dob']);
    $address = trim($_POST['address']);

    if(!preg_match("/^[a-zA-Z ]+$/", $firstname))
    {
        $errors['firstname'] = "First name must contain letters only.";
    }

    if(!preg_match("/^[a-zA-Z ]+$/", $middlename))
    {
        $errors['middlename'] = "Middle name must contain letters only.";
    }

    if(!preg_match("/^[a-zA-Z ]+$/", $lastname))
    {
        $errors['lastname'] = "Last name must contain letters only.";
    }

    if(!preg_match("/^\d{4}-\d{2}-\d{2}$/", $dob))
    {
        $errors['dob'] = "Date must follow YYYY-MM-DD format.";
    }

    if(!preg_match("/^[a-zA-Z0-9\s,.]+$/", $address))
    {
        $errors['address'] = "Address may contain letters, numbers, commas and periods only.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Activity</title>

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

    label{
        display:block;
        margin-bottom:8px;
    }

    input,
    textarea{
        width:100%;
        padding:15px;
        border:none;
        border-radius:20px;
        background:#eaf4f6;
    }

    textarea{
        height:120px;
        resize:none;
    }

    .error{
        color:red;
        font-size:14px;
        margin-top:5px;
    }

    .btn{
        background:#79a7ab;
        color:white;
        border:none;
        padding:15px 30px;
        border-radius:25px;
        cursor:pointer;
    }

    .center{
        text-align:center;
    }

    .result{
        margin-top:30px;
        background:#eef6f7;
        padding:20px;
        border-radius:20px;
    }

    </style>
</head>

<body>

<div class="container">
    <div class="card">
        <div class="page-header">
            Personal Information (POST)
        </div>

        <form method="post">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstname" value="<?= $firstname ?>" required>
                <?php if(isset($errors['firstname'])): ?>
                    <div class="error">
                        <?= $errors['firstname'] ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name="middlename" value="<?= $middlename ?>" required>
                <?php if(isset($errors['middlename'])): ?>
                    <div class="error">
                        <?= $errors['middlename'] ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastname" value="<?= $lastname ?>" required>
                <?php if(isset($errors['lastname'])): ?>
                    <div class="error">
                        <?= $errors['lastname'] ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>Date of Birth (YYYY-MM-DD)</label>
                <input type="text" name="dob" placeholder="2005-07-14" value="<?= $dob ?>" required>
                <?php if(isset($errors['dob'])): ?>
                    <div class="error">
                        <?= $errors['dob'] ?>
                    </div>
                <?php endif; ?>

            </div>

            <div class="form-group">
                <label>Address</label>
                <textarea name="address" required><?= $address ?></textarea>
                <?php if(isset($errors['address'])): ?>
                    <div class="error">
                        <?= $errors['address'] ?>
                    </div>
                <?php endif; ?>

            </div>

            <div class="center">
                <button type="submit" class="btn" name="submit">
                    Submit Using POST
                </button>
            </div>
        </form>

        <?php if(isset($_POST['submit']) && empty($errors)): ?>
            <div class="result">
                <h3>Submitted Information</h3>
                <p>
                    <strong>First Name:</strong>
                    <?= $firstname ?>
                </p>

                <p>
                    <strong>Middle Name:</strong>
                    <?= $middlename ?>
                </p>

                <p>
                    <strong>Last Name:</strong>
                    <?= $lastname ?>
                </p>

                <p>
                    <strong>Date of Birth:</strong>
                    <?= $dob ?>
                </p>

                <p>
                    <strong>Address:</strong>
                    <?= $address ?>
                </p>

            </div>

        <?php endif; ?>

    </div>

</div>

</body>
</html>