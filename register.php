<?php
session_start();

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

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $level = $_POST['level'];
    $gender = $_POST['gender'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if the user already exists with the provided email
    $checkUserQuery = "SELECT * FROM users WHERE email='$email'";
    $checkUserResult = $conn->query($checkUserQuery);

    if ($checkUserResult->num_rows > 0) {
        // User already exists
        echo "There's an account with the information you provided. Please login instead.";
    } else {
        // User does not exist, proceed with registration
        $insertUserQuery = "INSERT INTO users (fullName, email, school, level, gender, password) VALUES ('$fullName', '$email', '$school', '$level', '$gender', '$password')";

        if ($conn->query($insertUserQuery) === TRUE) {
            // Registration successful
            $_SESSION['registration_success'] = true;
        } else {
            echo "Error: " . $insertUserQuery . "<br>" . $conn->error;
        }
    }

    $conn->close();
}

// Redirect user after registration
if (isset($_SESSION['registration_success'])) {
    header("refresh:4;url=index.html"); // Redirect to index.html after 4 seconds
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
</head>
<body>
    <div class="registration-success <?php echo isset($_SESSION['registration_success']) ? '' : 'w3-hide'; ?>">
        <svg class="checkmark w3-jumbo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"> 
            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/> 
             <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
        </svg>
        <p class="w3-xlarge">Registration successful!</p>
        <p class="w3-text-grey">Wait while you're being redirects..</p>
    </div>

    <form action="register.php" class="sign-up" method="post">
        <!-- ... (rest of the form remains the same) ... -->
    </form>

    <script>
        // Hide the registration success message after 4 seconds
        setTimeout(function () {
            document.querySelector('.registration-success').style.display = 'none';
        }, 8000);
    </script>
</body>
</html>
