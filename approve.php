<?php

// Include PHPMailer files
require 'lib\phpmailer\src\Exception.php';
require 'lib\phpmailer\src\PHPMailer.php';
require 'lib\phpmailer\src\SMTP.php';

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $applicant_id = $_POST['applicant_id'];
    $action = $_POST['action'];

    if ($action === 'approve') {
        $sql = "UPDATE applicants SET approved = 1, rejected = 0 WHERE id = ?";
    } elseif ($action === 'reject') {
        $sql = "UPDATE applicants SET approved = 0, rejected = 1 WHERE id = ?";
    } else {
        die("Invalid action.");
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $applicant_id);
    if ($stmt->execute()) {
        echo "Application has been " . ($action === 'approve' ? 'approved' : 'rejected') . ".";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the admin panel
    header("Location: Admin_section/admin.php");
    exit;
}
?>
