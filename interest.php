<html>
<p>submitted.</p>
</html>
<?php
//get data from html form

$cn = $_POST["cname"];
$dob = $_POST["dob"];
$fn = (int)$_POST["fno"];
$dietaryinf = $_POST["DietaryAdditionalInformation"];
$mobilityinf= $_POST["mobilityinf"];


//health/legal infor
$perferhospital=$_POST["perferhospital"];
$healthinf=$_POST["healthinf"];

//non response to scheduled visit

$conname1=$_POST["conname1"];
$conname2=$_POST["conname2"];
$conname3=$_POST["conname3"];
$tel1=$_POST["tel1"];
$tel2=$_POST["tel2"];
$tel3=$_POST["tel3"];
$resinf=$_POST["resinf"];

$supinf=$_POST["supinf"];
$transinf=$_POST["transinf"];




//medication
$pension=$_POST["pension"];
$MedicationAdditionalInformation= $_POST["MedicationAdditionalInformation"];
$PharmacyName= $_POST["PharmacyName"];
$Telephone= $_POST["Telephone"];
$StreetAddress= $_POST["StreetAddress"];
$Suburb= $_POST["Suburb"];
$Postcode= $_POST["Postcode"];
$BusinessHours= $_POST["BusinessHours"];
//selfcare
$SelfcareAdditionalInformation= $_POST["SelfcareAdditionalInformation"];
//social
$SocialAdditionalInformation= $_POST["SocialAdditionalInformation"];
//client profile
$whatimportant= $_POST["whatimportant"];
$thingsneed= $_POST["thingsneed"];
$spendtime = $_POST["spendtime" ];
$strengths = $_POST["strengths"];
$support = $_POST["support"];
$achieve = $_POST["achieve"];
$role = $_POST["role" ];
//client backgound
$backgroundInterests= $_POST["backgroundInterests"];
$backgroundinformation= $_POST["backgroundinformation"];
$Considerations = $_POST["Considerations" ];
$backgroundDetails = $_POST["backgroundDetails"];
$historydetail = $_POST["historydetail"];

$GoalDetails= $_POST["GoalDetails"];
$CarerDetails= $_POST["CarerDetails"];

//service

$serviceFrequency= $_POST["Frequency"];
$serviceDays= $_POST["Days"];
$serviceDuration = $_POST["Duration" ];
$serviceTime = $_POST["Time"];







//$  ad = $_POST[""]

//$_POST["DietaryAdditionalInformation"];

$Computing = array(ornot("Email"),ornot("Games"),ornot("Internet"));

$MobilityAndWellbeing = array(ornot("Independent"),ornot("RequiresSupervision"),ornot("RequiresAssistance"),ornot("FallsRisk"),ornot("mobilitydisaster"));

$LiteraryArts =   array(ornot("Poetry"),ornot("Novels"),ornot("Shortstories"));

$Games =  array(ornot("Bingo"),ornot("Cards"),ornot("ChessCheckers"),
				ornot("Jigsaws"),ornot("Trivia"),ornot("WorldPuzzles"));

$PerformingArt = array(ornot("ConcertsMusic"),ornot("DanceBallet"),ornot("Opera"),
						ornot("Plays"),ornot("Singing"),ornot("TheatreDrama"));

$Leisure = array(ornot("EatingOut"),ornot("FilmsMovies"),ornot("GalleriesMuseums"),
				ornot("Outings"),ornot("Picnics"),ornot("Shopping"));

$VisualArts = array(ornot("Architecture"),ornot("Drawing"),ornot("Fashion"),ornot("Painting"),
					ornot("Photography"),ornot("PotterySculpture"));

$HairBeauty	= array(ornot("Hairdressing"),ornot("Facials"),ornot("Manicures"),ornot("Pedicures"));

$Other = array(ornot("MenShed"),ornot("GirlShed"),ornot("BicycleRepairs"),ornot("Framing"),
				ornot("Metalwork"),ornot("Woodwork"));

$PhysicalActivity = array(ornot("Fishing"),ornot("Gardening"),ornot("Golf"),
						ornot("LawnBowls"),ornot("SailingBoating"),ornot("Snooker"),
						ornot("Swimming"),ornot("TaiChi"),ornot("Tennis"),
						ornot("TenPinBowling"),ornot("Walking"),ornot("Yoga"));

$Crafts = array(ornot("CardMaking"),ornot("Crochet"),ornot("Craftwork"),
			ornot("Jewellery"),ornot("Knitting"),ornot("Needlework"));

$NaturalTherapies = array(ornot("Aromatherapy"),ornot("Massage"),ornot("Meditation"),
						ornot("Relaxation"));

$Other2 = array(ornot("Cooking"),ornot("FlowerArranging"),ornot("Education"),
			ornot("Languages"),ornot("ModelBuilding"),ornot("Volunteering"));


/*  page2  */

//
$HealthLegalStatus = array(ornot( "diagonse"),ornot( "cogn" ),ornot("lock" ),
						ornot("alarm" ),ornot("allergy" ),ornot("caredirective" ),
						ornot("attorney"),ornot( "endurattory" ),ornot("perferhos"));



//
$SupportAidsUsed = array(ornot("supnone"),ornot( "walker" ),ornot("glasses"  ),
					ornot("hear"  ),ornot( "left"),ornot( "right"),ornot( "both"),
						ornot("dentures"));



$trans= array(ornot("morn1"),ornot( "after1" ),ornot("both1"  ),
					ornot("morn2"),ornot( "after2" ),ornot("both2"  ),
					ornot("mini"),ornot( "car" ));








$DietaryRequirements = array(ornot("Allergies"),ornot("SpecialDietaryNeeds"),ornot("Vegetarian"),
						ornot("GlutenFree"),ornot("LactoseIntolerant"),ornot("Other3"),
						ornot("FoodLikesDislikes"),ornot("CulturalFoodPreparation"),ornot("Independent"),
						ornot("RequiresSupervision"),ornot("RequiresAssistance"),ornot("SpecificRoutine"));



//medication
$Medication =array(ornot("notrequiremedication"),ornot("requiremedication"));
//SelfCare				
$SelfCare=	array(ornot("Independent" ),ornot("RequiresSupervision" ),ornot("RequiresAssistance" ),
						ornot("SpecificRoutine" ),ornot("ContinenceCare" ),ornot("selfbladder" ),
						ornot("selfbowel"));

$SocialSupport=	array(ornot("Shopping" ),ornot("Appointments" ),ornot("Other4" ),
						ornot("DisabilityParkingPermit" ),ornot("CashHandling" ));

						
//clientbackgrond

$ClientBackgroung=	array(ornot("contact1" ),ornot("contact2" ),ornot("contact3" ));				
						

//Service Details
$ServiceDetails=array(ornot("VHC" ),ornot("BP4H"),ornot("CHSP"),ornot("QCCS"),ornot("HomeCarePackage"),
ornot("QHDRYOSD"), ornot("Domestic"),ornot("PersonalCare"),ornot("SocialSupport"),ornot("InHomeRespite"),
ornot("StayingWellActiveProgram"),ornot("OvernightRespite"),ornot("other5"));



	
/* function*/


function ornot($name){
	if(isset($_POST[$name]) &&
		$_POST[$name] == 'Yes') {
		return "true";
	}
	else{
		return "false";
	}
}

function getlist($name){
	$data =$_POST[$name];
	$result =[];
	if(empty($data)){
		echo("Nothing selecting");
	}else{
		$N = count($data)+1;
		echo($N);
		for($i=0;$i<$N;$i++){
			echo($data[$i]);
			if($data[$i]=="Yes"){
				$result[$i] = "true";
			}
			else{
				$result[$i] = "false";
			}
		}
	}
	return $result;
}

echo($DietaryRequirements);

//database connection
$db = new MySQLDatabase();


//insert client basic information
$queryb = "INSERT INTO ClientBasicInformation VALUES('".$cn."','".$dob."',".$fn.")";
echo($queryb);
$resultb = mysql_query($queryb,$db->connect());
if(!$resultb){
	die("Database query failed: ". mysql_error());
	header("Location: supportplan.php");
}

//insert Mobility and wellbeing table
$query0 = "INSERT INTO MobilityandWellbeing VALUES(".$MobilityAndWellbeing[0].",".$MobilityAndWellbeing[1].",".$MobilityAndWellbeing[2].",".
$MobilityAndWellbeing[3].",".$MobilityAndWellbeing[4].",'".$mobilityinf."',".$fn.")";
echo($query0);
$result0 = mysql_query($query0,$db->connect());
if(!$result0){
	die("Database query failed: " . mysql_error());
}

//insert Other2 table
$query12 = "INSERT INTO IntresOther VALUES
(".$Other2[0].",".$Other2[1].",".$Other2[2].",".
$Other2[3].",".$Other2[4].",".$Other2[5].",".$fn.")";
echo($query12);
$result12 = mysql_query($query12,$db->connect());
if(!$result12){
	die("Database query failed: " . mysql_error());
}

//insert computing table
$query1 = "INSERT INTO IntresComputing VALUES (".$Computing[0].",".$Computing[1].",".$Computing[2].",".$fn.")";
echo($query1);
$result1 = mysql_query($query1,$db->connect());
if(!$result1){
	die("Database query failed: " . mysql_error());
}

//insert LiteraryArts table
$query2 = "INSERT INTO IntresLiteraryArts VALUES (".$LiteraryArts[0].",".$LiteraryArts[1].",".$LiteraryArts[2].",".$fn.")";
echo($query2);
$result2 = mysql_query($query2,$db->connect());
if(!$result2){
	die("Database query failed: " . mysql_error());
}

//insert Games table
$query3 = "INSERT INTO IntresGames VALUES (".$Games[0].",".$Games[1].",".$Games[2].",".$Games[3].",".$Games[4].",".$Games[5].",".$fn.")";
echo($query3);
$result3 = mysql_query($query3,$db->connect());
if(!$result3){
	die("Database query failed: " . mysql_error());
}

//insert PerformingArt table
$query4 = "INSERT INTO IntresPerforming VALUES (".$PerformingArt[0].",".$PerformingArt[1].",".$PerformingArt[2].",".$PerformingArt[3].",".$PerformingArt[4].",".$PerformingArt[5].",".$fn.")";
echo($query4);
$result4 = mysql_query($query4,$db->connect());
if(!$result4){
	die("Database query failed: " . mysql_error());
}
//insert Leisure table
$query5 = "INSERT INTO IntresLeisure VALUES (".$Leisure[0].",".$Leisure[1].",".$Leisure[2].",".$Leisure[3].",".$Leisure[4].",".$Leisure[5].",".$fn.")";
echo($query5);
$result5 = mysql_query($query5,$db->connect());
if(!$result5){
	die("Database query failed: " . mysql_error());
}
//insert VisualArts table
$query6 = "INSERT INTO IntresVisualArts VALUES (".$VisualArts[0].",".$VisualArts[1].",".$VisualArts[2].",".$VisualArts[3].",".$VisualArts[4].",".$VisualArts[5].",".$fn.")";
echo($query6);
$result6 = mysql_query($query6,$db->connect());
if(!$result6){
	die("Database query failed: " . mysql_error());
}
//insert HairBeauty table
$query7 = "INSERT INTO IntresHairBeauty VALUES (".$HairBeauty[0].",".$HairBeauty[1].",".$HairBeauty[2].",".$HairBeauty[3].",".$fn.")";
echo($query7);
$result7 = mysql_query($query7,$db->connect());
if(!$result7){
	die("Database query failed: " . mysql_error());
}
//insert Other table
$query8 = "INSERT INTO IntresMenGirlShed VALUES (".$Other[0].",".$Other[1].",".$Other[2].",".$Other[3].",".$Other[4].",".$Other[5].",".$fn.")";
echo($query8);
$result8 = mysql_query($query8,$db->connect());
if(!$result8){
	die("Database query failed: " . mysql_error());
}

//insert PhysicalActivity table
$query9 = "INSERT INTO IntresPhysicalActivity VALUES
	(".$PhysicalActivity[0].",".$PhysicalActivity[1].",".$PhysicalActivity[2].
	",".$PhysicalActivity[3].",".$PhysicalActivity[4].",".$PhysicalActivity[5].
	",".$PhysicalActivity[6].",".$PhysicalActivity[7].",".$PhysicalActivity[8].
	",".$PhysicalActivity[9].",".$PhysicalActivity[10].",".$PhysicalActivity[11].",".$fn.")";
echo($query9);
$result9 = mysql_query($query9,$db->connect());
if(!$result9){
	die("Database query failed: " . mysql_error());
}

//insert Crafts table
$query10 = "INSERT INTO IntresCrafts VALUES
(".$Crafts[0].",".$Crafts[1].",".$Crafts[2].",".
$Crafts[3].",".$Crafts[4].",".$Crafts[5].",".$fn.")";
echo($query10);
$result10 = mysql_query($query10,$db->connect());
if(!$result10){
	die("Database query failed: " . mysql_error());
}


//insert NaturalTherapies table
$query11 = "INSERT INTO IntresNaturalTherapies VALUES
(".$NaturalTherapies[0].",".$NaturalTherapies[1].",".$NaturalTherapies[2].",".
$NaturalTherapies[3].",".$fn.")";
echo($query11);
$result11 = mysql_query($query11,$db->connect());
if(!$result11){
	die("Database query failed: " . mysql_error());
}


/* page2 */

//DietaryRequirements

$query13 = "INSERT INTO DietaryRequirements VALUES
(".$DietaryRequirements[0].",".$DietaryRequirements[1].",".$DietaryRequirements[2].",".
$DietaryRequirements[3].",".$DietaryRequirements[4].",".$DietaryRequirements[5].",".
$DietaryRequirements[6].",".$DietaryRequirements[7].",".$DietaryRequirements[8].",".
$DietaryRequirements[9].",".$DietaryRequirements[10].",".
$DietaryRequirements[11].",'".$dietaryinf."',".$fn.")";

echo($query13);
$result13 = mysql_query($query13,$db->connect());
if(!$result13){
	die("Database query failed: " . mysql_error());
}

// Medication

$query14 = "INSERT INTO Medication VALUES
('".$pension."',".$Medication[0].",".$Medication[1].",'".$MedicationAdditionalInformation."'
,'".$PharmacyName."','".$Telephone."','".$StreetAddress."','".$Suburb."'
,'".$Postcode."','".$BusinessHours."',".$fn.")";

echo($query14);
$result14 = mysql_query($query14,$db->connect());
if(!$result14){
	die("Database query failed: " . mysql_error());
}



//Self Care

$query15 = "INSERT INTO SelfCare VALUES
(".$SelfCare[0].",".$SelfCare[1].",".$SelfCare[2].",".$SelfCare[3].",".$SelfCare[4].",
".$SelfCare[5].",".$SelfCare[6].",'".$SelfcareAdditionalInformation."',".$fn.")";

echo($query15);
$result15 = mysql_query($query15,$db->connect());
if(!$result15){
	die("Database query failed: " . mysql_error());
}


//Social Support
$query16 = "INSERT INTO SocialSupport VALUES
(".$SocialSupport[0].",".$SocialSupport[1].",".$SocialSupport[2].",".$SocialSupport[3].",".$SocialSupport[4].",
'".$SocialAdditionalInformation."',".$fn.")";

echo($query16);
$result16 = mysql_query($query16,$db->connect());
if(!$result16){
	die("Database query failed: " . mysql_error());
}

//clientprofile
$query17 = "INSERT INTO ClientProfile VALUES
('".$whatimportant."','".$thingsneed."','".$spendtime."',
'".$strengths."','".$support."','".$achieve."',
'".$role."',".$fn.")";

echo($query17);
$result17 = mysql_query($query17,$db->connect());
if(!$result17){
	die("Database query failed: " . mysql_error());
}

//background

$query18 = "INSERT INTO ClientBackgroung VALUES
('".$backgroundInterests."','".$backgroundinformation."','".$Considerations."',".$ClientBackgroung[0].",
".$ClientBackgroung[1].",".$ClientBackgroung[2].",'".$backgroundDetails."','".$historydetail."',
'".$GoalDetails."','".$CarerDetails."',".$fn.")";

echo($query18);
$result18 = mysql_query($query18,$db->connect());
if(!$result18){
	die("Database query failed: " . mysql_error());
}



//Service Details


$query19 = "INSERT INTO ServiceDetails VALUES
(".$ServiceDetails[0].",".$ServiceDetails[1].",".$ServiceDetails[2].",".$ServiceDetails[3].",".$ServiceDetails[4].",
".$ServiceDetails[5].",".$ServiceDetails[6].",".$ServiceDetails[7].",".$ServiceDetails[8].",
".$ServiceDetails[9].",".$ServiceDetails[10].",".$ServiceDetails[11].",".$ServiceDetails[12].",
'".$serviceFrequency."','".$serviceDays."','".$serviceDuration."','".$serviceTime."',".$fn.")";

echo($query19);
$result19 = mysql_query($query19,$db->connect());
if(!$result19){
	die("Database query failed: " . mysql_error());
}


//health/legal infor
$query20= "INSERT INTO HealthLegalStatus VALUES
(".$HealthLegalStatus[0].",".$HealthLegalStatus[1].",".$HealthLegalStatus[2].",".$HealthLegalStatus[3].",".$HealthLegalStatus[4].",
".$HealthLegalStatus[5].",".$HealthLegalStatus[6].",".$HealthLegalStatus[7].",".$HealthLegalStatus[8].",
'".$perferhospital."','".$healthinf."',".$fn.")";

echo($query20);
$result20 = mysql_query($query20,$db->connect());
if(!$result20){
	die("Database query failed: " . mysql_error());
}


//NonResponsetoScheduledVisit
$query21= "INSERT INTO NonResponsetoScheduledVisit VALUES
('".$conname1."','".$tel1."','".$conname2."','".$tel2."','".$conname3."','".$tel3."',
'".$resinf."',".$fn.")";

echo($query21);
$result21 = mysql_query($query21,$db->connect());
if(!$result21){
  die("Database query failed: " . mysql_error());}


//SupportAidsUsed 


$query22= "INSERT INTO SupportAidsUsed VALUES
(".$SupportAidsUsed[0].",".$SupportAidsUsed[1].",".$SupportAidsUsed[2].",".$SupportAidsUsed[3].",".$SupportAidsUsed[4].",
".$SupportAidsUsed[5].",".$SupportAidsUsed[6].",".$SupportAidsUsed[7].",'".$supinf."',".$fn.")";

echo($query22);
$result22 = mysql_query($query22,$db->connect());
if(!$result22){
	die("Database query failed: " . mysql_error());
	header("Location: supportplan.php");}


//
$query23= "INSERT INTO TransportRequirements VALUES
(".$trans[0].",".$trans[1].",".$trans[2].",".$trans[3].",".$trans[4].",
".$trans[5].",".$trans[6].",".$trans[7].",'".$transinf."',".$fn.")";

echo($query23);
$result23 = mysql_query($query23,$db->connect());
if(!$result23){
	die("Database query failed: " . mysql_error());}






$db->disconnect();

class MySQLDatabase{
	var $link;
	var $db;
	function connect(){
		$this->link = mysql_connect('drwatson.zones.eait.uq.edu.au','watson','watson');
		if(!$this->link){
			die('Not connected : '.mysql_error($this->link));
		}
		$db =  mysql_select_db('Centacare',$this->link);
		if(!$db){
			die ('Cannot use : '.mysql_error($this->link));
		}
		return $this->link;
	}
	function disconnect(){
		mysql_close($this->link);
		header("Location: home.php");
	}
}






?>