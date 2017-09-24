<?php

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
header('Access-Control-Allow-Methods:POST');

//pass variable from website to server

$fnos = $_POST['fnos'];
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$location=$_POST['location'];
$return = array();
foreach($fnos as $fno){
     $newArray = array();
    array_push($newArray,$fno);
    array_push($newArray,$name);
    array_push($newArray,$date);
    array_push($newArray,$time);
    array_push($newArray,$location);
    array_push($return,$newArray);
}
// $test = array();
// $ds = array();
// array_push($ds,'2');
// array_push($ds,'Bball');
// array_push($ds,'2016-10-31');
// array_push($ds,'10:00');
// array_push($ds,'uq');
// array_push($test,$ds);

//connect database
$db = new MySQLDatabase();

foreach($return as $row){
    $fileno = (int)$row[0];
    $aname = $row[1];
    $adate = $row[2];
    $atime = $row[3];
    $alocation = $row[4];
    $sql = "INSERT INTO Activity VALUES('".$aname."','".$adate."','".$alocation."','".$atime."',".$fileno.")";
    $result = mysql_query($sql,$db->connect());
    if(!$result){
     die("Database query failed: ". mysql_error());
 }
}
 $db->disconnect();
 echo json_encode("Activity Added");

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
    }
}
?>