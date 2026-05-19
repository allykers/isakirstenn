<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background-color: #f5ebe0;
        }

        table{
            border-collapse: collapse;
            margin-top: 30px;
            background-color: white;
        }

        td{
            border: 1px solid #7f5539;
            padding: 10px;
            text-align: center;
        }

        .title{
            background-color: #7f5539;
            color: white;
            font-size: 25px;
            font-weight: bold;
        }

        .header{
            background-color: #dddddd;
            font-weight: bold;
        }

    </style>

</head>

<body>

    <?php

        $names = array("allyssa yasona", "john sazon", "joy barcoma", "angela cruz", "kevin ramos", 
        "samantha coronel", "joshua garcia", "patricia reyes", "isabela santos", "nicole flores",
        "daniel rojas", "glenn kim", "nika dela cruz", "kimberly ferrer", "nathan perez", "sophia clidoro",
        "jerome francisco", "vanessa ong", "brian lopez", "catherine yu");
    ?>

<table align="center">

    <tr>
        <td colspan="6" class="title">
            LIST OF NAMES
        </td>
    </tr>

    <tr class="header">
        <td>NAME</td>
        <td>NUMBER OF CHARACTERS</td>
        <td>UPPERCASE FIRST LETTER</td>
        <td>REPLACE VOWELS WITH @</td>
        <td>CHECK POSITION OF LETTER a</td>
        <td>REVERSE NAME</td>
    </tr>

    <?php
        foreach($names as $name){
    ?>

    <tr>
        <td>
            <?php echo $name; ?>
        </td>

        <td>
            <?php echo strlen($name); ?>
        </td>

        <td>
            <?php echo ucfirst($name); ?>
        </td>

        <td>
            <?php
            echo str_replace(
                str_split("aeiou"),
                "@",
                $name
            );
            ?>
        </td>

        <td>
            <?php
                if(strpos($name, "a") !== false){
                    echo strpos($name, "a");
                }

                else{
                echo "'a' does not exist";
                }
            ?>
        </td>

        <td>
            <?php echo strrev($name); ?>
        </td>

    </tr>

    <?php
        }
    ?>

</table>

</body>
</html>