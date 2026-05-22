<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summative 2: Activity 2</title>

    <style>

        body{
        font-family: Arial, sans-serif;
        background-color: #f5e6d3;
        margin: 0;
        padding: 0;
    }

    h1{
        text-align: center;
        color: #5c4033;
        margin-top: 25px;
        font-size: 40px;
    }

    table{
        width: 90%;
        margin: 30px auto;
        border-collapse: collapse;
        background-color: #fff8f0;
    }

    th, td{
        border: 2px solid #5c4033;
        padding: 15px;
        text-align: center;
        font-size: 18px;
    }

    th{
        background-color: #5c4033;
        color: white;
        font-size: 20px;
    }

    tr{
        background-color: #fff8f0;
    }

    tr:hover{
        background-color: #d9b38c;
        transition: 0.3s;
    }

    </style>

</head>

<body>

    <?php
        function volumeCube($s) {
            return pow($s, 3);
        }
        function volumeRectangularPrism($l, $w, $h) {
            return $l * $w * $h;
        }
        function volumeCylinder($r, $h) {
            return pi() * pow($r, 2) * $h;
        }
        function volumeCone($r, $h) {
            return (1/3) * pi() * pow($r, 2) * $h;
        }
        function volumeSphere($r) {
            return (4/3) * pi() * pow($r, 3);
        }

        $values = array(
            "Cube" => array(
            "s" => 5,
            "volume" => volumeCube(5)
            ),

            "Right Rectangular Prism" => array(
            "l" => 3,
            "w" => 4,
            "h" => 5,
            "volume" => volumeRectangularPrism(3, 4, 5)
            ),

            "Cylinder" => array(
            "r" => 2,
            "h" => 7,
            "volume" => volumeCylinder(2, 7)
            ),

            "Cone" => array(
            "r" => 3,
            "h" => 5,
            "volume" => volumeCone(3, 5)
            ),

            "Sphere" => array(
            "r" => 4,
            "volume" => volumeSphere(4)
            )

        );

        ?>

    <h1>Volume of Shapes</h1>

    <table>

        <tr>
            <th>Shape</th>
            <th>Values</th>
            <th>Formula</th>
            <th>Answer</th>
        </tr>

    <?php
        foreach ($values as $shape => $value){
    ?>

        <tr>
            <td>
                <?php echo $shape; ?>
            </td>
        <td>
            <?php
            foreach ($value as $key => $val){
                if($key != "volume"){
                    echo $key . " = " . $val . "<br>";
                }
            }
            ?>
        </td>

        <td>
            <?php
            switch ($shape){

                case "Cube":
                    echo "V = s³";
                    break;

                case "Right Rectangular Prism":
                    echo "V = lwh";
                    break;

                case "Cylinder":
                    echo "V = πr²h";
                    break;

                case "Cone":
                    echo "V = πr²h / 3";
                    break;

                case "Sphere":
                    echo "V = 4/3 πr³";
                    break;
            }
            ?>
        </td>

        <td>
            <?php echo round($value["volume"], 2); ?>
        </td>

    </tr>

    <?php
    }
    ?>

</table>

</body>
</html>