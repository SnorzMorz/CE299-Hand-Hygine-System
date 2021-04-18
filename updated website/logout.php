<?php
// Set the page title and include the header file
$pageTitle = "Log Out";
session_start();
session_destroy();
?><?php
// If the title is not been set, set it to
if (!isset($pageTitle)) {
    $pageTitle = "Web Page";
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pageTitle; ?></title>
        <!-- Icon for title -->
        <link rel="icon" href="university.png">
        <!-- CSS Fonts-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/style.css">
        <!-- Chart.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <!-- JavaScript -->
        <script type="text/javascript" src="scripts/main.js"></script>


    </head>
<body>
<header>
    <!-- NavBar for large and medium -->

    <div class="logo">
        <img src="LOGO.png" alt="logo" class="w3-image">
    </div>

    <div class="navbar">
        <div class="w3-bar w3-blue-gray w3-card">
            <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Our work</a>
            <a href="employees.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Employees</a>
            <a href="statistics.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Statistics</a>
            <a href="map.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Map</a>
            <a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact</a>
            <a href="login.php" style="float: right;" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log in</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-left" title="Toggle Navigation Menu" onclick="toggleFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <!-- NavBar for small -->
    <div class="w3-bar-block w3-blue-gray w3-hide w3-hide-large w3-hide-medium w3-top" id="navSmall">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large" title="Toggle Navigation Menu" onclick="toggleFunction()">
            <i class="fa fa-bars"></i></a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()">Our work</a>
        <a href="employees.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()">Employees</a>
        <a href="statistics.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()">Statistics</a>
        <a href="map.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()">Map</a>
        <a href="contact.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()">Contact</a>
        <a href="login.php" style="float:right;" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()">Log in</a>



    </div>

    </div>
</header>
    <!-- Page Content -->

    <div class="container">
        <div class="content">
            <div class="w3-container w3-text-blue-gray">
                <?php
                if(isset($_SESSION['username'])){?><h2>You have logged out successfully</h2><?php
                }else{
                    header('Location:index.php');
                }
                ?>

                </div>

        </div>
    </div>
<?php
// Include the footer template file
require_once("template/footer.php");
?>