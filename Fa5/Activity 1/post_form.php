<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>POST Activity</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#eef6f7;
    min-height:100vh;
    padding:60px 20px;
}

.container{
    max-width:800px;
    margin:auto;
}

.card{
    background:white;
    border-radius:25px;
    padding:40px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.page-header{
    background:#dcecee;
    padding:25px;
    border-radius:20px;
    text-align:center;
    font-size:36px;
    font-weight:700;
    margin-bottom:30px;
}

.form-group{
    margin-bottom:20px;
}

label{
    display:block;
    margin-bottom:8px;
}

input,
textarea{
    width:100%;
    padding:15px;
    border:none;
    border-radius:20px;
    background:#eaf4f6;
}

textarea{
    height:120px;
    resize:none;
}

.center{
    text-align:center;
}

.btn{
    background:#79a7ab;
    color:white;
    border:none;
    padding:15px 30px;
    border-radius:25px;
    cursor:pointer;
}

.home{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#79a7ab;
    color:white;
    padding:12px 25px;
    border-radius:25px;
}

</style>

</head>

<body>

<div class="container">

<div class="card">

<div class="page-header">
Personal Information (POST)
</div>

<form action="post_process.php" method="post">

<div class="form-group">
<label>First Name</label>
<input type="text" name="firstname" required>
</div>

<div class="form-group">
<label>Middle Name</label>
<input type="text" name="middlename" required>
</div>

<div class="form-group">
<label>Last Name</label>
<input type="text" name="lastname" required>
</div>

<div class="form-group">
<label>Date of Birth</label>
<input type="date" name="dob" required>
</div>

<div class="form-group">
<label>Address</label>
<textarea name="address" required></textarea>
</div>

<div class="center">
<button class="btn" name="submit">
Submit Using POST
</button>
</div>

</form>

<div class="center">
<a href="../index.php" class="home">
Back to Home
</a>
</div>

</div>

</div>

</body>
</html>