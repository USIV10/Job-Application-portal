<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "applications";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and collect form data
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $position_id = $conn->real_escape_string($_POST['position_id']);
    $education = $conn->real_escape_string($_POST['education']);
    $experience = $conn->real_escape_string($_POST['experience']);
    
    // Insert form data into the applicants table
    $sql = "INSERT INTO applicants (fullName, email, phone, position_id, education, experience)
            VALUES ('$fullName', '$email', '$phone', '$position_id', '$education', '$experience')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to admin page after successful submission
        echo "Application complete";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
