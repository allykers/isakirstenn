<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dog_info";

$conn = mysqli_connect($host, $username, $password, $dbname);

$sql ="SELECT * FROM tbldogs ORDER BY d_name";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">

    <title>Dog List</title>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>List of Registered Dogs</h2>
            <a href="DogRegister.php" class="btn btn-success">+ Register New Dog</a>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped mb-0">
                    <thead class="table-info">
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Breed</td>
                            <td>Age</td>
                            <td>Address</td>
                            <td>Color</td>
                            <td>Height</td>
                            <td>Weight</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $counter = 1;
                    while($row = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>
                        <td><?= $counter++; ?></td>
                        <td><?= $row['d_name']; ?></td>
                        <td><?= $row['d_breed']; ?></td>
                        <td><?= $row['d_age']; ?></td>
                        <td><?= $row['d_add']; ?></td>
                        <td><?= $row['d_color']; ?></td>
                        <td><?= $row['d_height']; ?></td>
                        <td><?= $row['d_weight']; ?></td>
                    </tr>
                    <?php
                    endwhile;
                    ?>
                    <?php if(mysqli_num_rows($result) == 0): ?>
                        <tr>
                            <td colspan="8" class="text-center text-muted">
                                No dogs registered yet...
                            </td>
                        </tr>
                    <?php 
                    endif;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>