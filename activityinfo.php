<?php 

	session_start();  
	
$activityname = $_POST["activityname"];
$dates = $_POST["dates"];

	/* Connect to database */
	$mysqli = new mysqli('drwatson.zones.eait.uq.edu.au', 'watson', 'watson', 'Centacare');


	/* check connection status */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}



										$stmt = $mysqli->stmt_init();
										$stmt->prepare($query);
										/* execute prepared statement */
										$stmt->execute();
										/* Get the result*/
										$result = $stmt->get_result();
										
										echo($result);
										
							$mysqli->close(); 
	

	// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=activity.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// fetch the data
mysql_connect('drwatson.zones.eait.uq.edu.au', 'watson', 'watson');
mysql_select_db('Centacare');


$rows1 = mysql_query('select column_name from information_schema.columns where
table_name="Activity"');
$a = array();

while ($row1 = mysql_fetch_array($rows1)) {
	array_push($a, $row1[0]);
	}
fputcsv($output, $a);

$rows = mysql_query("select * from 
Activity
	where activityname='$activityname' 
	and dates = '$dates' " );
	
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);



	
	?>