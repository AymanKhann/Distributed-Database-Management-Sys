<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <style>
    .d-flex button{
    margin: 1.5em 0.5em;
    padding: 0.3em 1.4em;
}

.d-flex table{
    margin: 1em 10em;
}

table .btnedit{
    color: lightsalmon;
    cursor: pointer;
}

.success{
    background-color: lightgreen;
    padding: 1em;
}

.error{
    background-color: tomato;
    padding: 1em;
}
    
    </style>
    
<?php

require_once ("db.php");
require_once ("component.php");
    


//Display from financial_accounts
function getFAData(){
    
    $query = "SELECT * FROM fixed_assets";
    $data = mysqli_query($GLOBALS['conn'],$query);
    $total = mysqli_num_rows($data);
    
    while ($result = mysqli_fetch_assoc($data)) {
	echo "<tr>
			<td>". $result['FACode'] ."</td>
			<td>". $result['historicCost'] ."</td>
		</tr>";								
    }
}

    
function getGPData(){
    
    $query = "SELECT * FROM general_purchases";
    $data = mysqli_query($GLOBALS['conn'],$query);
    $total = mysqli_num_rows($data);
    
    while ($result = mysqli_fetch_assoc($data)) {
	echo "<tr>
			<td>". $result['GPCode'] ."</td>
			<td>". $result['cost'] ."</td>
		</tr>";		
    }
}
    
function getIAData(){
    
    $query = "SELECT * FROM intangible_assets";
    $data = mysqli_query($GLOBALS['conn'],$query);
    $total = mysqli_num_rows($data);
    
    while ($result = mysqli_fetch_assoc($data)) {
	echo "<tr>
			<td>". $result['IACode'] ."</td>
			<td>". $result['historicCost'] ."</td>
		</tr>";		
    }
}
    
function getRMCostData(){
    
    $query = "SELECT * FROM repairingmaintenance_cost";
    $data = mysqli_query($GLOBALS['conn'],$query);
    $total = mysqli_num_rows($data);
    
    while ($result = mysqli_fetch_assoc($data)) {
	echo "<tr>
			<td>". $result['bugdetID'] ."</td>
			<td>". $result['fixedBugdet'] ."</td>
		</tr>";	
    }
}
    
function getRawMaterialData(){
    
    $query = "SELECT * FROM rawmaterial_purchased";
    $data = mysqli_query($GLOBALS['conn'],$query);
    $total = mysqli_num_rows($data);
    
    while ($result = mysqli_fetch_assoc($data)) {
	echo "<tr>
			<td>". $result['rawMaterial_ID'] ."</td>
			<td>". $result['vendorName'] ."</td>
            <td>". $result['rawMaterialCost'] ."</td>
		</tr>";	
    }
}
    
function getShipmentData(){
    
    $query = "SELECT * FROM shipment";
    $data = mysqli_query($GLOBALS['conn'],$query);
    $total = mysqli_num_rows($data);
    
    while ($result = mysqli_fetch_assoc($data)) {
	echo "<tr>
			<td>". $result['shipment_ID'] ."</td>
			<td>". $result['productID'] ."</td>
            <td>". $result['dealerName'] ."</td>
            <td>". $result['amountReceivable'] ."</td>
		</tr>";	
    }
}
    
function getEmployeeData(){
    
    $query = "SELECT * FROM employee_payroll";
    $data = mysqli_query($GLOBALS['conn'],$query);
    $total = mysqli_num_rows($data);
    
    while ($result = mysqli_fetch_assoc($data)) {
	echo "<tr>
			<td>". $result['payroll_ID'] ."</td>
			<td>". $result['employeeID'] ."</td>
            <td>". $result['totalSalary'] ."</td>
			<td>". $result['accountNumber'] ."</td>
            <td>". $result['month'] ."</td>
		</tr>";	
    }
    
}
?>
</body>
</html>







