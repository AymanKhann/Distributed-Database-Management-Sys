<?php
$dbname = "production&distribution";

$servername = "localhost";
$username = "root";
$password = "";


//ayman
$servername1 = "192.168.43.38";
$username1 = "rabiyakhan";
$password1 = "rkrock";
$dbname1 = "financial&cost_accounts";


// create connections

$conn=mysqli_connect($servername,$username,$password,$dbname );
if ($conn) {
	echo "Connecton Open"; 
	}
else
    echo "Connection failed";

#ayman
$conn1=mysqli_connect($servername1,$username1,$password1,$dbname1);

if ($conn1) {
	# code...
	echo "Connecton with headquarter site 1 open.."; 
	
}
else
		echo "Connection with remote site 1 failed..";
?>