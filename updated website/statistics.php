<?php
  // Set the page title and include the header file
  $pageTitle = "Statistics";
  require_once("template/header.php");
  header("refresh: 60"); //Refreshes the page every 60 seconds
?>

<div class="container">
  <div class="content" style="max-width:2500px">
  <div class="w3-container w3-blue-gray">
      <h2>Statistics</h2>
    </div>

    <div class="statistics">
      <div class=images>
        <img src='python\images\scans.png?nocache=<?php echo time(); ?>' class='image' class='column' alt='graph of scans' />
        <img src='python\images\\readers.png?nocache=<?php echo time(); ?>' class='image' class='column' alt='graph of readers'/>
      </div>

      <div class=images>
        <img src='python\images\departments2.png?nocache=<?php echo time(); ?>' class='image' class='column' alt='graph of departments'/>
        <img src='python\images\departments3.png?nocache=<?php echo time(); ?>' class='image' class='column' alt='graph of departments'/>
        <img src='python\images\departments1.png?nocache=<?php echo time(); ?>' class='image' class='column' alt='graph of departments' />
      </div>

      <div class=images>
        <img src='python\images\ScanKMeans.png?nocache=<?php echo time(); ?>' class='image' class='column' alt='graph of scans K Means' />
        <img src='python\images\ReaderAIKMeans.png?nocache=<?php echo time(); ?>' class='image' class='column' alt='graph of dispenser K Means' />
      </div>
    </div>
  </div>
</div>

<?php 
  // Include the footer template file
  require_once("template/footer.php");
?>