<?php

require ("database.php");
$link = connect();
if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['subject'])){
	require ("contact.php");
	
	$name=$link->real_escape_string($_POST['name']);
	$mail=$link->real_escape_string($_POST['mail']);
	$subject=$link->real_escape_string($_POST['subject']);

	
	$sql = "INSERT INTO form(name, mail, subject) VALUES('".$name."','".$mail."', '".$subject."')";
	$result = $link->query($sql);

	if(!$result){
	echo "Please fill Name and Email ";
	}
	else
	{
	echo "Thank you! We will contact you soon";
	}
}
?>