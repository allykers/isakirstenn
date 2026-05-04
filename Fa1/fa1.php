<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
</head>
<style>
      body {
        font-family: "Segoe UI", sans-serif;
        background-color: #b5c1d3; 
        color: #ffffff; 
        margin: 0;
        padding: 0;
      }

      .container {
        max-width: 800px;
        margin: 2rem auto;
        background: #162947; 
        padding: 2rem;
        box-shadow: 0 0 15px rgba(173, 216, 230, 0.1); 
        border-radius: 8px;
        border-left: 5px solid #00bfff; 
      }

      header {
        margin-bottom: 2rem;
      }

      .header-content {
        display: flex;
        align-items: center;
        gap: 1.5rem;
      }

      .profile-pic {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #87cefa; 
      }

      .info h1 {
        margin: 0;
        color: #add8e6; 
      }

      .title {
        font-style: italic;
        color: #7fffd4; 
        margin: 0.25rem 0;
      }

      .section {
        margin-bottom: 1.5rem;
      }

      .section h2 {
        border-bottom: 2px solid #5f9ea0; 
        color: #ffffff;
        padding-bottom: 0.25rem;
      }

      .skills {
        list-style-type: none;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.5rem;
      }

      .skills li {
        background-color: #1a3357;
        padding: 0.5rem;
        border-radius: 4px;
        color: #e0ffff;
      }

      .job h3 {
        margin: 0;
        color: #87ceeb; 
      }

      .date {
        font-size: 0.9rem;
        color: #98c8e0;
      }
    </style>
<body>
    <?php
        $h1_name = "Allyssa Kirsten L. Yasona";
        $occupation = "FEU Tech | BS Information Technology, Major in Cybersecurity";
        $email = "Email: alyasona@fit.edu.ph";

        $h2_skills ="Skills";


        $h3_experience = "Experience";
        $h4_education = "Education";
    ?>
    <!-- div.container>div.header>h1^div.motto>p -->
    <div class="container">
        <header>
            <div class="header-content">
                <h1><?php echo $h1_name; ?></h1>
            </div>
        
            <div class="info">
                <p><?php echo $occupation; ?></p>
                <p><?php echo $email; ?></p>
            </div>
        </header>

        <section class="section">
            <h2><?php echo $h2_skills; ?></h2>
            <p><?php echo "HTML"; ?></p>
            <p><?php echo "CSS"; ?></p>
            <p><?php echo "JavaScript"; ?></p>
            <P><?php echo "PL/SQL"; ?></p>
        </section>

        <section class="section">
            <h2><?php echo $h3_experience; ?></h2>
            <div class="job">
                <h3><?php echo "Co-Video Editor in Paskuhan Event at University"; ?></h3>
                <p><?php echo "2023 - 2024"; ?></p>
            </div>
            <div class="job">
                <h3><?php echo "Oracle PL/SQL Programmer"; ?></h3>
                <p><?php echo "2024 - 2025"; ?></p>
            </div>
            <div class="job">
                <h3><?php echo "Cybersecurity Analyst"; ?></h3>
                <p><?php echo "2025 - Present"; ?></p>
            </div>
        </section>

        </section>
        <section class="section">
            <h2><?php echo $h4_education; ?></h2>
            <p><strong><?php echo "BS in Information Technology, Major in Cybersecurity"; ?></strong></p>
        </section>
    </div>

    

</body>
</html>