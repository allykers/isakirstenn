<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2: Array Operations</title>

    <style>

        body{
            min-height: 69vh;
            background-color: #e8f5e9;
            font-family: Arial, sans-serif;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        table{
            border: 3px solid #2e7d32;
            width: 770px;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
        }

        th{
            background-color: #66bb6a;
            color: white;
            padding: 15px;
            font-size: 20px;
        }

        td{
            text-align: center;
            font-weight: bold;
            border: 2px solid #c8e6c9;
            padding: 15px;
            font-size: 18px;
        }

    </style>

</head>

<body>

<?php

$num = array(1,2,3,4,5,6,7,8,9,10);
$sum = $num[0];
$diff = $num[0];
$prod = $num[0];
$quo = $num[0];

for ($i = 1; $i < 10; $i++) {
    $sum = $sum + $num[$i];
    $diff = $diff - $num[$i];
    $prod = $prod * $num[$i];
    $quo = $quo / $num[$i];
}

?>

<table>

    <tr>
        <th colspan="2">
            Array List:
            <?php foreach($num as $number){ ?>
                <?php echo $number." "; ?>
            <?php } ?>
        </th>
    </tr>

    <tr>
        <td>Addition</td>
        <td><?php echo $sum; ?></td>
    </tr>

    <tr>
        <td>Subtraction</td>
        <td><?php echo $diff; ?></td>
    </tr>

    <tr>
        <td>Multiplication</td>
        <td><?php echo $prod; ?></td>
    </tr>

    <tr>
        <td>Division</td>
        <td><?php echo $quo; ?></td>
    </tr>

</table>

</body>
</html>