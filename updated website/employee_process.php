<?php
require("database.php");
$link = connect ();

$users = get_users($link);

$userid = '';
$rfid = '';
$username = '';
$department = '';

foreach ($users as $user=>$data){
    if($_GET['id']==$data['UserID']){
        $userid = $data['UserID'];
        $rfid = $data['RFID'];
        $username = $data['UserName'];
        $department = $data['Department'];
        break;
    }
}

$image = "python\images\userImages\user".$userid.".png?nocache=".time();

?>