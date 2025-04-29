<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AY Company LTD</title>
    <link rel="stylesheet" href="apply.css">
</head>
<body>
    <h1 style="background-color:cornflowerblue;">AY Careers</h1>
    <img src="img/wallpaper2.jpg" alt="" height="320px" id="banner">
    
    <div id="container">
    <h2>Job Openings</h2>
        <h3 class="jobs">Data Analyst</h3>
        <div style="text-align: right;" class="image">
            <img src="img/Computer.jpg" alt="" height="170px">
            </div>
        <p><b>Location:</b> New York,USA</p>
        <h5>Requirement: Must have at least 2+ years of experience and a computer science Degree</h5>
        <h4><b>Salary:</b> $9400</h4>
       
        <hr>
        <h3 class="jobs">Data Scientist</h3>
        <div style="text-align: right;" class="image">
            <img src="img/Data_scientist.jpg" alt="" height="170px">
            </div>
        <p><b>Location:</b> San Francisco,USA</p>
        <h5>Requirement: Must have at least 2+ years of experience and a computer science Degree</h5>
        <h4><b>Salary:</b> $8200</h4>
        <hr>

        <h3 class="jobs">Frontend Developer</h3>
        <div style="text-align: right;" class="image">
            <img src="img/frontend.jpg" height="170px" alt="" width="280px">
            </div>
        <p><b>Location:</b> Accra, Ghana</p>
        <h5>Requirement: Must have at least 2+ years of experience in HTML,CSS and JS</h5>
        <h4><b>Salary:</b> $5400</h4>
       
        <hr>
        <h3 class="jobs">Backend Developer</h3>
        <div style="text-align: right;" class="image">
            <img src="img/py3.jpg" alt="">
            </div>
        <p><b>Location:</b> Tamale, Ghana</p>
        <h5>Requirement: Must have 3+ years of experience in PHP, Node.js and MySQL and CS Degree</h5>
        <h4><b>Salary:</b> $6600</h4>
        
        <hr>
        <h3 class="jobs">Graphic Designer</h3>
        <div style="text-align: right;" class="image">
            <img src="img/Graphic Design.jpg" height="170px" alt="">
            </div>
        <p><b>Location:</b> Washington DC</p>
        <h5>Requirement: Must have at least 2+ years of experience and a Degree in IT</h5>
        <h4><b>Salary:</b> $5800</h4>
        
        <hr>
    </div>
    <div style="text-align: center;">
        <button class="btn" id="apply">Apply</button>
    </div>

    <h2>About</h2>
    <p class="bodytext">AY Company LTD is a leading software development company dedicated to crafting innovative solutions that transform businesses and improve lives.
        Our story began with a passion for technology and a vision to make a meaningful impact in the industry.
        As we look to the future, we are excited to continue pushing the boundaries of software development and making a positive impact on the world. Thank you for visiting our website and learning more about 
        AY company LTD. We invite you to explore our services.
    </p>
    <div class="images">
       <img src="img/fb.png" alt="" width="50px">
       <img src="img/Gmail.png" alt="" width="50px">
       <img src="img/phone.png" alt="" width="50px">
    </div>
    <p style="text-align: center;">Copyright ©2024</p>
      <script>
        Apply = document.getElementById('apply').addEventListener('click', function DA(){
          window.location.href="http://localhost/AY_Company_LTD/apply.php";
        })
      </script>
</body>
</html>