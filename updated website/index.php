<?php
  // Set the page title and include the header file
  $pageTitle = "Home";
  require_once("template/header.php");
?>
  <!-- Page Content -->
  
<div class="container">
  <div class="content">
    <div class="w3-container w3-text-blue-gray"> 
      <div class="w3-container w3-blue-gray">
        <h2>The process behind our project</h2>
      </div>
      <div class = "paragraphs" style="font-size:20px">
        <p>The first step would be for an employee to use the hand sanitiser together with the RFID.</p>
        <p>The employee's information (e.g. name, department) and the scanner information (e.g.time and place it is used, levels of liquid left in the dispenser) will be then transferred into the database.</p>
        <p>With the use of Python together with the data extracted from the database, multiple types of graphs will be created to illustrate the disinfection process and the employees' levels of hygiene.</p>
        <p>The graphs are then displayed on the Statistics page of the website.</p>
        <p>Overall, this project aims to be a fairly simple method of storing information regarding sanitation levels in a building where many people come together and it can easily be adapted to suit any kind of needs.</p>
        <p>Furthermore, the simplicity of the design means that any person can use it without much knowledge of software, the main purpose being the defence against the spread of Covid-19 which starts with a solid monitorization of hygiene levels.</p>
      </div>
    </div>
    <div class= "w3-container" style="height:300px">
      <img src="photoindexpage.jpeg" alt="process" style="max-width:100%;">
    </div>
  </div>
</div>
<?php 
  // Include the footer template file
  require_once("template/footer.php");
?>