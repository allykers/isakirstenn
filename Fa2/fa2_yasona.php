<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Conversion</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px auto;
    }

    h2 {
        font-family: Arial, Helvetica, sans-serif;
        color: blue;
    }
    th, td {
        border: 1px solid #000;
        padding: 8px;
        font-family: Arial, Helvetica, sans-serif;
    }
    
    th {
        background-color: #ffde4b;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
    }

    td {
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;
    }

    .container {
        max-width: 800px;
        margin: 2rem auto;
        background: #ffffff;
        padding: 2rem;
    }
</style>

<body>
    <?php
    $metric1 = [ 
        ["1 centimetre", "=", "10 millimetres", "1 cm", "=", "10 mm"],
        ["1 decimetre", "=", "10 centimetre", "1 dm", "=", "10 cm"],
        ["1 metre", "=", "100 centimetres", "1 m", "=", "100 cm"],
        ["1 kilometre", "=", "1000 metres", "1 km", "=", "1000 m"]
    ];

    $imperial1 = [
        ["1 foot", "=", "12 inches", "1 ft", "=", "12 in"],
        ["1 yard", "=", "3 feet", "1 yd", "=", "3 ft"],
        ["1 chain", "=", "22 yards", "1 ch", "=", "22 yd"],
        ["1 furlong", "=", "220 yards (or 10 chains)", "1 fur", "=", "220 yd (or 10 ch)"],
        ["1 mile", "=", "1760 yards (or 8 furlongs)", "1 mi", "=", "1760 yd (or 8 fur)"]
    ];

    $metric2 = [
        ["1 millimetre", "=", "0.03937 inches", "1 mm", "=", "0.03937 in"],
        ["1 centimetre", "=", "0.39370 inches", "1 cm", "=", "0.39370 in"],
        ["1 metre", "=", "39.37008 inches", "1 m", "=", "39.37008 in"],
        ["1 metre", "=", "3.28084 feet", "1 m", "=", "3.28084 ft"],
        ["1 metre", "=", "1.09361 yards", "1 m", "=", "1.09361 yd"],
        ["1 kilometre", "=", "1093.6133 yards", "1 km", "=", "1093.6133 yd"],
        ["1 kilometre", "=", "0.62137 miles", "1 km", "=", "0.62137 mi"]
    ];  

    $imperial2 = [
        ["1 inch", "=", "2.54 centimetres", "1 in", "=", "2.54 cm"],
        ["1 foot", "=", "30.48 centimetres", "1 ft", "=", "30.48 cm"],
        ["1 yard", "=", "91.44 centimetres", "1 yd", "=", "91.44 cm"],
        ["1 yard", "=", "0.9144 metres", "1 yd", "=", "0.9144 m"],
        ["1 mile", "=", "1609.344 metres", "1 mi", "=", "1609.344 m"],
        ["1 mile", "=", "1.609344 kilometres", "1 mi", "=", "1.609344 km"]
    ];

    ?>

    <div class ="container">
    <h2>Measure Conversion Chart - Lengths (UK)</h2>
    <p>Name: Yasona, Allyssa Kirsten </p>
    <table>
        <tr>
            <th colspan="6">METRIC CONVERSIONS</th>
        </tr>
        <?php foreach($metric1 as $row): ?>
        <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <table>
        <tr>
            <th colspan="6">IMPERIAL CONVERSIONS</th>
        </tr>
        <?php foreach($imperial1 as $row1): ?>
        <tr>
            <td><?php echo $row1[0]; ?></td>
            <td><?php echo $row1[1]; ?></td>
            <td><?php echo $row1[2]; ?></td>
            <td><?php echo $row1[3]; ?></td>
            <td><?php echo $row1[4]; ?></td>
            <td><?php echo $row1[5]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
            

    <table>
        <tr>
            <th colspan="6">METRIC -> IMPERIAL CONVERSIONS</th>
        </tr>
        <?php foreach($metric2 as $row2): ?>
        <tr>
            <td><?php echo $row2[0]; ?></td>
            <td><?php echo $row2[1]; ?></td>
            <td><?php echo $row2[2]; ?></td>
            <td><?php echo $row2[3]; ?></td>
            <td><?php echo $row2[4]; ?></td>
            <td><?php echo $row2[5]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <table>
        <tr>
            <th colspan="6">IMPERIAL -> METRIC CONVERSIONS</th>
        </tr>
        <?php foreach($imperial2 as $row3): ?>      
        <tr>
            <td><?php echo $row3[0]; ?></td>
            <td><?php echo $row3[1]; ?></td>
            <td><?php echo $row3[2]; ?></td>
            <td><?php echo $row3[3]; ?></td>
            <td><?php echo $row3[4]; ?></td>
            <td><?php echo $row3[5]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>

</body>
</html>
            