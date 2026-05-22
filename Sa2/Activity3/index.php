<!DOCTYPE html>
<html>
<head>
    <title>Student Resume</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

<?php require("header.php"); ?>

<div class="main-content">
    <div class="left">

        <?php include("skills.php"); ?>
        <?php include("affiliation.php"); ?>

    </div>

    <div class="right">

        <?php include("objective.php"); ?>
        <?php include("personal.php"); ?>
        <?php include("education.php"); ?>
        <?php include("experience.php"); ?>

    </div>

</div>

<?php require("footer.php"); ?>

</div>

</body>
</html>

