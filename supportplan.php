<?PHP
	session_start();
	if(empty($_SESSION['username'])){
		header("Location: index.php");
		echo "<br>empty username<br>";
		exit();
	}else{
	
		
	}
?>
<html>

	<head>
	
	<link type="text/css" rel="stylesheet" href="css/page2style.css"/>
	<link type="text/css" rel="stylesheet" href="css/menustyle2.css"/>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="css/styles.css"/>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">

		textarea {
			width:600px;
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
	    	<div class="col-md-7"><a href="home.php"><img src="images/logo.png" /></a></div>
 
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
		      
		 <body >       
         <br/><br/> <br/>     
         <title>Support Plan</title></br>
		<h1>Support Plan</h1></br>
    	<title>Centacare Album</title>
	<form id=addclient action="interest.php" method="POST"style="font-size:19px;" >
	
	<!-- this three attribute go to TABLE " Client Basic Information" in the database -->
	Client Name <input type="text" name="cname" class="Computing"/>
	D.O.B. <input type="text" name="dob" class="Computing" placeholder="yyyy-mm-dd"/>
	File No. <input type="text" name="fno" class="Computing"/></br>
	
	<h2>Self Care</h2>
	<input type="checkbox" name="Independent" value="Yes" class="Self Care"/>Independent 
	<input type="checkbox" name="RequiresSupervision" value="Yes" class="Self Cares"/>Requires Supervision 
	<input type="checkbox" name="RequiresAssistance" value="Yes" class="Self Cares"/>Requires Assistance  
	<input type="checkbox" name="SpecificRoutine" value="Yes" class="Self Cares"/>Has a Specific Routine
	<input type="checkbox" name="ContinenceCare" value="Yes" class="Self Cares"/><I>Continence Care</I>
	<input type="checkbox" name="selfbladder" value="Yes" class="Self Cares"/>Bladder
	<input type="checkbox" name="selfbowel" value="Yes" class="Self Cares"/>Bowel
	</br><strong>Additional Information </strong>
	</br><textarea row="5" col="50" name ="SelfcareAdditionalInformation" form="addclient" class = "Self Cares"></textarea><br>
	</br></br>
	
	
	<h2>My Interests </h2>
	
	<strong>Computing</strong></br>
	<input type="checkbox" name="Email" value="Yes" class="Computing"/>Email 
	<input type="checkbox" name="Games" value="Yes" class="Computing"/>Games 
	<input type="checkbox" name="Internet" value="Yes" class="Computing"/>Internet 
	</br></br>
	
	<strong>Literary Arts</strong></br>
	<input type="checkbox" name="Poetry" value="Yes" class="Literary Arts"/>Poetry 
	<input type="checkbox" name="Novels" value="Yes" class="Literary Arts"/>Novels 
	<input type="checkbox" name="Shortstories" value="Yes" class="Literary Arts"/>Short Stories  
	</br> </br> 
	
	<strong>Games</strong></br>
	<input type="checkbox" name="Bingo" value="Yes" class="Games"/>Bingo 
	<input type="checkbox" name="Cards" value="Yes" class="Games"/>Cards 
	<input type="checkbox" name="ChessCheckers" value="Yes" class="Games"/>Chess/Checkers 
	<input type="checkbox" name="Jigsaws" value="Yes" class="Games"/>Jigsaws 
	<input type="checkbox" name="Trivia" value="Yes" class="Games"/>Trivia 
	<input type="checkbox" name="WorldPuzzles" value="Yes" class="Games"/>World Puzzles 
	</br></br> 
	
	<strong>Performing Art</strong></br>
	<input type="checkbox" name="ConcertsMusic" value="Yes" class="Performing Art"/>Concerts/Music 
	<input type="checkbox" name="DanceBallet" value="Yes" class="Performing Art"/>Dance/Ballet 
	<input type="checkbox" name="Opera" value="Yes" class="Performing Art"/>Opera 
	<input type="checkbox" name="Plays" value="Yes" class="Performing Art"/>Plays 
	<input type="checkbox" name="Singing" value="Yes" class="Performing Art"/>Singing 
	<input type="checkbox" name="TheatreDrama" value="Yes" class="Performing Art"/>Theatre/Drama 
	<br><br> 
	
	<strong>Leisure</strong></br>
	<input type="checkbox" name="EatingOut" value="Yes" class="Leisure"/>Eating Out 
	<input type="checkbox" name="FilmsMovies" value="Yes" class="Leisure"/>Films/Movies 
	<input type="checkbox" name="GalleriesMuseums" value="Yes" class="Leisure"/>Galleries/Museums 
	<input type="checkbox" name="Outings" value="Yes" class="Leisure"/>Outings 
	<input type="checkbox" name="Picnics" value="Yes" class="Leisure"/>Picnics 
	<input type="checkbox" name="Shopping" value="Yes" class="Leisure"/>Shopping 
	<br><br> 
	
	<strong>Visual Arts</strong></br>
	<input type="checkbox" name="Architecture" value="Yes" class="Visual Arts"/>Architecture 
	<input type="checkbox" name="Drawing" value="Yes" class="Visual Arts"/>Drawing 
	<input type="checkbox" name="Fashion" value="Yes" class="Visual Arts"/>Fashion 
	<input type="checkbox" name="Painting" value="Yes" class="Visual Arts"/>Painting 
	<input type="checkbox" name="Photography" value="Yes" class="Visual Arts"/>Photography 
	<input type="checkbox" name="PotterySculpture" value="Yes" class="Visual Arts"/>Pottery/Sculpture 
	<br><br> 
	
	<strong>Hair/Beauty</strong></br>
	<input type="checkbox" name="Hairdressing" value="Yes" class="Hair/Beauty"/>Hairdressing 
	<input type="checkbox" name="Facials" value="Yes" class="Hair/Beauty"/>Facials 
	<input type="checkbox" name="Manicures" value="Yes" class="Hair/Beauty"/>Manicures 
	<input type="checkbox" name="Pedicures" value="Yes" class="Hair/Beauty"/>Pedicures 
	<br><br> 
	
	<strong>Other</strong> </br>
	<input type="checkbox" name="MenShed" value="Yes" class="Other"/>Men's Shed 
	<input type="checkbox" name="GirlShed" value="Yes" class="Other"/>Girl's Shed 
	<input type="checkbox" name="BicycleRepairs" value="Yes" class="Other"/>Bicycle Repairs 
	<input type="checkbox" name="Framing" value="Yes" class="Other"/>Framing 
	<input type="checkbox" name="Metalwork" value="Yes" class="Other"/>Metal work 
	<input type="checkbox" name="Woodwork" value="Yes" class="Other"/>Wood work 
	<br><br> 
	
	<strong>Physical Activity</strong> </br>
	<input type="checkbox" name="Fishing" value="Yes" class="Physical Activity"/>Fishing 
	<input type="checkbox" name="Gardening" value="Yes" class="Physical Activity"/>Gardening 
	<input type="checkbox" name="Golf" value="Yes" class="Physical Activity"/>Golf 
	<input type="checkbox" name="LawnBowls" value="Yes" class="Physical Activity"/>Lawn Bowls 
	<input type="checkbox" name="SailingBoating" value="Yes" class="Physical Activity"/>Sailing/Boating 
	<input type="checkbox" name="Snooker" value="Yes" class="Physical Activity"/>Snooker 
	<input type="checkbox" name="Swimming" value="Yes" class="Physical Activity"/>Swimming 
	</br>
	<input type="checkbox" name="TaiChi" value="Yes" class="Physical Activity"/>Tai Chi 
	<input type="checkbox" name="Tennis" value="Yes" class="Physical Activity"/>Tennis 
	<input type="checkbox" name="TenPinBowling" value="Yes" class="Physical Activity"/>Ten Pin Bowling 
	<input type="checkbox" name="Walking" value="Yes" class="Physical Activity"/>Walking
	<input type="checkbox" name="Yoga" value="Yes" class="Physical Activity"/>Yoga 
	<br><br> 
	
	<strong>Crafts</strong> </br>
	<input type="checkbox" name="CardMaking" value="Yes" class="Crafts"/>Card Making 
	<input type="checkbox" name="Crochet" value="Yes" class="Crafts"/>Crochet 
	<input type="checkbox" name="Craftwork" value="Yes" class="Crafts"/>Craftwork
	<input type="checkbox" name="Jewellery" value="Yes" class="Crafts"/>Jewellery Making 
	<input type="checkbox" name="Knitting" value="Yes" class="Crafts"/>Knitting 
	<input type="checkbox" name="Needlework" value="Yes" class="Crafts"/>Needlework 
	<br><br> 
	
	<strong>Natural Therapies</strong> <br>
	<input type="checkbox" name="Aromatherapy" value="Yes" class="Natural Therapies"/>Aromatherapy 
	<input type="checkbox" name="Massage" value="Yes" class="Natural Therapies"/>Massage 
	<input type="checkbox" name="Meditation" value="Yes" class="Natural "/>Meditation 
	<input type="checkbox" name="Relaxation" value="Yes" class="Natural Therapies"/>Relaxation
	<br><br> 
	
	<strong>Other2</strong> </br>
	<input type="checkbox" name="Cooking" value="Yes" class="Other2"/>Cooking 
	<input type="checkbox" name="FlowerArranging" value="Yes" class="Other2"/>Flower Arranging 
	<input type="checkbox" name="Education" value="Yes" class="Other2"/>Education 
	<input type="checkbox" name="Languages" value="Yes" class="Other2"/>Languages 
	<input type="checkbox" name="ModelBuilding" value="Yes" class="Other2"/>Model Building 
	<input type="checkbox" name="Volunteering" value="Yes" class="Other2"/>Volunteering 
	</br></br> 
	
	<!--staying well active program-->
	<h2>Client Information</h2>
	
	<strong>Health/Legal Status</strong>
	</br>
	<input type = "checkbox" name = "diagonse" value="Yes" class = "HealthLegalStatus"/>Diagnosed Health Condition (refer Medical Summary)
	<input type = "checkbox" name = "cogn" value="Yes" class = "HealthLegalStatus"/>Cognitive Impairment
	<input type = "checkbox" name = "lock" value="Yes" class = "HealthLegalStatus"/>Locked Box for Medication </br>
	<input type = "checkbox" name = "alarm" value="Yes" class = "HealthLegalStatus"/>Pendant Alarm 
	<input type = "checkbox" name = "allergy" value="Yes" class = "HealthLegalStatus"/>Allergies</br>
	<input type = "checkbox" name = "caredirective" value="Yes" class = "HealthLegalStatus"/>Advance Health Care Directive (refer File)	
	<input type = "checkbox" name = "attorney" value="Yes" class = "HealthLegalStatus"/>Power of Attorney
	<input type = "checkbox" name = "endurattory" value="Yes" class = "HealthLegalStatus"/>Enduring Power of Attorney
	</br>
	<input type = "checkbox" name = "perferhos" value="Yes" class = "HealthLegalStatus"/>Preferred Hospital
	</br>
	</br><textarea row="2" col="50" name ="perferhospital" form="addclient" class = "HealthLegalStatus"></textarea><br>
	</br>
	<strong>Additional Information </strong>
	</br><textarea row="2" col="50" name ="healthinf" form="addclient" class = "HealthLegalStatus"></textarea><br>
	</br>
	
	
	<strong>Mobility and Wellbeing</strong>
	</br>
	<input type = "checkbox" name = "Independent" value="Yes" class = "Mobility and Wellbeing"/>Independent 
	<input type = "checkbox" name = "RequiresSupervision" value="Yes" class = "Mobility and Wellbeing"/>Requires Supervision 
	<input type = "checkbox" name = "RequiresAssistance" value="Yes" class = "Mobility and Wellbeing"/>Requires Assistance 
	<input type = "checkbox" name = "FallsRisk" value="Yes" class = "Mobility and Wellbeing"/>Falls Risk </br>
	<input type = "checkbox" name = "mobilitydisaster" value="Yes" class = "Mobility and Wellbeing"/>Requires assistance in the event of disaster or pandemic 
	</br>
	<strong>Additional Information </strong>
	</br><textarea row="2" col="50" name ="mobilityinf" form="addclient" class = "Mobility and Wellbeing"></textarea><br>
	</br>
	
	
	<strong>Non-Response to Scheduled Visit</strong>
	</br>
	Contact Name: <input type="text" name="conname1" class="NonResponsetoScheduledVisit"/>
	Telephone <input type="text" name="tel1" class="NonResponsetoScheduledVisit"/>
	</br>
	
	Contact Name: <input type="text" name="conname2" class="NonResponsetoScheduledVisit"/>
	Telephone <input type="text" name="tel2" class="NonResponsetoScheduledVisit"/>
	</br>
	Contact Name: <input type="text" name="conname2" class="NonResponsetoScheduledVisit"/>
	Telephone <input type="text" name="tel3" class="NonResponsetoScheduledVisit"/>	
	</br>
	
	<strong>Additional Information </strong>
	</br><textarea row="2" col="50" name ="resinf" form="addclient" class = "Mobility and Wellbeing"></textarea><br>
	</br>
	
	
	<strong>Support Aids Used</strong>
	</br>

	<input type = "checkbox" name = "supnone" value="Yes" class = "SupportAidsUsed"/>None
	<input type = "checkbox" name = "walker" value="Yes" class = "SupportAidsUsed"/>Walker/ Walking Stick 
	<input type = "checkbox" name = "glasses" value="Yes" class = "SupportAidsUsed"/>Glasses</br>
	<input type = "checkbox" name = "hear" value="Yes" class = "SupportAidsUsed"/>Hearing Aids
	<input type = "checkbox" name = "left" value="Yes" class = "SupportAidsUsed"/>Left
	<input type = "checkbox" name = "right" value="Yes" class = "SupportAidsUsed"/>Right
	<input type = "checkbox" name = "both" value="Yes" class = "SupportAidsUsed"/>Both
	<input type = "checkbox" name = "dentures" value="Yes" class = "SupportAidsUsed"/>Dentures	
	</br>
	
	<strong>Additional Information </strong>
	</br><textarea row="2" col="50" name ="supinf" form="addclient" class = "SupportAidsUsed"></textarea><br>
	</br>
	
	
	<strong>Transport Requirements</strong>
	</br>
	Own Transport:
	<input type = "checkbox" name = "morn1" value="Yes"class = "Transport Requirements"/>Morning Drop-Off
	<input type = "checkbox" name = "after1" value="Yes"class = "Transport Requirements"/>Afternoon Pick-Up
	<input type = "checkbox" name = "both1" value="Yes"class = "Transport Requirements"/>Both Ways
	
	
	</br>
	Centre Transport:
	<input type = "checkbox" name = "morn2" value="Yes"class = "Transport Requirements"/>Morning Drop-Off
	<input type = "checkbox" name = "after2" value="Yes"class = "Transport Requirements"/>Afternoon Pick-Up
	<input type = "checkbox" name = "both2" value="Yes"class = "Transport Requirements"/>Both Ways
	</br>
	
	Preferred Mode of Transport:
	<input type = "checkbox" name = "mini" value="Yes"class = "Transport Requirements"/>Mini Bus
	<input type = "checkbox" name = "car" value="Yes"class = "Transport Requirements"/>Car
	</br>
	Additional Information 
	</br><textarea row="2" col="50" name ="transinf" form="addclient" class = "SupportAidsUsed"></textarea><br>
	</br>
	
	
	
	<h2>Dietary Requirements</h2>
	<input type = "checkbox" name = "Allergies" value="Yes"class = "Dietary Requirements"/>Allergies (refer to Health Summary)</br> 
	<input type = "checkbox" name = "SpecialDietaryNeeds" value="Yes"class = "Dietary Requirements"/>Special Dietary Needs 
	<input type = "checkbox" name = "Vegetarian" value="Yes"class = "Dietary Requirements"/>Vegetarian 
	<input type = "checkbox" name = "GlutenFree" value="Yes"class = "Dietary Requirements"/>Gluten Free 
	<input type = "checkbox" name = "LactoseIntolerant" value="Yes"class = "Dietary Requirements"/>Lactose Intolerant 
	<input type = "checkbox" name = "Other3" value="Yes"class = "Dietary Requirements"/>Other</br>
	<input type = "checkbox" name = "FoodLikesDislikes" value="Yes"class = "Dietary Requirements">Food Likes/Dislikes
	<input type = "checkbox" name = "CulturalFoodPreparation" value="Yes"class = "Dietary Requirements"/>Cultural Food Preparation</br>
	<input type = "checkbox" name = "Independent" value="Yes"class = "Dietary Requirements">Independent
	<input type = "checkbox" name = "RequiresSupervision" value="Yes"class = "Dietary Requirements"/>Requires Supervision
	<input type = "checkbox" name = "RequiresAssistance" value="Yes"class = "Dietary Requirements"/>Requires Assistance
	<input type = "checkbox" name = "SpecificRoutine" value="Yes"class = "Dietary Requirements"/>Specific Routine
	</br><strong>Additional Information</strong> 
	</br><textarea row="5" col="50" name ="DietaryAdditionalInformation" form="addclient" class = "Dietary Requirements"></textarea><br>
	</br></br>
	

	<h2>Medication</h2>
	Pension Number   <input type="text" name="pension" class="Medication"/></br>
	<input type="checkbox" name="notrequiremedication" value="Yes" class="Medication"/>I do not require medication whilst attending the Staying Well & Active Program 
	</br>
	<input type="checkbox" name="requiremedication" value="Yes" class="Medication"/>I do require medication(refer to Medications List and Client Medication Summary)
	</br><strong>Additional Information </strong>
	</br><textarea row="5" col="50" name ="MedicationAdditionalInformation" form="addclient" class = "Medication"></textarea><br>
	<br>
	<strong>COMPLETE THIS INFORMATION IF MEDICATION REQUIRED</strong>
	</br>
	Pharmacy Name <input type="text" name="PharmacyName" class="Medication"/>
	Telephone <input type="text" name="Telephone" class="Medication"/></br>
	Street Address <input type="text" name="StreetAddress" class="Medication"/>
	</br>
	Suburb <input type="text" name="Suburb" class="Medication"/>
	Postcode <input type="text" name="Postcode" class="Medication"/></br>
	Business Hours <input type="text" name="BusinessHours" class="Medication"/>
	</br></br>
	
	
	
	
	<h2>Social Support</h2>
	<input type="checkbox" name="Shopping" value="Yes" class="Social Support"/>Shopping 
	<input type="checkbox" name="Appointments" value="Yes" class="Social Support"/>Appointments
	<input type="checkbox" name="Other4" value="Yes" class="Social Support"/>Other 
	<input type="checkbox" name="DisabilityParkingPermit" value="Yes" class="Social Support"/>Disability Parking Permit 
	<input type="checkbox" name="CashHandling" value="Yes" class="Social Support"/>Cash Handling(A Cash Handling Form must be completed on each occasion of service) 
	</br><strong>Additional Information </strong>
	</br><textarea row="5" col="50" name ="SocialAdditionalInformation" form="addclient" class = "Social Support"></textarea><br>
	<br><br>
	
	<h2>Client Profile</h2>
	What/who is important to me
	</br><textarea row="6" col="50" name ="whatimportant" form="addclient" class = "Client Profile"></textarea></br>
	Things I need to have a "good day"
	</br><textarea row="6" col="50" name ="thingsneed" form="addclient" class = "Client Profile"></textarea></br>
	How I like to spend my time
	</br><textarea row="6" col="50" name ="spendtime" form="addclient" class = "Client Profile"></textarea></br>	
	My strengths and personal qualities
	</br><textarea row="6" col="50" name ="strengths" form="addclient" class = "Client Profile"></textarea></br>
	How best to support me
	</br><textarea row="6" col="50" name ="support" form="addclient" class = "Client Profile"></textarea></br>	
	What would I like to achieve from this service?
	</br><textarea row="6" col="50" name ="achieve" form="addclient" class = "Client Profile"></textarea></br>
	The role I would like to have in arranging this support
	</br><textarea row="6" col="50" name ="role" form="addclient" class = "Client Profile"></textarea></br>
	</br></br>

	
	<h2>Client Background</h2>
	<strong>Interests and Activities</strong>
	</br><textarea row="6" col="50" name ="backgroundInterests" form="addclient" class = "Client Background"></textarea></br>
	</br>
	<strong>Additional Information </strong>
	</br><textarea row="6" col="50" name ="backgroundinformation" form="addclient" class = "Client Background"></textarea><br>
	<strong>Cultural/Social/Spiritual Considerations</strong>
	</br><textarea row="6" col="50" name ="Considerations" form="addclient" class = "Client Background"></textarea></br>
	<strong>Social Network</strong>
	</br>(e.g. family, friends, neighbours)</br>
	<input type="checkbox" name="contact1" value="Yes" class="Client Background"/>Rugular Contact/Support 
	<input type="checkbox" name="contact2" value="Yes" class="Client Background"/>Periodic Contact/Support 
	<input type="checkbox" name="contact3" value="Yes" class="Client Background"/>Little Contact/Support 			
	</br><strong>Details</strong> 
	</br><textarea row="6" col="50" name ="backgroundDetails" form="addclient" class = "Client Background"></textarea><br>
	</br></br>
	
	<h2>Life History</h2>
	(e.g. early life, education, occupation/s, places lived, places travelled, highlights, achievements etc.)
	</br><strong>Details </strong>
	</br><textarea row="26" col="100" name ="historydetail" form="addclient" class = "Client Background"></textarea><br>
	</br></br>
	
	<h2>Client Goals and Strategies</h2>
	[Name of client] has stated that he/she would like to remain living independently in their own home for as long as
	possible and wishes to enjoy social activities in a community-based setting. By attending at the Centre and participating 
	in the Staying Well & Active Program, [Name of client] is achieving this goal. Staff will encourage the client to participate in meaningful
	activities of choice and promote client independence, whenever appropriate, using a person-centred philosophy of care.
	</br><strong>Details</strong> 
	</br><textarea row="10" col="50" name ="GoalDetails" form="addclient" class = "Client Background"></textarea><br>	
	<h2>Carer Goals and Strategies</h2>
	[Name of client] has stated that when [Name of client] attends the Staying Well & Active Program,
	they can take a short break from their caring role and attend to everyday activities knowing that [Name of client]
	is in a safe and supportive environment and enjoying social activities.
	</br></br>
	</br><strong>Details</strong> 
	</br><textarea row="10" col="50" name ="CarerDetails" form="addclient" class = "Client Background"></textarea><br>	
	
	<h2>Service Details</h2>
	<strong>Funding Type </strong>
	</br>
	<input type="checkbox" name="VHC" value="Yes" class="Service Details"/>VHC 
	<input type="checkbox" name="BP4H" value="Yes" class="Service Details"/>BP4H
	<input type="checkbox" name="CHSP" value="Yes" class="Service Details"/>CHSP
	<input type="checkbox" name="QCCS" value="Yes" class="Service Details"/>QCCS
	<input type="checkbox" name="HomeCarePackage" value="Yes" class="Service Details"/>Home Care Package
	<input type="checkbox" name="QHDRYOSD" value="Yes" class="Service Details"/>QHDR - YOSD	
	</br>
	<strong>Service Type</strong>
	</br>
	<input type="checkbox" name="Domestic" value="Yes" class="Service Details"/>Domestic Assitance
	<input type="checkbox" name="PersonalCare" value="Yes" class="Service Details"/>Personal Care
	<input type="checkbox" name="SocialSupport" value="Yes" class="Service Details"/>Social Support
	<input type="checkbox" name="InHomeRespite" value="Yes" class="Service Details"/>In-Home Respite </br>
	<input type="checkbox" name="StayingWellActiveProgram" value="Yes" class="Service Details"/>Staying Well & Active Program
	<input type="checkbox" name="OvernightRespite" value="Yes" class="Service Details"/>Overnight Respite
	<input type="checkbox" name="other5" value="Yes" class="Service Details"/>Other
	</br>Frequency <input type="text" name="Frequency" class="Service Details"/>
	Day/s <input type="text" name="Days" class="Service Details"/>
	Duration <input type="text" name="Duration" class="Service Details"/>
	Time <input type="text" name="Time" class="Service Details"/>
	</br>
	<strong>Cost:</strong> Refer to Service Agreement OR Service Confirmation Letter</br>
	<strong>Billing Instructions:</strong> Refer to Service Agreement OR Service Confirmation Letter
	</br></br>
	
	<h2>Risk Management</h2>
	<strong>First Evacuation & Emergency Plan</strong>
	In the event of fire or emergency, safely evacuate client from building to car park and follow instructions.
	</br>
	<strong>Workplace Health & Safety</strong>
	Chent welfare is a priority. Staff adhere to Centacare Community Services policies and procedures at all times.
	</br>
	<strong>Own Personal Care</strong>
	All staff are required to do a risk assessment BEFORE AND AFTER providing Personal Care. 
	Staff to be aware of open wounds and take care with dressings that have been applied to wounds.
	</br></br>
	
	<h2>Additional Information</h2>

	<strong>Our Commitment To You </strong>
	</br>
	Centacare Community Services Enoggera is privileged to be your service provider. We are committed to
	providing a high quality service that meets your needs and preferences as outlined in this Support Plan.
	Our staff will support you to the best of their ability as per this Support Plan. If you find that you have
	additional requirements, please contact the office so we can discuss these with you and review your 
	Support Plan.<br/><br/>
	We aim to provide your service as per the Service Details outlined in this Support Plan. There may be 
	times, however, when this is not convenient for you or we are unable to provide the service due to circumstances beyond our control. lf we need 
	to change your servce, we will telephone you as soon as possile to reschedule your service. If you need to change your service, we would appreciate you calling
	us<em> at least 24 hours prior<em> to your service so that we can reschedule your service.
	<br/>
	<br/>


	
	
	
	<input type="submit" name="formSubmit" value="Submit" style="width:100px; height:40px;"/>
		
	</form>
	</body>
</html>
