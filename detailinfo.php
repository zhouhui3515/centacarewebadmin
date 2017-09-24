<?php 

	session_start();  
	
$fileno = $_POST["fileno"];

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
header('Content-Disposition: attachment; filename=SupportPlan.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// fetch the data
mysql_connect('drwatson.zones.eait.uq.edu.au', 'watson', 'watson');
mysql_select_db('Centacare');


$rows1 = mysql_query('select column_name from information_schema.columns where
table_name="viewsample"');
$a = array();

while ($row1 = mysql_fetch_array($rows1)) {
	array_push($a, $row1[0]);
	}
fputcsv($output, $a);

$rows = mysql_query("select * from 
ClientBasicInformation 
	NATURAL JOIN ClientBackgroung
	NATURAL JOIN ClientProfile
	NATURAL JOIN DietaryRequirements
    NATURAL JOIN HealthLegalStatus
    NATURAL JOIN IntresComputing
    NATURAL JOIN IntresCrafts
    NATURAL JOIN IntresGames
    NATURAL JOIN IntresHairBeauty
    NATURAL JOIN IntresLeisure
    NATURAL JOIN IntresLiteraryArts
    NATURAL JOIN IntresMenGirlShed
    NATURAL JOIN IntresNaturalTherapies
    NATURAL JOIN IntresOther
    NATURAL JOIN IntresPerforming
    NATURAL JOIN IntresPhysicalActivity
    NATURAL JOIN IntresVisualArts
    NATURAL JOIN Medication
    NATURAL JOIN MobilityandWellbeing
    NATURAL JOIN NonResponsetoScheduledVisit
    NATURAL JOIN SelfCare
    NATURAL JOIN ServiceDetails
    NATURAL JOIN SocialSupport
    NATURAL JOIN SupportAidsUsed
    NATURAL JOIN TransportRequirements

	where ClientBasicInformation.FileNo='$fileno' 
	group by ClientBasicInformation.FileNo");
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);

	
	?>