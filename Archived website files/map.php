<?php
  // Set the page title and include the header file
  $pageTitle = "Map";
  require_once("template/header.php");
?>
  <!-- Page Content -->
  
  <h2 class="w3-display-middle">Manual Slideshow</h2>
<div class ="container">
  <div class= "content">
<div class="w3-display-container">
  <img class="mySlides" src="First_Floor.jpg" style="width:100%">
  <img class="mySlides" src="Second_Floor.jpg" style="width:100%">
  <img class="mySlides" src="Third_Floor.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</div>
</div>
    

<?php 
  // Include the footer template file
  require_once("template/footer.php");
?>