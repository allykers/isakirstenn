<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1: Information Table</title>
</head>

<style>
    body{
    background-color: #e8f5e9;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 30px;
}

table{
    width: 60%;
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
}

th{
    background-color: #81c784;
    color: white;
    padding: 15px;
    font-size: 18px;
}

td{
    border: 2px solid #c8e6c9;
    text-align: center;
    padding: 12px;
    font-size: 16px;
}

img{
    width: 150px;
    height: 150px;
    border-radius: 10px;
    object-fit: cover;
}
</style>
<body>
    <?php

$information = array (

    array("Michael Robinavich", '<img src="./robby.png">', "54", "06/04/1971", "09637895060"),

    array("Heather Collins", '<img src="./heather.png">', "40", "09/10/1985", "09785002885"),

    array("Frank Langdon", '<img src="./langdon.jpg">', "36", "11/10/1989", "09335657801"),

    array("Dana Evans", '<img src="./dana.jpg">', "59", "12/01/1966", "09453296644"),

    array("Samira Mohan", '<img src="./samara.jpg">', "28", "12/16/1997", "09558809268"),

    array("Cassie McKay", '<img src="./cassie.jpg">', "42", "10/30/1982", "09774209890"),

    array("Melissa King", '<img src="./mel.jpg">', "27", "02/04/1999", "09214054081"),

    array("Trinity Santos", '<img src="./santos.jpg">', "27", "01/17/1999", "09884452109"),

    array("Dennis Whitaker", '<img src="./whitaker.jpg">', "35", "02/25/1991", "09123456789"),

    array("Victoria Javadi", '<img src="./javadi.jpg">', "21", "07/07/2005", "09426544960")

);

sort($information);

?>

<table>

    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact Number</th>
    </tr>

    <?php for ($i = 0; $i < count($information); $i++) { ?>

    <tr>

        <td><?php echo $i + 1; ?></td>

        <?php for ($k = 0; $k < 5; $k++) { ?>

            <td><?php echo $information[$i][$k]; ?></td>

        <?php } ?>

    </tr>

    <?php } ?>

</table>

</body>
</html>