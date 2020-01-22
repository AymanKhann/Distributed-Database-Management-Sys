
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
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>UPDATE RECORDS</h1>
       <div class="d-flex justify-content-center">
        
        <style>
            .d-flex button{
    margin: 1.5em 0.5em;
    padding: 0.3em 1.4em;
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
$_GET['at1'];
$_GET['at2'];
$_GET['gpc'];
$_GET['gpa'];
$_GET['ia1'];
$_GET['ia2'];
$_GET['bid'];
$_GET['fb'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="GET">
<div class="pt-2">
                <?php inputElement("<i class='fas fa-id-badge'></i>","Row ID", "rowid",""); ?>
                </div>
                <div class="row pt-2">
                <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","Asset Code", "assetcode",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>","Asset Cost", "assetcost",""); ?>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","GP Code", "gpcode",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>","GP Cost", "gpcost",""); ?>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","IA Code", "iacode",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>","IA Cost", "iacost",""); ?>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","Budget ID", "budgetid",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>","Fixed Budget", "fixedbudget",""); ?>
                    </div>
                </div>
	
    <input type="submit" name="submit" value="Update">
    <a href="insert2.php" class="update">BACK</a>
</form>


<?php
if($_GET['submit'])
{
	//echo "Button Pressed";
	$rowid=$_GET['rowid'];
	$at1=$_GET['assetcode'];
	$at2=$_GET['assetcost'];
	$gpc=$_GET['gpcode'];
	$gpa=$_GET['gpamount'];
	$ia1=$_GET['iacode'];
	$ia2=$_GET['iacost'];
	$bid=$_GET['budgetid'];
	$fb=$_GET['fixedbudget'];

	$query = "UPDATE sender SET rowid='$rowid', assetcode='$at1',assetcost='$at2', gpcode='$gpc', gpamount='$gpa', iacode='$ia1', iacost='$ia2', budgetid='$bid', fixedbudget='$fb' WHERE rowid='$rowid'";
	$data =mysqli_query($conn,$query);
	if ($data) {
		echo "<font color='green'>Record Updated Successfully";
		# code...
	}
	else
	{
		echo "<font color='red'>Sorry! record updation failed.<a href='display.php'> View Records</a>";
	}
}

?>
</body>
</html>