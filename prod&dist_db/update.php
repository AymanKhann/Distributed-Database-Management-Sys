
<?php
require_once ("component.php");
include("connection.php");
error_reporting(0);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nelson Paints</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom stylesheet 
    <link rel="stylesheet" href="style.css">-->

</head>
<body>

<main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>UPDATE DATA </h1>
       <div class="d-flex justify-content-center">
        
        <style>
            .d-flex button{
    margin: 1.5em 0.5em;
    padding: 0.3em 1.4em;
}
.d-flex table{
    margin: 1em 10em;
}

.update {
    background-color: 	#FF8C00;
  border: none;
  color: white;
  border-radius: 12px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
}
.update:hover {
  background-color: 	#FFA500; 
  color: white;
}

 </style>
 <?php


$_GET['rowid'];
$_GET['rm'];
$_GET['rmc'];
$_GET['vn'];
$_GET['dn'];
$_GET['pid'];
$_GET['sid'];
$_GET['rcvd'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="GET" class="w-50">
	
<div class="pt-2">
                <?php inputElement("<i class='fas fa-id-badge'></i>","Row ID", "rowid",""); ?>
                </div>
                <div class="row pt-2">
                <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","Raw Material ID", "rmID",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","Raw Material Cost", "rmcost",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>","Vendor Name", "vendorname",""); ?>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","Product ID", "productid",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>","Shipment ID", "shipmentid",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>","Recieved Amount", "rcvdamount",""); ?>
                    </div>
                </div>
                <div class="row pt-2">
                <?php inputElement("<i class='fas fa-id-badge'></i>","Dealer Name", "dealername",""); ?>
                </div>
	<input type="submit" name="submit" value="Update">
    <a href="insert2.php" class="update">BACK</a>
    
</form>


<?php
if($_GET['submit'])
{
	//echo "Button Pressed";
    $rowid=$_GET['rowid'];
    $rm=$_GET['rmID'];
    $rmc=$_GET['rmcost'];
    $vn=$_GET['vendorname'];
    $dn=$_GET['dealername'];
    $pid=$_GET['productid'];
    $sid=$_GET['shipmentid'];
    $rcvd=$_GET['rcvdamount'];

	$query = "UPDATE pdsender SET rowid='$rowid', rmID='$rm', rmcost='$rmc',	vendorname='$vn',	productid='$pid',	shipmentid='$sid',	rcvdamount='$rcvd',	dealername='$dn' WHERE rowid='$rowid'";
	$data =mysqli_query($conn,$query);
	if ($data) {
		echo "<font color='green'>Record Updated Successfully";
		# code...
	}
	
}
else
	echo "<font color='blue'>Press Update button to save the changes";

?>
</body>
</html>