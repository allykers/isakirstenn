<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dog_info";

$conn = mysqli_connect($host, $username, $password, $dbname);

$message = "";
$type = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $d_name = mysqli_real_escape_string($conn, $_POST['d_name']);
    $d_breed = mysqli_real_escape_string($conn, $_POST['d_breed']);
    $d_age = mysqli_real_escape_string($conn, $_POST['d_age']);
    $d_add = mysqli_real_escape_string($conn, $_POST['d_add']);
    $d_color = mysqli_real_escape_string($conn, $_POST['d_color']);
    $d_height = mysqli_real_escape_string($conn, $_POST['d_height']);
    $d_weight = mysqli_real_escape_string($conn, $_POST['d_weight']);

    $sql = "INSERT INTO tbldogs
    (d_name, d_breed, d_age, d_add, d_color, d_height, d_weight)
    VALUES (
    '$d_name',
    '$d_breed',
    '$d_age',
    '$d_add',
    '$d_color',
    '$d_height',
    '$d_weight'
    )";

    if(mysqli_query($conn, $sql)) {
        $message = "Registration completed successfully.";
        $type = "success";
    } else {
        $message = "Registration error: ". mysqli_error($conn);
        $type = "danger";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">

    <title>Dog Registration</title>
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="col col-md-5">
                <h2>Dog Registration</h2>
                <?php
                if($message):
                ?>
                <div class="alert alert-<?= $type; ?> alert-dismissible fade show">
                    <?= $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php
                endif;
                ?>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="d_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Breed</label>
                                <select name="d_breed" class="form-select" required>
                                    <option value="" selected disabled>Select Breed</option>
                                    <option value="Golden Retriever">Golden Retriever</option>
                                    <option value="Labrador Retriever">Labrador Retriever</option>
                                    <option value="German Shepherd">German Shepherd</option>
                                    <option value="Siberian Husky">Siberian Husky</option>
                                    <option value="Rottweiler">Rottweiler</option>
                                    <option value="Beagle">Beagle</option>
                                    <option value="Poodle">Poodle</option>
                                    <option value="Shih Tzu">Shih Tzu</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="Pug">Pug</option>
                                    <option value="Dachshund">Dachshund</option>
                                    <option value="Border Collie">Border Collie</option>
                                    <option value="Corgi">Corgi</option>
                                    <option value="Doberman">Doberman</option>
                                    <option value="Maltese">Maltese</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Age</label>
                                <input type="number" name="d_age" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="d_add" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Color</label>
                                <input type="text" name="d_color" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Height</label>
                                <input type="text" name="d_height" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Weight</label>
                                <input type="text" name="d_weight" class="form-control">
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                                <a href="DogView.php" class="btn btn-secondary">
                                    View Dogs
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
</body>
</html>