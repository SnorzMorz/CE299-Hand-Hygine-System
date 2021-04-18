<?php
  // Set the page title and include the header file
  $pageTitle = "Employees";
  require_once("template/header.php");
?>

<div class="container">
  <div class="content">
   
  <!-- Search Box -->
  <div class="searchbar">
    <?php include("employees_process.php"); ?>
    <div class="w3-container w3-blue-gray">
      <h2>Search Employee</h2>
    </div>

    
      <form class="w3-container" action="#" method="GET">    
        <div class="form">
          <label class="w3-text-blue-gray"><b>Name</b></label>
          <input class="w3-input w3-border w3-light-gray" id="name" name="name" type="text" minlength="1" maxlength="150">
          <label class="w3-text-blue-gray"><b>Deparment</b></label>
          <select name="departmentfilter">
                  <option  value="all">All</option>
                  <?php
                  foreach ($departments as $department => $data) {
                    echo "<option  value=\"".$data['Department']."\"";
                      if (!empty($_GET['departmentfilter']) && $_GET['departmentfilter']==$data['Department']){
                          echo " selected>".$data['Department']."</option>";
                      } else{
                          echo " >".$data['Department']."</option>";
                      }
                  }
                  ?>
          </select>
          <br>
          <button class="w3-btn w3-blue-gray">Search</button>
        </div>
      </form>
  </div>
 <!-- Explanation -->
 <div class="w3-container w3-border w3-large">
  <div class="w3-left-align"><p>Each employee can be searched by name and a list of matching users will be displayed below.</p></div>
  </div>

  <div class="users">
  <div class = line><ul>
  
    <div class=idnum> <li><b>RFID</b></li></div>
    <div class=username><li><b>Name</b></li></div>
    <div class=deparment><li><b>Department</b></li></div>
  
  </ul></div>
    <?php
      foreach ($users as $user => $data) {
        if(!empty($_GET['name']) && strpos(strtolower($data['UserName']), strtolower($_GET['name']))!== false){
          if((!($_GET['departmentfilter']=="all") || !empty($_GET['departmentfilter'])) && $data['Department']==$_GET['departmentfilter']){
            create_line($data);
          }elseif($_GET['departmentfilter'] == "all"){
            create_line($data);
          }
        }elseif(empty($_GET['name'])){
          if(!empty($_GET['departmentfilter'])){
              if($_GET['departmentfilter']!=="all" && $_GET['departmentfilter']==$data['Department']){
                create_line($data);
              }elseif($_GET['departmentfilter'] == "all"){
                create_line($data);
              }
          }elseif(empty($_GET['departmentfilter']) || $_GET['departmentfilter'] == "all"){
            create_line($data);
          }
      }
      }
    ?>
  </div>




  </div>
</div>
  
    

<?php 
  // Include the footer template file
  require_once("template/footer.php");
?>