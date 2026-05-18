<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Length Conversion Page</title>

<style>
    body{
        font-family: Arial, sans-serif;
        background:#e8f5e9;
    }

    .container{
        width:900px;
        margin:20px auto;
        background:white;
        border:2px solid #999;
        padding:20px;
    }

    h1{
        text-align:center;
        color:#5d7fa3;
        font-size:32px;
        margin-bottom:20px;
    }

    .top-info{
        display:flex;
        justify-content:space-between;
        margin-bottom:10px;
        font-size:14px;
        color:#555;
    }

    .info-left,
    .info-center{
        width:45%;
    }

    .header{
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:20px;
    }

    .top-image{
        width:60px;
        border:1px solid #999;
        padding:5px;
        background:white;
    }

    table{
        width:100%;
        border-collapse:collapse;
        margin-bottom:25px;
    }

    th{
        background:yellow;
        border:1px solid #999;
        padding:10px;
        font-size:20px;
    }

    td{
        border:1px solid #999;
        padding:8px;
        font-size:18px;
    }

    .center{
        text-align:center;
    }

    .footer{
        text-align:center;
        margin-top:20px;
        font-size:14px;
        color:#666;
    }
</style>
</head>

<body>

    <div class="container">
        <div class="top-info">
            <div class="info-left">
                <p>Name: Allyssa Yasona            </p>
            </div>

        <div class="info-center">
            <p>Date                  </p>
        </div>
    </div>

    <div class="header">
        <h1>MEASURE CONVERSION CHART – LENGTHS (UK)</h1>
        <img src="frog.jpg" alt="pic" class="top-image">

    </div>


    <table>
        <tr>
            <th colspan="6">METRIC CONVERSIONS</th>
        </tr>

        <tr>
            <td>1 centimetre</td>
            <td class="center">=</td>
            <td>
                <?php 
                    $cm = 1;
                    $mm = $cm * 10; 
                    echo $mm . " millimetres";
                ?>
            </td>
            <td>1 cm</td>
            <td>=</td> 
            <td>10 mm</td>
        </tr>

        <tr>
            <td>1 decimetre</td>
            <td class="center">=</td>
            <td>
                <?php
                    $dm = 1;
                    $cm2 = $dm * 10;
                    echo $cm2 . " centimetres";
                ?>
            </td>
            <td>1 dm</td>
            <td>=</td> 
            <td>10 cm</td>
        </tr>

        <tr>
            <td>1 metre</td>
            <td class="center">=</td>
            <td>
                <?php
                    $m = 1;
                    $cm3 = $m * 100;
                    echo $cm3 . " centimetres";
                ?>
            </td>
            <td>1 m</td>
            <td>=</td>
            <td>100 cm</td>
        </tr>

        <tr>
            <td>1 kilometre</td>
            <td class="center">=</td>
            <td>
                <?php
                    $km = 1;
                    $m2 = $km * 1000;
                    echo $m2 . " metres";
                ?>
            </td>
            <td>1 km</td>
            <td>=</td>
            <td>1000 m</td>
        </tr>
    </table>

    <table>
        <tr>
            <th colspan="6">IMPERIAL CONVERSIONS</th>
        </tr>

        <tr>
            <td>1 foot</td>
            <td class="center">=</td>
            <td>
                <?php
                    $foot = 1;
                    $inch = $foot * 12;
                    echo $inch . " inches";
                ?>
            </td>
            <td>1 ft</td>
            <td>=</td>
            <td>12 inch</td>
        </tr>

        <tr>
            <td>1 yard</td>
            <td class="center">=</td>
            <td>
                <?php
                    $yard = 1;
                    $feet = $yard * 3;
                    echo $feet . " feet";
                ?>
            </td>
            <td>1 yd</td>
            <td>=</td>
            <td>3 ft</td>
        </tr>

        <tr>
            <td>1 chain</td>
            <td class="center">=</td>
            <td>
                <?php
                    $chain = 1;
                    $yards = $chain * 22;
                    echo $yards . " yards";
                ?>
            </td>
            <td>1 ch</td>
            <td>=</td>
            <td>22 yd</td>
        </tr>

        <tr>
            <td>1 furlong</td>
            <td class="center">=</td>
            <td>
                <?php
                    $furlong = 1;
                    $yrds= $furlong * 220;
                    echo $yrds . " yards (or 10 chains";
                ?>
            </td>
            <td>1 fur</td>
            <td>=</td>
            <td>220 yd (or 10 ch)</td>
        </tr>

        <tr>
            <td>1 mile</td>
            <td class="center">=</td>
            <td>
                <?php
                    $mile = 1;
                    $yards2 = $mile * 1760;
                    echo $yards2 . " yards (or 8 furlongs)";
                ?>
            </td>
            <td>1 mi</td>
            <td>=</td>
            <td>1760 yd (or 8 fur)</td>
        </tr>
    </table>


    <table>
        <tr>
            <th colspan="6">METRIC -> IMPERIAL CONVERSIONS</th>
        </tr>

        <tr>
            <td>1 millimetre</td>
            <td class="center">=</td>
            <td>
                <?php
                    $mm2 = 1;
                    $inch2 = $mm2 / 25.4;
                    echo round($inch2,5) . " inches";
                ?>
            </td>
            <td>1 mm</td>
            <td>=</td>
            <td>0.03937 inch</td>
        </tr>

        <tr>
            <td>1 centimetre</td>
            <td class="center">=</td>
            <td>
                <?php
                    $cm4 = 1;
                    $inch3 = $cm4 / 2.54;
                    echo round($inch3,5) . "0 inches";
                ?>
            </td>
            <td>1 cm</td>
            <td>=</td>
            <td>0.39370 in</td>
        </tr>

        <tr>
            <td>1 metre</td>
            <td class="center">=</td>
            <td>
                <?php
                    $meter = 1;
                    $inch4 = $meter * 39.37008;
                    echo round ($inch4,5) . " inches";
                ?>
            </td>
            <td>1 m</td>
            <td>=</td>
            <td>39.37008 inch</td>
        </tr>

        <tr>
            <td>1 metre</td>
            <td class="center">=</td>
            <td>
                <?php
                    $meter2 = 1;
                    $feet2 = $meter2 * 3.28084;
                    echo round ($feet2,5) . " feet";
                ?>
            </td>
            <td>1 m</td>
            <td>=</td>
            <td>3.28084 ft</td>
        </tr>

        <tr>
            <td>1 metre</td>
            <td class="center">=</td>
            <td>
                <?php
                    $meter3 = 1;
                    $yards3 = $meter3 * 1.09361;
                    echo $yards3 . " yards";
                ?>
            </td>
            <td>1 m</td>
            <td>=</td>
            <td>1.09361 yd</td>
        </tr>

        <tr>
            <td>1 kilometre</td>
            <td class="center">=</td>
            <td>
                <?php
                    $kmeter = 1;
                    $yards4 = $kmeter * 1093.6133;
                    echo round ($yards4,4) . " yards";
                ?>
            </td>
            <td>1 km</td>
            <td>=</td>
            <td>1093.6133 yd</td>
        </tr>

        <tr>
            <td>1 kilometre</td>
            <td class="center">=</td>
            <td>
                <?php
                    $kmeter2 = 1;
                    $miles = $kmeter2 * 0.62137;
                    echo round ($miles,5) . " miles";
                ?>
            </td>
            <td>1 km</td>
            <td>=</td>
            <td>0.62137 mi</td>
        </tr>
    </table>


    <table>
        <tr>
            <th colspan="6">IMPERIAL -> METRIC CONVERSIONS</th>
        </tr>

        <tr>
            <td>1 inch</td>
            <td class="center">=</td>
            <td>
                <?php
                    $inch5 = 1;
                    $cm5 = $inch5 * 2.54;
                    echo $cm5 . " centimetres";
                ?>
            </td>
            <td>1 in</td>
            <td>=</td> 
            <td>2.54 cm</td>
        </tr>

        <tr>
            <td>1 foot</td>
            <td class="center">=</td>
            <td>
                <?php
                    $foot2 = 1;
                    $cm6 = $foot2 * 30.48;
                    echo $cm6 . " centimetres";
                ?>
            </td>
            <td>1 ft</td>
            <td>=</td>
            <td>30.48 cm</td>
        </tr>

        <tr>
            <td>1 yard</td>
            <td class="center">=</td>
            <td>
                <?php
                    $yards5 = 1;
                    $cm7 = $yards5 * 91.44;
                    echo $cm7 . " centimetres";
                ?>
            </td>
            <td>1 yd</td>
            <td>=</td>
            <td>91.44 cm</td>
        </tr>

        <tr>
            <td>1 yard</td>
            <td class="center">=</td>
            <td>
                <?php
                    $yards6 = 1;
                    $meter4 = $yards5 * 0.9144;
                    echo $meter4 . " metres";
                ?>
            </td>
            <td>1 yd</td>
            <td>=</td>
            <td>0.9144 m</td>
        </tr>

        <tr>
            <td>1 mile</td>
            <td class="center">=</td>
            <td>
                <?php
                    $mile2 = 1;
                    $meter5 = 1609.344;

                    echo $meter5 . " kilometres";
                ?>
            </td>
            <td>1 mi</td>
            <td>=</td>
            <td>1609.344 m</td>
        </tr>

        <tr>
            <td>1 mile</td>
            <td class="center">=</td>
            <td>
                <?php
                    $mile3 = 1;
                    $kmeter3 = 1.609344;

                    echo $kmeter3 . " kilometres";
                ?>
            </td>
            <td>1 mi</td>
            <td>=</td>
            <td>1.609344 km</td>
        </tr>

    </table>

    <div class="footer">
        Free Math Sheets, Math Games and Math Help
    </div>

</div>

</body>
</html>