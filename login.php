<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['email'])) {
    // Redirect to the home page or any other page for logged-in users
    header("Location: home.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connection to the database (replace with your credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "talisha_col";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $password = $_POST['pwd'];

    // Check if the user exists with the provided email
    $checkUserQuery = "SELECT * FROM users WHERE email='$email'";
    $checkUserResult = $conn->query($checkUserQuery);

    if ($checkUserResult->num_rows > 0) {
        // User exists, proceed with password verification
        $row = $checkUserResult->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password verification successful
            $_SESSION['email'] = $email;
            header("Location: home.php"); // Redirect to home.php after successful login
            exit();
        } else {
            // Incorrect password, display the modal
            echo "<script>openModal('passwordErrorModal');</script>";
        }
    } else {
        // User not found, display the modal
        echo "<script>openModal('userNotFoundErrorModal');</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your stylesheets and other head elements here -->
    <link rel="stylesheet" href="path/to/modal.css">
</head>
<body>
    <!-- Your page content goes here -->

    <!-- Modal for incorrect password -->
    <div id="passwordErrorModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('passwordErrorModal')">&times;</span>
            <p>Password is not correct.</p>
        </div>
    </div>

    <!-- Modal for user not found -->
    <div id="userNotFoundErrorModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('userNotFoundErrorModal')">&times;</span>
            <p>No user found with the login credentials that you've provided, please create an account instead.</p>
        </div>
    </div>

    <!-- Include your scripts at the end of the body if needed -->
    <script src="path/to/modal.js"></script>
</body>
</html>
