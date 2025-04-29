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
    $applicant_id = $_POST['applicant_id'];
    $email = $_POST['email'];

    // Update the applicant status to rejected
    $sql = "UPDATE applicants SET rejected = 1 WHERE id = $applicant_id";

    if ($conn->query($sql) === TRUE) {
        // Send rejection email
        $subject = "Application Rejected";
        $message = "Dear applicant,\n\nWe regret to inform you that your application has been rejected.\n\nBest regards,\nThe Team";
        $headers = "From: no-reply@yourdomain.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "Application rejected and email sent successfully!";
        } else {
            echo "Application rejected but failed to send email.";
        }
    } else {
        echo "Error rejecting application: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
