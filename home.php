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
	<link type="text/css" rel="stylesheet" href="css/menustyle2.css"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


	<!--calendar-->
	<link rel='stylesheet' href='css/jquery-ui.min.css' />
	<link href='css/fullcalendar.css' rel='stylesheet' />
	<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
	<script src='js/moment.min.js'></script>
	<script src='js/jquery.min2.js'></script>
	<script src='js/fullcalendar.min.js'></script>


<style type="text/css">

.imgWrap {
  left:10%;
  margin-left: 40px;
  position: relative;
  float: left;
  height: 260px;
  width: 400px;
}

.imgDescription {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: white;
  color: rgba(163,157,157);
  font-size:30px;
  text-align:center;


  visibility: hidden;
  opacity: 0;

  -webkit-transition: visibility opacity 0.2s;
}


.imgWrap:hover .imgDescription {
  visibility: visible;
  opacity: 0.6;
}


		.carousel-inner > .item > img, .carousel-inner > .item > a > img {
			margin: auto;
		}
	</style>
</head>





	<header style="z-index:999;"class="header" id="home" class="navbar navbar-inverse navbar-fixed-top" role="banner">
	 	<div class="container">
	    	<div class="navbar-header">
	    		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
	        		<span class="sr-only">navigation</span>
	        		<span class="icon-bar"></span>
	       			 <span class="icon-bar"></span>
	       			 <span class="icon-bar"></span>
	      		</button>
	    	<img src="images/logo.png" alt="centacarelogo" style="width:40%;height:20%;"/>

	    <!-- Start Navigation -->
	    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation"style=" position: relative;">
	      <ul class="nav navbar-nav menu">

	  		<div class="dropdown">
				<button class="dropbtn">Activity</button>
 				<div class="dropdown-content">
 					<a href="schedule.php">Schedule Activity</a>
   					<a href="viewactivity.php">View Activity</a>
 			 	</div>
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
  					<a name="signup" data-toggle="modal" data-target="#myModal" type="button"  
					<?php if ((string)$_SESSION['username']!="admin"){ echo 'style="display:none;"'; } ?>>Sign Up</a>
  					<a href="Logout.php" >Log Out</a>
  					<a href="user.php" >All staff</a>

 			 	</div>
			</div>

	</header>

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

	<body>

		<section class="mainpage">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/gallery1.jpg" alt="providing Help, creating Hope" height="504">
			</div>

			<div class="item">
				<img src="images/gallery2.png" alt="activity photo" style="width:83.5%;height:30%; ">
			</div>

			<div class="item">
				<img src="images/gallery3.png" alt="activity photo" height="504">
			</div>
		</div>

			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<br>





	<!--calender function-->
	<div id='calendar'></div>
	<script>

	$(document).ready(function() {
		call();
		// var a =  [
		// 		{
		// 			title: 'Long Event',
		// 			start: '2016-09-07',
		// 			end: '2016-09-10'
		// 		},
		// 		{
		// 			id: 999,
		// 			title: 'Repeating Event',
		// 			start: '2016-09-09T16:00:00'
		// 		},
		// 		{
		// 			id: 999,
		// 			title: 'Repeating Event',
		// 			start: '2016-09-16T16:00:00'
		// 		},
		// 		{
		// 			title: 'Conference',
		// 			start: '2016-09-11',
		// 			end: '2016-09-13'
		// 		},
		// 		{
		// 			title: 'Meeting',
		// 			start: '2016-09-12T10:30:00',
		// 			end: '2016-09-12T12:30:00'
		// 		},
		// 		{
		// 			title: 'Lunch',
		// 			start: '2016-09-12T12:00:00'
		// 		},
		// 		{
		// 			title: 'Meeting',
		// 			start: '2016-09-12T14:30:00'
		// 		},
		// 		{
		// 			title: 'Happy Hour',
		// 			start: '2016-09-12T17:30:00'
		// 		},
		// 		{
		// 			title: 'Dinner',
		// 			start: '2016-09-12T20:00:00'
		// 		},
		// 		{
		// 			title: 'Birthday Party',
		// 			start: '2016-09-13T07:00:00'
		// 		},
		// 		{
		// 			title: 'Click for Google',
		// 			url: 'http://google.com/',
		// 			start: '2016-09-28'
		// 		}
		// 	];






	});
    function generateCalendar(evts){
            $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: '2016-10-25',
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            eventLimit: true, // allow "more" link when too many events

            events:evts

        });
    }
    function makeEvents(data){
        var events = [];
        for (var i = 0; i<data.length;i++){
            var dic= {};
            var title = data[i]['activityname'];
            var date = data[i]['dates'];
            var time = data[i]['starttime'];
            var start = date+'T'+time;
            dic['title'] = title;
            dic['start'] = start;
            events.push(dic);
        }
        generateCalendar(events);
    }
    function call(){

            $.ajax({

                       url: "https://drwatson.uqcloud.net/final/getActivity.php",
                       type: 'POST',
                       callback: '?',
                       dataType: 'json',
                       data: {'data':'send'},
                       success: function(a) {
                                           makeEvents(a);
                                             },
                       error: function (xhr, ajaxOptions, thrownError) {
                                    // console.log(xhr.status);
                                    // console.log(thrownError);
                                    alert("error");
                                }
                    });
                                }

</script>
<style>






	#calendar {
		max-width: 1000px;
		min-width:900px;
		padding-top: 200px;
		margin-bottom:100px;
				margin: 100px 180px 100px 180px;
		padding: 0px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;

	}-->

</style>



	<footer class="jumbotron">
		<p>© 2016 Centacare</p>
	</footer>




</body>
</html>