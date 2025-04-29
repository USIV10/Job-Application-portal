<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
            width: 100%;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }

        a{
            padding: 10px 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 2px;
            cursor: pointer;  
        }
        input{
            font-size: large;
        } 
    </style>
</head>
<body>
    <div class="form-container">
        <h2 style="text-align: center;">Application Form</h2>
        <form action="conn.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="fullName" name="fullName">
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" >
            </div>
            <div class="form-group">
                <label for="position">Positions:</label>
                <select name="position_id" id="position_id">
                    <option value="1">Data Analyst</option>
                    <option value="2">Data Scientist</option>
                    <option value="3">Frontend Developer</option>
                    <option value="4">Backend Developer</option>
                    <option value="5">Graphic Designer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="education">Education:</label>
                <textarea id="education" name="education" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="experience">Experience:</label>
                <textarea id="experience" name="experience" rows="4"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" id="form">Submit Application</button>
      <script>Form = document.getElementById('form').addEventListener('click', function DA(){
    window.location.href="admin.php";
      });
    </script>
            </div>
            <a href="index.php">back</a>
        </form>
    </div>
                  
    <script src="apply.js">
    </script>
</body>
</html>