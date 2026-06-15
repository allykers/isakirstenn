<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PHP Forms & Validation Activities</title>

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
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.container{
    width:900px;
}

.card{
    background:white;
    border-radius:25px;
    padding:40px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.header{
    text-align:center;
    margin-bottom:40px;
}

.header h1{
    font-size:42px;
    color:#222;
    margin-bottom:10px;
}

.header p{
    color:#777;
}

.activities{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

.activity-card{
    background:#eaf4f6;
    border-radius:20px;
    padding:25px;
}

.activity-card h2{
    color:#222;
    margin-bottom:15px;
}

.activity-card a{
    display:block;
    text-decoration:none;
    background:#79a7ab;
    color:white;
    padding:12px;
    border-radius:15px;
    text-align:center;
    margin-bottom:10px;
    transition:.3s;
}

.activity-card a:hover{
    background:#668f93;
}

.footer{
    margin-top:30px;
    text-align:center;
    color:#777;
}

</style>
</head>

<body>

<div class="container">

<div class="card">

<div class="header">
    <h1>PHP Forms & Validation</h1>
    <p>Formative Assessment 5</p>
</div>

<div class="activities">

<div class="activity-card">
    <h2>Activity 1</h2>

    <a href="Activity 1/get_form.php">
        GET Form
    </a>

    <a href="Activity 1/post_form.php">
        POST Form
    </a>
</div>

<div class="activity-card">
    <h2>Activity 2</h2>

    <a href="Activity 2/cookies.php">
        Cookies Activity
    </a>
</div>

<div class="activity-card">
    <h2>Activity 3</h2>

    <a href="Activity 3/favorite_color.php">
        Session Activity
    </a>
</div>

</div>

<div class="footer">
    Applications Development and Emerging Technologies
</div>

</div>

</div>

</body>
</html>