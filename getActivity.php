<?php

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
header('Access-Control-Allow-Methods:POST');

$db = new MySQLDatabase();

$sql = 'SELECT * from Activity group by activityname, dates';

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