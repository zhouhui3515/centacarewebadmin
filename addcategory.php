<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php
				
				$interest = $_POST["interest"];
				$mobility = $_POST["mobility"];
				$religion = $_POST["religion"];


				/* Connect to database */
				$mysqli = new mysqli('localhost', 'tiger', 'tiger', 'centacare');

				/* check connection */
				if (mysqli_connect_errno()) {
			    	printf("Connect failed: %s\n", mysqli_connect_error());
			    	exit();
				}

				/* Insert the account information into the admin table */
				$query = "INSERT INTO category (interest, mobility, religion) VALUES (?,?,?)";
				$stmt = $mysqli->stmt_init();
				$stmt->prepare($query);
				$stmt->bind_Param('sss', $interest, $mobility, $religion);
				$stmt->execute();
				$stmt->close();
				header("Location:".$_SERVER['HTTP_REFERER']); 

				
?>
</body>
</html>