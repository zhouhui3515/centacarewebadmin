<?php
session_start();

header('Access-Control-Allow-Origin: *');
header('content-type:application:json;charset=utf8'); 
header('Access-Control-Allow-Methods:GET'); 
header('Access-Control-Allow-Methods:POST'); 

$fno = $_POST['name'];
echo $fno;
?>