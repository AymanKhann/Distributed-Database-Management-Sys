<?php
$dbname = "financial&cost_accounts";
$dbname1 = "asset_management";
$dbname2 = "production&distribution";
$dbname3 = "human_resource";


//LOCAL
$servername = "localhost";
$username = "root";
$password = "";


//REMOTE USER1 ACCOUNT
$servername1 = "192.168.43.215";
$username1 = "aymankhan";
$password1 = "aymankhan";


//REMOTE USER2 ACCOUNT
$servername2 = "192.168.43.181";
$username2 = "muneebafaheem";
$password2 = "muneebafaheem";

// create connection

$conn=mysqli_connect($servername,$username,$password,$dbname );
$conn1 = mysqli_connect($servername1,$username1,$password1,$dbname1 );
$conn2 = mysqli_connect($servername1,$username1,$password1,$dbname2 );
$conn3 = mysqli_connect($servername2,$username2,$password2,$dbname3 );

if ($conn) {
	# code...
	echo "Connection Open."; 
	
}


if ($conn1) {
	# code...
    echo "\nConnection Open Remotely with Database 1."; 
	
}
if ($conn2) {
	# code...
    echo "\nConnection Open Remotely with Database 2."; 
}
if ($conn3) {
	# code...
    echo "\nConnection Open Remotely with Database 3."; 
}
else
		echo "\nConnection failed";
	// or use the die function to view the reason
?>