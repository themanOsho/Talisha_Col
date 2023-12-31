<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['email'])) {
    // Redirect to the login page
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talisha College - Best education that suits your child</title>
    <link rel="icon" href="media/aaf_logo.png" type="image/x-icon"> 
    <link rel="stylesheet" href="css/tc-admin.css">
    <link rel="stylesheet" href="css/media_screens.css">
    <link rel="stylesheet" href="css/w3/w3.css">
    <script src="js/w3.js"></script>
    <link rel="stylesheet" href="css/hover/hover-min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Chivo:wght@500&family=Fjalla+One&family=Neuton&family=Teko:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="w3-hide-small w3-hide-medium">
        <div class="header-top w3-row">
            <div class="w3-col l6 tc-navy-blue tc-text-white w3-padding">
                <a href="#" class="w3-padding">Students</a>
                <a href="#" class="w3-padding">Staffs</a>
                <a href="#" class="w3-padding">Alumni</a>
                <a href="#" class="w3-padding">Research</a>
            </div>
            <div class="w3-col l6 tc-navy-blue tc-text-white w3-right-align w3-padding">
                <a href="#" class="w3-padding"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" class="w3-padding"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#" class="w3-padding"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="w3-padding"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <main>
        <div class="banner w3-display-container">
            <header class="transparent-header w3-row w3-display-topmiddle">
                <div class="w3-col l2 m4 s4 logo w3-padding">
                    <img src="images/logo_.png" alt="" class="w3-image">
                </div>
                <div class="w3-col l8 tc-text-navy-blue w3-padding-32 w3-right-align w3-hide-small w3-hide-medium">
                    <a href="#" class="w3-padding">The College</a>
                    <div class="w3-dropdown-hover">
                        <button class="w3-button">Academics <i class="fa-solid fa-caret-down"></i></button>
                        <div class="w3-dropdown-content w3-bar-block w3-border">
                        <a href="#" class="w3-bar-item w3-button">Faculty of Arts</a>
                        <a href="#" class="w3-bar-item w3-button">Faculty of Science</a>
                        <a href="#" class="w3-bar-item w3-button">Faculty of Commerce</a>
                        </div>
                    </div>
                    <div class="w3-dropdown-hover">
                        <button class="w3-button">Admissions <i class="fa-solid fa-caret-down"></i></button>
                        <div class="w3-dropdown-content w3-bar-block w3-border">
                        <a href="#" class="w3-bar-item w3-button">Pre Degree</a>
                        <a href="#" class="w3-bar-item w3-button">Undergraduate</a>
                        <a href="#" class="w3-bar-item w3-button">Post Graduate</a>
                        </div>
                    </div>
                    <a href="#" class="w3-padding">Gallery</a>
                    <div class="w3-dropdown-hover">
                        <button class="w3-button">Help! <i class="fa-solid fa-caret-down"></i></button>
                        <div class="w3-dropdown-content w3-bar-block w3-border">
                        <a href="#" class="w3-bar-item w3-button">Help Desk</a>
                        <a href="#" class="w3-bar-item w3-button">Admission Requirements</a>
                        <a href="#" class="w3-bar-item w3-button"></a>
                        </div>
                    </div>
                </div>
                <div class="w3-col l2 m8 s8 apply w3-padding w3-center w3-padding-32 w3-hide-small w3-hide-medium">
                    <form action="logout.php" method="post">
                        <button type="submit" class="w3-white w3-round-large hvr-shrink">Apply</button>
                    </form>
                </div>
                <div class="w3-col l2 m8 s8 apply w3-right-align menu w3-hide-large">
                    <i class="fa-solid fa-bars tc-text-navy-blue"></i>
                </div>
            </header>
            <video loop width="100%" height="600" autoplay style="display: block; object-fit: fill;">
                <source src="videos/tc-banner_intro.mp4" type="video/mp4" autoplay>
                Your browser does not support the video tag.
            </video>
        </div>
    </main>
    <!-- scripts -->
    <script src="https://kit.fontawesome.com/c75a29d236.js" crossorigin="anonymous">
        // Fa fa Icons
    </script>
</body>
</html>