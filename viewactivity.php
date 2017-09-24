<?PHP
	session_start();
	if(empty($_SESSION['username'])){
		header("Location: index.php");
		echo "<br>empty username<br>";
		exit();
	}else{
	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Centacare</title>
	<link type="text/css" rel="stylesheet" href="css/styles.css"/>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/datatable.css">
    <link type="text/css" rel="stylesheet" href="css/menustyle2.css"/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">


	<script src="//code.jquery.com/jquery-1.12.3.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/datatable.js"></script>


<script>
	    			// Initialize the Datatable plugin
					$(document).ready(function(){
    					$('#datatable').DataTable();
					});
		 

				</script>
	
	
	<style>
		.carousel-inner > .item > img, .carousel-inner > .item > a > img {
			margin: auto;
		}
	</style>
</head>


	<header style="z-index:999;"class="header" id="interest" class="navbar navbar-inverse navbar-fixed-top" role="banner">
	 	<div class="container">
	    	<div class="navbar-header">
	    		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
	        		<span class="sr-only">navigation</span>
	        		<span class="icon-bar"></span>
	       			 <span class="icon-bar"></span>
	       			 <span class="icon-bar"></span>
	      		</button>
	    	<a href="home.php"><img src="images/logo.png" alt="centacarelogo" style="width:40%;height:20%;"/></a>
	    	
 
	    <!-- Start Navigation -->
	    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation"style=" position: relative;">
	      <ul class="nav navbar-nav menu">	
	  	
	  		<div class="dropdown"> 				 			 
				<button class="dropbtn">Activity</button>
 				<div class="dropdown-content">
 					<a href="schedule.php">Schedule Activity</a>
   					<a href="viewactivity.php">View Activity</a>
 			 	</div>	
 			 	</br>		 
			</div> 	
	  		<div class="dropdown"> 		 
				<button class="dropbtn">Client</button>
 				<div class="dropdown-content">
 					<a href="supportplan.php">Add Client</a>
   					<a href="viewclient.php">All Clients</a>
 			 	</div>
 			</div> 	
 
 	  		<div class="dropdown">
 		 		<button class="dropbtn">Administrator</button>
 			 	<div class="dropdown-content">
  					<a href="Logout.php" >Log Out</a>
  					<a href="user.php" >All staff</a>
  					
 			 	</div>
			</div>
 	  		<div class="dropdown" >
 		 		<a href="home.php" ><button class="dropbtn">
  					Home
  				</button></a>
			</div>
	</header>
	<br>
	<body>

	<br>
	<div class="container">
	<br>
<center>
</br></br></br>
	<h2 style="float:center">Activity Scheduel Table</h2></center> <br>

<table id="datatable" class="display" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>Activity Name</th>
				                <th>Date</th>
				                <th>Location</th>
				                <th>Start time</th>
				                <th>Download Activity information</th>

				            </tr>
				        </thead>

				        <tfoot>
				            <tr>
				                <th>Activity Name</th>
				                <th>Date</th>
				                <th>Location</th>
				                <th>Start time</th>
				                <th>Download Activity information</th>


				            </tr>
				        </tfoot>

				        <tbody>

							<?php

								// Connect to database
								$mysqli = new mysqli('drwatson.zones.eait.uq.edu.au','watson','watson', 'Centacare');
								/* check connection */
								if (mysqli_connect_errno()) {
									printf("Connect failed: %s\n", mysqli_connect_error());
									exit();
								}

								$query = "SELECT * FROM Activity
								group by activityname, dates";
										$stmt = $mysqli->stmt_init();
										$stmt->prepare($query);
										/* execute prepared statement */
										$stmt->execute();
										/* Get the result*/
										$result = $stmt->get_result();
										while($row = $result->fetch_array(MYSQLI_ASSOC)){
										?>
										<tr>
							                <td><?php echo $row['activityname'] ?></td>
							                <td><?php echo $row['dates'] ?></td>
							                <td><?php echo $row['location'] ?></td>
							                <td><?php echo $row['starttime'] ?></td> 
							                <td> 
							            <form id="sampleForm" name="sampleForm" method="POST" action="activityinfo.php">
	<input type="hidden" name="activityname" id="activityname" value= "<?php echo $row['activityname'] ?>"> 
	<input type="hidden" name="dates" id="dates" value= "<?php echo $row['dates'] ?>"> 
	
	<input type="submit" value="Download">  </form>
							    </td>   </tr>
							    
										<?php
										}
								/* close connection */
								$mysqli->close();
							?>

				<script>
		$(document).ready(function () {
   			 $("tr").click(function(){
         var thirdData  = $(this).closest('tr').children('td:eq(2)').html();

    });
});

</script>

			</tbody>
	    		</table>
   		
				<br><br>
<br>




				
	</div>
	<br>

	
	<footer class="jumbotron">
		<p>© 2016 Centacare</p>
	</footer>
</body>
</html>