<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summative 2: Activity 1</title>
    <style>
        body{
            font-family: Arial,sans-serif;
            background-color: #f5e6d3;
        }

        h1{
            text-align: center;
            color: #5c4033;
            margin-top: 20px;
        }

        table{
            width: 90%;
            border-collapse: collapse;
            margin: 30px auto;
            background-color: #fff8f0;
        }

        td, th{
            border: 1px solid #5c4033;
            padding: 12px;
            text-align: center;
        }

        th{
            background-color: #5c4033;
            color: white;
            font-size: 18px;
        }

        tr{
            background-color: #fff8f0;
        }

        tr:hover{
            background-color: #d9b38c;
            transition: 0.3s;
        }

        img{
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <h1>My Fruits</h1>

    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        
            <?php
                $fruits = array(
                    array(
                        "name" => "Apple", 
                        "description" => "Color: Red", 
                        "facts" => "Apples are rich in fiber and vitamin C.", 
                        "image" => "apple.jpg"
                        ),

                    array(
                        "name" => "Banana", 
                        "description" => "Color: Yellow", 
                        "facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber.", 
                        "image" => "banana.jpg"
                    ), 

                    array(
                        "name" => "Cherry", 
                        "description" => "Color: Red", 
                        "facts" => "Cherries are rich in antioxidants and anti-inflammatory compounds.", 
                        "image" => "cherry.jpg"
                    ),
                    
                    array(
                        "name" => "Grape", 
                        "description" => "Color: Purple", 
                        "facts" => "Grapes contain vitamins C and K and are good for heart health.", 
                        "image" => "grape.jpg"
                    ),

                    array(
                        "name" => "Kiwi", 
                        "description" => "Color: Green", 
                        "facts" => "Kiwis are rich in vitamin C and dietary fiber.", 
                        "image" => "kiwi.jpg"
                    ),

                    array(
                        "name" => "Lemon", 
                        "description" => "Color: Yellow", 
                        "facts" => "Lemons are high in vitamin C and can aid digestion.", 
                        "image" => "lemon.jpg"
                    ),

                    array(
                        "name" => "Mango", 
                        "description" => "Color: Orange", 
                        "facts" => "Mangoes are high in vitamin C and A.", 
                        "image" => "mango.jpg"
                    ),

                    array(
                        "name" => "Orange", 
                        "description" => "Color: Orange", 
                        "facts" => "Oranges are well known for their vitamin C content.", 
                        "image" => "orange.jpg"
                    ),

                    array(
                        "name" => "Pineapple", 
                        "description" => "Color: Yellow", 
                        "facts" => "Pineapples are rich in vitamins, enzymes, and antioxidants.", 
                        "image" => "pineapple.jpg"
                    ),

                    array(
                        "name" => "Strawberry", 
                        "description" => "Color: Red", 
                        "facts" => "Strawberries are a good source of vitamin C and manganese.", 
                        "image" => "strawberry.jpg"
                    )
                );

                usort($fruits, function($a, $b) {
                    return strcmp($a['name'], $b['name']);
                });

                foreach ($fruits as $fruit): 
        ?>
            <tr>
                <td><img src="Fruits/<?php echo $fruit['image']; ?>" alt="<?php echo $fruit['name']; ?>"></td>
                <td><?php echo $fruit['name']; ?></td>
                <td><?php echo $fruit['description']; ?></td>
                <td><?php echo $fruit['facts']; ?></td>
            </tr>
        <?php 
        endforeach; 
        ?>
    </table>
</body>

</html>