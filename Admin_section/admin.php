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

session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit;
}

// Fetch all applications that have not been approved or rejected
$sql = "SELECT applicants.id, applicants.fullName, applicants.email, applicants.phone, 
        positions.position_name, applicants.education, applicants.experience, applicants.created_at 
        FROM applicants
        JOIN positions ON applicants.position_id = positions.id 
        WHERE applicants.approved = 0 AND applicants.rejected = 0";
$result = $conn->query($sql);

if (!$result) {
    die("Error executing query: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Approve or Reject Applications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            color: #343a40;
        }
        div p{
            font-family: Sans-serif;
        }
        a {
            text-decoration: none;
            color: #007bff;
            margin-left: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 1px solid #dee2e6;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #343a40;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9ecef;
        }
        button {
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }
        button:hover {
            opacity: 0.9;
        }
        button[type="submit"] {
            background-color: #28a745;
        }
        button[type="submit"]:last-child {
            background-color: #dc3545;
        }
        .container {
            max-width: 1200px;
            margin: auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <a href="logout.php">Logout</a>
        </div>
        <h2>Admin Panel - Approve or Reject Applications</h2>
        <table>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Position</th>
                <th>Education</th>
                <th>Experience</th>
                <th>Submission Date</th>
                <th>Action</th>
            </tr>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['fullName']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['position_name']; ?></td>
                        <td><?php echo $row['education']; ?></td>
                        <td><?php echo $row['experience']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td>
                            <form action="/AY_Company_LTD/approve.php" method="post" style="display:inline;">
                                <input type="hidden" name="applicant_id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="action" value="approve">
                                <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
                                <button type="submit">Approve</button>
                            </form>

                            <form action="/AY_Company_LTD/reject.php" method="post" style="display:inline;">
                                <input type="hidden" name="applicant_id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="action" value="reject">
                                <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
                                <button type="submit">Reject</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8">No applications to approve or reject</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
