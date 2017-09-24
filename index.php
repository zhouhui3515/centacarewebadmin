<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Centacare Schedule</title>
	<link type="text/css" rel="stylesheet" href="css/styles.css"/>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	

</head>

<body>
	<div class="container" id="header">
		<header class="row" data-spy="affix" data-offset-top="197"	>
			<div class="col-md-7"><img src="images/logo.png" /></div>
		</header>
	</div>
	
	<br>
	<div id="banner">
	    </br>
	    </br>
		<p class="container">Administrator Sign-in System Page</p>
		<img src="images/banner.png"/>
	</div>


	<center>
	<div class="container" style="width: 50%">

	<form action="login.php" method="POST" >
	<center>
		<h2>Login As Administrator</h2></center>
                                
        <div class="form-group">
                                                         
        	<input type="text" class="form-control" placeholder="Username" name="user" required autofocus>   
                                  
        </div>
                                 
        <div class="form-group">  
                                    
          <input type="password" class="form-control" placeholder="Password" name="pass" required>
        </div>  
                                    
                              
                                    
         <div class="form-group">
                                     
             <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" style="width: 35%; float: centre; margin: 30px;">Login</button>
                                      
        </div>  
                               
     </form>
	</div>
	</center>
	<br><br><br>
	<footer class="jumbotron">
		<p>© 2016 Centacare</p>
	</footer>
</body>
</html>