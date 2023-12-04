<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other page after logout
    header("Location: index.html");
    exit();
}
?>
