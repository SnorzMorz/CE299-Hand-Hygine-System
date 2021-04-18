<?php
$db = array();



$db['host'] = "localhost";
$db['user'] = "root";
$db['pass'] = "";
$db['name'] = "ce299";
$db['port'] = "3306";

function last30Day() {
	$date = date("Y-m-d");
	
	$dateArray = array();
	$day = "day";
	

	for ($i=0; $i < 30; $i++) {
		$requirment = strtotime("-" . $i . " day");
		$date = date("Y-m-d", $requirment);

		// Push the element to the end of array
		array_push($dateArray, $date);

	}
	return $dateArray;
}

// Retrieve number of scans on each specific date
function countScans($arrayOfDate, $connection) {
	$dailyCount = array();

	foreach ($arrayOfDate as $date) {
		$escapeChars = mysqli_real_escape_string($connection, $date);
		$start = $date . " 00:00:00";
		$end = $date . " 23:59:59";
		$query = "SELECT scans.Scan FROM scans WHERE scans.Scan >= '$start' and scans.Scan <= '$end'";

		$result = mysqli_query($connection, $query);
		$rowOfResult = mysqli_num_rows($result);

		array_push($dailyCount, $rowOfResult);
	}

	return $dailyCount;
}

function connect(){
    // this seems duplicated code might different,
    // but I not sure so i keep it to maximum ensure admin.php is working
    global $db;
    $link = new mysqli($db['host'], $db['user'], $db['pass'], $db['name'], $db['port']);
    if  ($link->connect_errno) {
        die("Failed to connect to MySQL: " . $link->connect_error);
    }
    return $link;
}

function get_user($link, $username) {
    $records = array();

    $stmt = $link->prepare("SELECT * FROM users where UserName = ?");
    if ( !$stmt ) {
        die("could not prepare statement: " . $link->errno . ", error: " . $link->error);
    }
    $results = $stmt->bind_param("s", $username);
    if ( !$results ) {
        die("could not bind params: " . $stmt->error);
    }

    // finally, execute
    if ( !$stmt->execute() ) {
        die("couldn't execute statement");
    }
    // didn't work? return no results

    $results = $stmt->get_result();
    while ( $row = $results->fetch_assoc() ) {
        $record = $row;
    }
	
    return($record);
}

function get_users($link){
	$records = array();

    $results = $link->query("SELECT * FROM users ORDER BY UserName");

    // didn't work? return no results
    if ( !$results ) {
        return $records;
    }

    while ( $row = $results->fetch_assoc() ) {
        $records[] = $row;
    }
    
    return $records;
}

function get_departments($link) {
    $records = array();

    $results = $link->query("SELECT Department FROM ce299.users GROUP BY Department");

    // didn't work? return no results
    if ( !$results ) {
        return $records;
    }

    while ( $row = $results->fetch_assoc() ) {
        $records[] = $row;
	}
	
    return $records;
}
?>