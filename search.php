<?php

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
header('Access-Control-Allow-Methods:POST');

// pass variable from website to server

$mobility = (string)$_POST['mobi'];
$interestTable = (string)$_POST['interest'];
$subinterest = (string)$_POST['sub'];

//echo $mobility;
//echo $interestTable;
//echo $subinterest;
//connect database
$db = new MySQLDatabase();

//$sql = 'SELECT c.* FROM ClientBasicInformation c, IntresComputing it, MobilityandWellbeing mw WHERE c.FileNo = it.FileNo = mw.FileNo AND it.Games= 1 AND mw.Independent = 0 GROUP BY c.FileNo';
$sql = 'SELECT c.* FROM ClientBasicInformation c, '.$interestTable.' it, MobilityandWellbeing mw WHERE c.FileNo = mw.FileNo  AND it.FileNo  = mw.FileNo AND it.'.$subinterest.'= 1 AND mw.'.$mobility.' = 1';
//$sql = 'SELECT * FROM ClientBasicInformation';
$dataset = array();
$result = mysql_query($sql,$db->connect());
 if(!$result){
    die("Database query failed: ".mysql_error());
 }
 while($row = mysql_fetch_array($result)){
     array_push($dataset,$row);
 }

 echo json_encode($dataset);
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
    }
}
?>