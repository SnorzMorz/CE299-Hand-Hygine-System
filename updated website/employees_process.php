<?php
require("database.php");
$link = connect();

$users = get_users($link);
$departments = get_departments($link);

function create_line($data){
    echo "<div class = line><ul>";
    echo "<div class = idnum> <li>" . $data["RFID"] . " </li></div>";
    echo "<div class=username><li><a href=\"" . "employee.php?" . "id=" . $data['UserID'] . "\">" . $data["UserName"] . "</a></li></div>";
    echo "<div class=deparment><li>" . $data["Department"] . "</li></div>";
    echo "</ul></div>";
}

?>