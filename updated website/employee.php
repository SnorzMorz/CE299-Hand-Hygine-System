<?php
  // Set the page title and include the header file
  $pageTitle = "Employees";
  require_once("template/header.php");
  header("refresh: 60"); //Refreshes the page every 60 seconds
?>
<?php include "employee_process.php"; ?>
<div class="container">
  <div class="content">
  <div class="w3-container w3-blue-gray">
      <h2><?php echo $username; ?></h2>
    </div>
    <div class="userInfo">
        <div class="userInfoLine">
            <div class="userInfoColumn w3-large">
                <div class="UserID">
                <?php echo "<label>UserID: " .$userid. " </label>"; ?>
               </div>
                <div class="RFID">
                <?php echo "<label>RFID: " .$rfid. " </label>"; ?>
               </div>
               <div class="Department">
                <?php echo "<label>Department: " .$department. " </label>"; ?>
               </div>
            </div>
            

            <div class="image">
                <img src=<?php echo $image; ?>>
            </div>
        </div>
    </div>
  </div>
</div>
  
    

<?php 
  // Include the footer template file
  require_once("template/footer.php");
?>