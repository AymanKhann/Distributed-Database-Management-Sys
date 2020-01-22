<?php
$dbname = "human_resource";
$servername = "localhost";
$username = "root";
$password = "";

//ayman
 $servername1 = "192.168.43.38";
 $username1 = "rabiyakhan";
 $password1 = "rkrock";
 $dbname_a = "financial&cost_accounts";
//rabiya
// $servername2 = "192.168.43.181";
// $username2 = "muneebafaheem";
// $password2 = "muneebafaheem";

// create connections

$conn=mysqli_connect($servername,$username,$password,$dbname );
if ($conn) {
	echo "\n Connecton Open"; 
	}
else
    echo "\n Connection failed";

//ayman
 $conn1=mysqli_connect($servername1,$username1,$password1,$dbname_a );

 if ($conn1) {
// 	# code...
 	echo "\n Connecton with remote site 1 open.."; 
	
 }
else
 	echo "\n Connection with remote site 1 failed..";



//rabiya
// $conn_b=mysqli_connect($servername2,$username2,$password2,$dbname );

// if ($conn_b) {
// 	# code...
// 	echo "\n Connecton with remote site 2 open.."; 
	
// }
// else
// 		echo "\n Connection with remote site 2 failed..";	 
?>