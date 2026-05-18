<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3: Parameter Value</title>

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
        $a = 14;
        $b = 4;
        $c = 2;

        function getSum(){
            global $a, $b, $c;
            $sum = $a + $b + $c;
            return $sum;
}

        function getDiff(){
            global $a, $b, $c;
            $diff = $a - $b - $c;
            return $diff;
}

        function getProd(){
            global $a, $b, $c;
            $prod = $a * $b * $c;
            return $prod;
}

        function getQuo(){
            global $a, $b, $c;
            $quo = $a / $b / $c;
            return $quo;
}

    ?>

<table>

    <tr>
        <th colspan="2">
            My Parameter Values:
            <?php echo $a.", ".$b.", ".$c; ?>
        </th>
    </tr>

    <tr>
        <td>Addition</td>
        <td><?php echo getSum(); ?></td>
    </tr>

    <tr>
        <td>Subtraction</td>
        <td><?php echo getDiff(); ?></td>
    </tr>

    <tr>
        <td>Multiplication</td>
        <td><?php echo getProd(); ?></td>
    </tr>

    <tr>
        <td>Division</td>
        <td><?php echo getQuo(); ?></td>
    </tr>

</table>

</body>
</html>