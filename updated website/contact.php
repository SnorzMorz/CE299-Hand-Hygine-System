<?php
  // Set the page title and include the header file
  $pageTitle = "Contact";
  require_once("template/header.php");
?>
  <!-- Page Content -->
<div class="container">
<div class="content">
  <div class="contactpage">
  <div class="w3-container w3-blue-gray">
    <h2>Contact Form</h2>
  </div>

<div class="contact-form">
  <form name="form" id="form" class="contact-form" action="send.php" method="post">
    <label class="w3-text-blue-gray"><b>Name</b></label>
    <input class="w3-input w3-border w3-light-gray" id="name" name="name" type="text" minlength="1" maxlength="150">

    <label class="w3-text-blue-gray" for="mail"><b>E-mail address</b></label>
    <input class="w3-input w3-border w3-light-gray" type="text" id="mail" name="mail" placeholder="Your e-mail..">

    <label class="w3-text-blue-gray" for="subject"><b>Subject</b></label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" class="w3-input w3-border w3-light-gray"></textarea>

    <button class="w3-btn w3-blue-gray" type="submit" value="Submit" name="submit" id="submit">Submit</button>
  </form>
</div>
</div>
</div>
</div>

<?php 
  // Include the footer template file
  require_once("template/footer.php");
?>