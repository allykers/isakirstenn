<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Two Digit Decimal Combination</title>

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

            /* CENTER CONTENT */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content{
            width: 100%;
        }

        h1{
            text-align: center;
            color: #1b5e20;
            margin-bottom: 40px;
            font-size: 50px;
        }

        .output-box{
            width: 90%;
            margin: auto;
            border: 5px dashed #2e7d32;
            border-radius: 20px;
            padding: 35px;
            background: #f1f8e9;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .label{
            font-size: 35px;
            color: #1b5e20;
            margin-bottom: 25px;
            text-align: center;
            font-weight: bold;
        }

        .numbers{
            font-size: 28px;
            color: #2e7d32;
            line-height: 2;
            text-align: center;
            font-weight: bold;
        }

    </style>
</head>

<body>

<div class="container">

    <div class="content">
        <h1>Two Digit Decimal Combination</h1>
        <div class="output-box">

            <div class="label">
                OUTPUT OF LOOPING
            </div>

            <div class="numbers">

                <?php

                for($number = 0; $number <= 99; $number++){

                    if($number < 10){
                        echo "0" . $number . ", ";
                    }
                    else{
                        echo $number . ", ";
                    }
                }
                ?>
            </div>
        </div>
    </div>

</div>

</body>
</html>