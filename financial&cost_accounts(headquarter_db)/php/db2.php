
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "financial&cost_accounts";

//REMOTE USER1 ACCOUNT
$servername1 = "172.20.10.2";
$username1 = "aymankhan";
$password1 = "aymankhan";
$dbnamea1="asset_management"

//REMOTE USER2 ACCOUNT
//$servername2 = "192.168.43.181";
//$username2 = "muneebafaheem";
//$password2 = "muneebafaheem";
    
// create connection
$conn=mysqli_connect($servername,$username,$password,$dbname );
if ($conn) {
	# code...
	echo "Connecton Open."; 
	
}

$conn1 = mysqli_connect($servername1,$username1,$password1,$dbname1);
//$conn2 = mysqli_connect($servername2,$username2,$password2,$dbname);



if ($conn1) {
	# code...
    echo "\nConnecton Open Remotely with user 1."; 
	
}
//if ($conn2) {
//	# code...
//    echo "\nConnecton Open Remotely with user 2."; 
//}
//else
//		echo "\nConnection failed";


/*if ($conn) {
	# code...
	echo "Connection Open With Local Database"; 	
}
else
		echo "Connection failed";
	// or use the die function to view the reason */



?>

