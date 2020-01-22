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
<br>
<a href="insert2.php" class="update">BACK</a>
<main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>DISPLAY RECORDS</h1>
       <div class="d-flex justify-content-center">
        
        <style>
            .d-flex button{
    margin: 0.5em 0.5em;
    padding: 0.3em 0.5em;
}
.d-flex table{
    margin: 1em 1em;
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
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php

$query = "SELECT * FROM pdsender";
$data = mysqli_query($conn,$query);
if(mysqli_num_rows($data) > 0)
{	
	?> 
	<table>
		<!-- Bootstrap table  -->
        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>Row ID</th>
                        <th>RM ID</th>
                        <th>RM COST</th>
                        <th>VENDOR NAME</th>
						<th>PRODUCT ID</th>
						<th>SHIPMENT ID </th>
						<th>RCVD AMOUNT</th>
						<th>DEALER NAME</th>
                        
                    </tr>
                </thead>
                <tbody id="tbody">
	<?php
	while ($result = mysqli_fetch_assoc($data)) 
	        {  
	       echo "  <tr>
			 <td>". $result['rowid'] ."</td>
			<td>". $result['rmID'] ."	</td>
			<td>". $result['rmcost'] ."</td>
			<td>". $result['vendorname'] ."</td>
			<td>". $result['productid'] ."	</td>
			<td>". $result['shipmentid'] ."</td>
			<td>". $result['rcvdamount'] ."</td>
            <td>". $result['dealername'] ."	</td>
            
		      </tr>	";				
			
		     }
}
?>

                </tbody>
            </table>
        </div>

