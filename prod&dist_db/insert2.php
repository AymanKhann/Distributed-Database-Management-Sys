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
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>Production & Distribution</h1>
       <div class="d-flex justify-content-center">
        
        <style>
            .d-flex button{
    margin: 1.5em 0.5em;
    padding: 0.3em 1.4em;
}
.d-flex table{
    margin: 1em 10em;
}

.view {
  background-color: #4CAF50; /* Green */
  border: none;
  border-radius: 12px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;;
}
.view:hover {
  background-color: #90EE90; /* Green */
  color: white;
}
.delete {
  background-color: #f44336;; 
  border: none;
  border-radius: 12px;
  color: white;
  padding: 15px 32px;   
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
}
.delete:hover {
  background-color: 	#FA8072;
  color: white;
}
.update {
    background-color: #008CBA;
  border: none;
  color: white;
  border-radius: 12px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
}
.update:hover {
  background-color: #B0E0E6; /* Green */
  color: white;
}
 </style>
            
        

        <!-- Bootstrap table  -->
        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>Raw Material Purchased</th>
                        <th>Raw Material Consumed</th>
                        <th>Final Production</th>
                        <th>Shipment</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                </tbody>

            </table>
        </div>
</div>

    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="php/main.js"></script>

<form action="" method="get" class="w-50">
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
                
                <input type="submit" name="sync" value="Sync To Headquarter">
	<input type="submit" name="submit" value="Submit Locally">
	<input type="submit" name="async" value="Async to Headquarter">
    <br><br>
 
<a href="display.php" class="view">View Records</a>
<a href="delete.php" class="delete">Delete Records</a>
<a href="update.php" class="update">Update Records</a>
            </form>
        </div>


<?php

if($_GET['submit'])
{
	
// getting data through global array
$rowid=$_GET['rowid'];
$rm=$_GET['rmID'];
$rmc=$_GET['rmcost'];
$vn=$_GET['vendorname'];
$pid=$_GET['productid'];
$sid=$_GET['shipmentid'];
$rcvd=$_GET['rcvdamount'];
$dn=$_GET['dealername'];
//check that form fields are not empty
if($rowid){

    $sql = "INSERT INTO pdsender(rowid, rmID, rmcost,	vendorname,	productid,	shipmentid,	rcvdamount,	dealername) 
                    VALUES ('$rowid', '$rm', '$rmc', '$vn','$pid', '$sid', '$rcvd', '$dn')";
$data = mysqli_query($conn, $sql);
    
    $sql2 = "INSERT INTO temp(rowid, rmID, rmcost,	vendorname,	productid,	shipmentid,	rcvdamount,	dealername) 
                    VALUES ('$rowid','$rm', '$rmc', '$vn', '$pid', '$sid', '$rcvd', '$dn')";
$data2 = mysqli_query($conn, $sql2);
   

}

if($data && $data2)
		{
		echo "Data inserted successfully";
        }


}
    
if($_GET['async']){
        
    $dbname = "production&distribution";
    
    //ayman
    $servername1 = "192.168.43.38";
    $username1 = "rabiyakhan";
    $password1 = "rkrock";
    $dbname1 = "financial&cost_accounts";

    $conn1 = mysqli_connect($servername1,$username1,$password1,$dbname1 );
    
    echo "Connection Established with Headquarter Node";
    

	$query_temp="SELECT * FROM temp";
    $data_temp=mysqli_query($conn,$query_temp);
    

while($row = mysqli_fetch_array($data_temp)){
//all data fetch from rabiya's temp table into variable
$rowid=$row['rowid'];
$rm=$row['rmID'];
$rmc=$row['rmcost'];
$vn=$row['vendorname'];
$dn=$row['dealername'];
$pid=$row['productid'];
$sid=$row['shipmentid'];
$rcvd=$row['rcvdamount'];
    
    $query1 = "INSERT INTO rawmaterial_purchased (rawMaterial_ID, vendorName, rawMaterialCost)
    values ('$rm','$vn', '$rmc')";
    $query2 = "INSERT INTO shipment (shipment_ID, productID, dealerName, amountReceivable)
    values ('$sid','$pid','$dn','$rcvd')";
    
    $data1 = mysqli_query($conn1, $query1);
    $data2 = mysqli_query($conn1, $query2);
    if($data1)
         {
         echo "\n Data inserted remotely (query 1) successfully";
         }
     if($data2)
         {
         echo "\n Data inserted remotely (query ) successfully";
         }
         
                                                                                                                                                                                                 }
 $query_delete = "TRUNCATE Table temp";
 $emptytemp = mysqli_query($conn, $query_delete);

}
 

if($_GET['sync'])
{
// getting data through global array
$rowid=$_GET['rowid'];
$rm=$_GET['rmID'];
$rmc=$_GET['rmcost'];
$vn=$_GET['vendorname'];
$dn=$_GET['dealername'];
$pid=$_GET['productid'];
$sid=$_GET['shipmentid'];
$rcvd=$_GET['rcvdamount'];


//ayman
$servername1 = "192.168.43.38";
$username1 = "rabiyakhan";
$password1 = "rkrock";
$dbname1 = "financial&cost_accounts";
if($rowid){

    $sql = "INSERT INTO pdsender(rowid, rmID, rmcost,	dealername,	vendorname,	productid,	shipmentid,	rcvdamount) 
                    VALUES ('$rowid', '$rm', '$rmc', '$vn', '$dn', '$pid', '$sid', '$rcvd')";
$data = mysqli_query($conn, $sql);
if($data)
		{
		echo "\n data inserted locally successfully";
        }

        $query1 = "INSERT INTO rawmaterial_purchased (rawMaterial_ID, vendorName, rawMaterialCost)
        values ('$rm','$vn', '$rmc')";
        $query2 = "INSERT INTO shipment (shipment_ID, productID, dealerName, amountReceivable)
        values ('$sid','$pid','$dn','$rcvd')";
        
        $data1 = mysqli_query($conn1, $query1);
        $data2 = mysqli_query($conn1, $query2);
        if($data1)
             {
             echo "\n Data inserted remotely (query 1) successfully";
             }
        if($data2)
             {
             echo "\n Data inserted remotely (query 2) successfully";
             }

	}
else
{
	echo "All fields are required";
}
}

?>
</body>
</html>
