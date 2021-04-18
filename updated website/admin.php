<?php
// If the title is not been set, set it to
if (!isset($pageTitle)) {
    $pageTitle = "Database";
}

require_once("database.php");

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
            <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Home</a>
            <a href="logout.php" style="float:right;" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log out</a>
            <a href="admin.php" style="float:right;" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Database</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-left" title="Toggle Navigation Menu" onclick="toggleFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <!-- NavBar for small -->
    <div class="w3-bar-block w3-blue-gray w3-hide w3-hide-large w3-hide-medium w3-top" id="navSmall">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large" title="Toggle Navigation Menu" onclick="toggleFunction()">
            <i class="fa fa-bars"></i></a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()">Home</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()">Log out</a>
        <a href="admin.php" style="float: right;" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()">Database</a>

    </div>

    </div>
</header>
<!-- Page Content -->

<?php
session_start();
if(!isset($_SESSION['username'])){
    header( 'Location: login.php' );
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$link = connect();

if(isset($_POST['UserID'])) {
    $sql_delete_User = "DELETE FROM users WHERE UserID = \"" . $_POST['UserID'] . "\" ";

    if (!($link->query($sql_delete_User) === TRUE)) {
        alert("Failed to delete User" );
    }
}
if(isset($_POST['ReaderID'])) {
    $sql_delete_Reader = "DELETE FROM reader WHERE ReaderID = \"" . $_POST['ReaderID'] . "\" ";

    if (!($link->query($sql_delete_Reader) === TRUE)) {
        alert("Failed to delete reader" );
    }
}
if(isset($_POST['ScanID'])) {
    $sql_delete_Scan = "DELETE FROM scans WHERE ScanID = \"" . $_POST['ScanID'] . "\" ";

    if (!($link->query($sql_delete_Scan) === TRUE)) {
        alert("Failed to delete scan.");
    }
}
if(isset($_POST['Location'])) {
    $sql_insert_Reader = "INSERT INTO `reader`(Location,Floor,LastRefill,PercentageFull) 
VALUES (\"".$_POST['Location']."\",".$_POST['Floor'].",\"".$_POST['LastRefill']."\"," .$_POST['PercentageFull'].") ";
    if (!($link->query($sql_insert_Reader) === TRUE)) {
        alert("Failed to add new Location" );
    }
}
if(isset($_POST['new_rfid'])) {
    $sql_insert_User = "INSERT INTO `users`(RFID,UserName,Department) VALUES (\"".$_POST['new_rfid']."\",\"".$_POST['new_uname']."\",\"".$_POST['new_dpt'] ."\");";
    if (!($link->query($sql_insert_User) === TRUE)) {
        alert("Failed to add new User ");
    }
}
if(isset($_POST['Scan_user']) ||isset($_POST['Scan_Reader'])||isset($_POST['Scan_Time']) ) {
    if(isset($_POST['Scan_user']) &&isset($_POST['Scan_Reader'])&&isset($_POST['Scan_Time']) ) {
        $sql_insert_Scan = "INSERT INTO `scans`(UserID,ReaderID,Scan) VALUES ('".$_POST['Scan_user']."','".$_POST['Scan_Reader']."','". $_POST['Scan_Time']."')";
        if (!($link->query($sql_insert_Scan) === TRUE)) {
            alert("Failed to add new Scan");
        }
    }
}
$users_sql = "select * from users";
if($result = mysqli_query($link,$users_sql )){
if(mysqli_num_rows($result) > 0){?>
    <div class="container">
    <div class="content">
    <div class="contactpage">
<table>
    <tr>
        <th>UserID</th>
        <th>RFID</th>
        <th>UserName</th>
        <th>Department</th>
    </tr>
    <?php

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['UserID']."</td>";
        echo "<td>".$row['RFID']."</td>";
        echo "<td>".$row['UserName']."</td>";
        echo "<td>".$row['Department']."</td>";
        echo "<td><form action=\"admin.php\" method='post'>";
        echo "<input type=\"hidden\" id=\"UserID\" name=\"UserID\" value=\"".$row['UserID']."\">";
        echo "<input type=\"submit\" name=\"Action\" value=\"delete\">";
        echo "</form></td>";
        echo "</tr>";
    }
    // Free result set
    mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
    } else{
        echo "ERROR: Could not able to execute $users_sql. " . mysqli_error($link);
    }
    ?>
    <td><form action="admin.php" method="post"></td>
    <td><input type="text" maxlength="11" size="15" id="new_rfid" name="new_rfid" value=""></td>
    <td><input type="text" maxlength="45" size="15"  id="new_uname" name="new_uname" value=""></td>
    <td><input type="text" maxlength="45" size="15"  id="new_dpt" name="new_dpt" value=""></td>
    <td><input type="submit" name="adding" value="add"></form></td>
</table>
<?php
$reader_sql = "select * from reader";
if($result = mysqli_query($link,$reader_sql )){
if(mysqli_num_rows($result) > 0){?>
<table>
    <tr>
        <th>ReaderID</th>
        <th>Location</th>
        <th>Floor</th>
        <th>LastRefill</th>
        <th>PercentageFull</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['ReaderID']."</td>";
        echo "<td>".$row['Location']."</td>";
        echo "<td>".$row['Floor']."</td>";
        echo "<td>".$row['LastRefill']."</td>";
        echo "<td>".$row['PercentageFull']."</td>";
        echo "<td><form action=\"admin.php\" method='post'>";
        echo "<input type=\"hidden\" id=\"ReaderID\" name=\"ReaderID\" value=\"".$row['ReaderID']."\">";
        echo "<input type=\"submit\" name=\"Action\" value=\"delete\">";
        echo "</form></td>";
        echo "</tr>";
    }
    // Free result set
    mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
    } else{
        echo "ERROR: Could not able to execute $reader_sql. " . mysqli_error($link);
    }
    ?>
    <tr>
        <td></td>

        <td><form action="admin.php" method="post">
                <input type="text" size="20" maxlength="45" id="Location" name="Location" value=""></td>
        <td><input type="text" size="3" maxlength="45" id="Floor" name="Floor" value=""></td>
        <td><input type="text" size="20" maxlength="45" id="LastRefill" name="LastRefill" value=""></td>
        <td> <input type="text" size="3" maxlength="45" id="PercentageFull" name="PercentageFull" value=""></td>
        <td><input type="submit" name="adding" value="add"></td></form>

    </tr>
</table>

<?php
$scans_sql = "select * from scans";
if($result = mysqli_query($link,$scans_sql )){
if(mysqli_num_rows($result) > 0){?>
<table>
    <tr>
        <th>ScanID</th>
        <th>UserID</th>
        <th>ReaderID</th>
        <th>Scan</th>
    </tr>
    <?php

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['ScanID']."</td>";
        echo "<td>".$row['UserID']."</td>";
        echo "<td>".$row['ReaderID']."</td>";
        echo "<td>".$row['Scan']."</td>";
        echo "<td><form action=\"admin.php\" method='post'>";
        echo "<input type=\"hidden\" id=\"ScanID\" name=\"ScanID\" value=\"".$row['ScanID']."\">";
        echo "<input type=\"submit\" name=\"Action\" value=\"delete\">";
        echo "</form></td>";
        echo "</tr>";
    }
    // Free result set
    mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
    } else{
        echo "ERROR: Could not able to execute $scans_sql. " . mysqli_error($link);
    }
    ?>
    <tr>
        <td></td>

        <td><form action="admin.php" method="post">
                <input type="text" size="5" id="Scan_user" name="Scan_user" value=""></td>
        <td><input type="text" size="5" id="Scan_Reader" name="Scan_Reader" value=""></td>
        <td><input type="text" size="20" id="Scan_Time" name="Scan_Time" value=""></td>
        <td><input type="submit" name="adding" value="add"></form></td>

    </tr>
</table>
    </div>
    </div>
    </div>







<?php
// Include the footer template file
require_once("template/footer.php");
?>