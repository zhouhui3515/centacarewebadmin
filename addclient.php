<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php
				
				$fname = $_POST["fname"];
				$lname = $_POST["lname"];
				$dob = $_POST["dob"];
				$email = $_POST["email"];
				$address = $_POST["address"];
				$phone = $_POST["phone"];
				$emergency = $_POST["emergency"];
				$info = $_POST["info"];
				$category = $_POST["category"];

				/* Connect to database */
				$mysqli = new mysqli('drwatson.zones.eait.uq.edu.au','watson','watson', 'Centacare');

				/* check connection */
				if (mysqli_connect_errno()) {
			    	printf("Connect failed: %s\n", mysqli_connect_error());
			    	exit();
				}

				/* Insert the account information into the admin table */
				$query = "INSERT INTO client (client_fname, client_lname, client_DoB, client_email, client_address, client_phone, client_emergency, client_info, client_category) VALUES (?,?,?,?,?, ?, ?, ?, ?)";
				$stmt = $mysqli->stmt_init();
				$stmt->prepare($query);
				$stmt->bind_Param('sssssiisi', $fname, $lname, $dob, $email, $address, $phone, $emergency, $info, $category);
				$stmt->execute();
				$stmt->close();
				header("Location:".$_SERVER['HTTP_REFERER']); 

				
?>
</body>
</html>