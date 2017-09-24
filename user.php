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
	<title>Centacare Album</title>
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
<body>
	
	<br>
<!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
								<form action="signup.php" method="POST">
                                <center>
                                <h2>Administrator Sign-up</h2></center>
                                    <div class="form-group">                        
                                        <input type="text" class="form-control" placeholder="Username" name="user" required autofocus>    
                                    </div>

                                    <div class="form-group">  
                                        <input type="password" class="form-control" placeholder="Password" name="pass" required> 
                                    </div>
                                    
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Title" name="title" required> 
                                    </div>
                                    
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="First Name" name="fname" required> 
                                    </div>

                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Last Name" name="lname" required> 
                                    </div>
                                    
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Gender" name="gender" required> 
                                    </div>    
                                       
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Email" name="email" required> 
                                    </div>               
                                      
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Tel." name="tel" required> 
                                    </div>          
                                     
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Position" name="position" required> 
                                    </div>            
                                                                                                                                        
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal -->
		
		
	<br><br><br>
	<br>
	<div class="container">
	<br>
<center>
	<h2 >User Information Table</h2></center> <br>

	

	
<table id="datatable" class="display" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>First Name</th>
				                <th>Last Name</th>
				                <th>Title</th>
				                <th>Gender</th>
				                <th>Email</th>
				                <th>Telephone Number</th>
				                <th>Position</th>
				                
				                
				            </tr>
				        </thead>
				 
				        <tfoot>
				            <tr>
				             	<th>First Name</th>
				                <th>Last Name</th>
				                <th>Title</th>
				                <th>Gender</th>
				                <th>Email</th>
				                <th>Telephone Number</th>
				                <th>Position</th>
				             
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

								$query = "SELECT * FROM admin";
										$stmt = $mysqli->stmt_init();
										$stmt->prepare($query);
										/* execute prepared statement */
										$stmt->execute();
										/* Get the result*/
										$result = $stmt->get_result();
										while($row = $result->fetch_array(MYSQLI_ASSOC)){
										?>
										<tr>
							                <td><?php echo $row['first_name'] ?></td>
							                <td><?php echo $row['last_name'] ?></td>
							                <td><?php echo $row['title'] ?></td>
							                <td><?php echo $row['gender'] ?></td>
							                <td><?php echo $row['email'] ?></td>
							                <td><?php echo $row['tel'] ?></td>
							                <td><?php echo $row['position'] ?></td>

							            </tr>
										<?php 
										}
	
								/* close connection */
								$mysqli->close(); 
							?>

							
							
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
