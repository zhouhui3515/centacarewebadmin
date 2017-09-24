<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Centacare Album</title>
	<link type="text/css" rel="stylesheet" href="css/styles.css"/>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<link type="text/css" rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	<script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	
	<style>
		.carousel-inner > .item > img, .carousel-inner > .item > a > img {
			margin: auto;
		}
	</style>
</head>

<body>
	<div class="container" id="header">
		<header class="row" data-spy="affix" data-offset-top="197"	>
			<div class="col-md-7"><img src="images/logo.png" /></div>
			<nav class="container" >
				<ul class="list-inline">
					<li class="col-md-1"><a href="home.php">Album</a></li>
					<li class="col-md-1"><a href="schedule.php">Schedule</a></li>
					<li class="col-md-1"><a href="user.php">User</a></li>
					<li class="col-md-1"><a href="category.php">Category</a></li>
				</ul>
			</nav>
		</header>
	</div>
	<br>
	<!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <form action="addcategory.php" method="POST">
                                <center>
                                <h2>Add New Category</h2></center>
                                 

                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Interest" name="interest" required> 
                                    </div>

                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Mobility" name="mobility" required> 
                                    </div>

                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Religion" name="religion" required>
                                    </div>

                             

                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Add The Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal -->
		
	<br>
	<div class="container">
	<br>
<center>
	<h2 style="float:center">Category Information Table</h2></center> <br>
					<table id="datatable" class="display" cellspacing="0" >
				        <thead>
				            <tr>
				            	<th>ID</th>
				                <th>Interest</th>
				                <th>Religion</th>
				                <th>Mobility</th>
				            </tr>
				        </thead>
				 
				        <tfoot>
				            <tr>
				           	 	<th>ID</th>
				                <th>Interest</th>
				                <th>Religion</th>
				                <th>Mobility</th>
				            </tr>
				        </tfoot>
				 
				        <tbody>
							<?php
								
								// Connect to database
								$mysqli = new mysqli('localhost', 'tiger', 'tiger', 'centacare');
								/* check connection */
								if (mysqli_connect_errno()) {
									printf("Connect failed: %s\n", mysqli_connect_error());
									exit();
								}

								$query = "SELECT * FROM category";
										$stmt = $mysqli->stmt_init();
										$stmt->prepare($query);
										/* execute prepared statement */
										$stmt->execute();
										/* Get the result*/
										$result = $stmt->get_result();
										while($row = $result->fetch_array(MYSQLI_ASSOC)){
										?>
										<tr>
											<td><?php echo "Category_".$row['category_ID'] ?></td>
							                <td><?php echo $row['interest'] ?></td>
							                <td><?php echo $row['religion'] ?></td>
							                <td><?php echo $row['mobility'] ?></td>

							                
							            </tr>
										<?php 
										}
	
								/* close connection */
								$mysqli->close(); 
							?>
				        </tbody>
	    			</table>

	    			<script>
	    			// Initialize the Datatable plugin
					$(document).ready(function(){
    					$('#datatable').DataTable();
					});

		

				</script>

	    		
				<br><br>
<button class="btn btn-lg btn-primary btn-block" style="width: 80%; margin:auto;" data-toggle="modal" data-target="#myModal" type="button">Add New Category</button>
<br>




				
	</div>
	<br>

	
	<footer class="jumbotron">
		<p>© 2016 Centacare</p>
	</footer>
</body>
</html>