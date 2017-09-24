<?php   

$user = (string)$_POST["user"];
$pass = (string)$_POST["pass"];

if($user!="admin"){
	echo "user name is not correct."
}
	

if($pass!="admin"){
	echo "password is invalid."
}
        
?>