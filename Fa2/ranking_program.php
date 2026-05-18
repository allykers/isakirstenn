<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Grade Ranking Program</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #e8f5e9;
            padding: 30px;
        }

        .container{
            width: 1300px;
            min-height: 700px;
            background: white;
            border: 6px solid #2e7d32;
            border-radius: 25px;
            padding: 50px;
            box-shadow: 0px 6px 20px rgba(0,0,0,0.2);
        }

        h1{
            text-align: center;
            color: #1b5e20;
            margin-bottom: 20px;
            font-size: 50px;
        }

        .name{
            text-align: center;
            font-size: 30px;
            color: #2e7d32;
            margin-bottom: 50px;
            font-weight: bold;
        }

        /* FIRST VIEW */
        .center-layout{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 400px;
        }

        /* AFTER BUTTON CLICK */
        .main{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .left{
            width: 58%;
        }

        .left h2{
            color: #2e7d32;
            margin-bottom: 25px;
            font-size: 40px;
            text-align: center;
        }

        .buttons{
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        a{
            text-decoration: none;
        }

        .grade-btn{
            padding: 18px 30px;
            background: #43a047;
            color: white;
            border-radius: 12px;
            font-size: 24px;
            transition: 0.3s;
        }

        .grade-btn:hover{
            background: #1b5e20;
        }

        .result{
            margin-top: 50px;
            display: flex;
            gap: 50px;
            justify-content: center;
            align-items: center;
        }

        .result-box{
            width: 220px;
            height: 220px;
            border: 4px solid #2e7d32;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
        }

        .label{
            font-size: 35px;
            color: #1b5e20;
            margin-bottom: 20px;
        }

        .value{
            font-size: 65px;
            color: #1b5e20;
            font-weight: bold;
        }

        .right{
            width: 35%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .picture-box{
            width: 380px;
            height: 380px;
            border: 5px dashed #2e7d32;
            border-radius: 25px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f1f8e9;
        }

        .picture-box img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>
</head>

<body>

<?php

$name = "Allyssa Kirsten Yasona";

$grade = isset($_GET['grade']) ? $_GET['grade'] : "";
$rank = "";
$picture = "";

if($grade != ""){

    if($grade >= 93 && $grade <= 100){
        $rank = "A";
    }
    elseif($grade >= 90 && $grade <= 92){
        $rank = "A-";
    }
    elseif($grade >= 87 && $grade <= 89){
        $rank = "B+";
    }
    elseif($grade >= 83 && $grade <= 86){
        $rank = "B";
    }
    elseif($grade >= 80 && $grade <= 82){
        $rank = "B-";
    }
    elseif($grade >= 77 && $grade <= 79){
        $rank = "C+";
    }
    elseif($grade >= 73 && $grade <= 76){
        $rank = "C";
    }
    elseif($grade >= 70 && $grade <= 72){
        $rank = "C-";
    }
    elseif($grade >= 67 && $grade <= 69){
        $rank = "D+";
    }
    elseif($grade >= 63 && $grade <= 66){
        $rank = "D";
    }
    elseif($grade >= 60 && $grade <= 62){
        $rank = "D-";
    }
    else{
        $rank = "F";
    }

    if($grade >= 70){
        $picture = "happy.png";
    }
    else{
        $picture = "sad.png";
    }

}

?>

<div class="container">

    <h1>Grade Ranking Program</h1>

    <div class="name">
        Name: <?php echo $name; ?>
    </div>

    <?php if($grade == ""){ ?>



    <div class="center-layout">

        <h2 style="color:#2e7d32; margin-bottom:30px; font-size:40px;">
            Select a Grade
        </h2>

        <div class="buttons">

            <a href="?grade=95"><div class="grade-btn">95</div></a>
            <a href="?grade=91"><div class="grade-btn">91</div></a>
            <a href="?grade=88"><div class="grade-btn">88</div></a>
            <a href="?grade=84"><div class="grade-btn">84</div></a>
            <a href="?grade=79"><div class="grade-btn">79</div></a>
            <a href="?grade=74"><div class="grade-btn">74</div></a>
            <a href="?grade=68"><div class="grade-btn">68</div></a>
            <a href="?grade=61"><div class="grade-btn">61</div></a>
            <a href="?grade=50"><div class="grade-btn">50</div></a>

        </div>

    </div>

    <?php } else { ?>

    

    <div class="main">

        <div class="left">

            <h2>Select a Grade</h2>

            <div class="buttons">

                <a href="?grade=95"><div class="grade-btn">95</div></a>
                <a href="?grade=91"><div class="grade-btn">91</div></a>
                <a href="?grade=88"><div class="grade-btn">88</div></a>
                <a href="?grade=84"><div class="grade-btn">84</div></a>
                <a href="?grade=79"><div class="grade-btn">79</div></a>
                <a href="?grade=74"><div class="grade-btn">74</div></a>
                <a href="?grade=68"><div class="grade-btn">68</div></a>
                <a href="?grade=61"><div class="grade-btn">61</div></a>
                <a href="?grade=50"><div class="grade-btn">50</div></a>

            </div>

            <div class="result">

                <div class="result-box">
                    <div class="label">Rank:</div>
                    <div class="value"><?php echo $rank; ?></div>
                </div>

                <div class="result-box">
                    <div class="label">Grade:</div>
                    <div class="value"><?php echo $grade; ?></div>
                </div>

            </div>

        </div>

        <div class="right">

            <div class="picture-box">

                <?php echo "<img src='$picture'>"; ?>

            </div>

        </div>

    </div>

    <?php } ?>

</div>

</body>
</html>