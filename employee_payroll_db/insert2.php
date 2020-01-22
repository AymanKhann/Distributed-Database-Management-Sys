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
       <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>Employee Payroll</h1>
       <div class="d-flex justify-content-center">
        
        <style>
            .d-flex button{
    margin: 1.5em 0.5em;
    padding: 0.3em 1.4em;
}
.d-flex table{
    margin: 1em 1em;
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
            
        </div>

        <!-- Bootstrap table  -->
        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>Payroll ID</th>
                        <th>Loan ID</th>
                        <th>Employee ID</th>
                        <th>Attendee ID</th>
                        <th>Advance ID</th>
                        <th>Total Salary</th>
                        <th>Account Number</th>
                        <th>Month/Year</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                </tbody>

            </table>
        </div>


    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<form action="" method="get" class="w-50">
        <div class="pt-2">
          <?php inputElement("<i class='fas fa-id-badge'></i>","Payroll ID", "payrollID",""); ?>
       </div>
        <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","Loan ID", "loanID",""); ?>
        </div>
        <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","Employee ID", "employeeID",""); ?>
        </div>
        <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","Attendee ID", "atdID",""); ?>
        </div>
        <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","Advance ID", "advID",""); ?>
        </div>

        <div class="row pt-2">
            <div class="col">
            <?php inputElement("<i class='fas fa-people-carry'></i>","Total Salary", "totalSalary",""); ?>
            </div>
            <div class="col">
            <?php inputElement("<i class='fas fa-dollar-sign'></i>","Account Number", "accountNumber",""); ?>
            </div>
        </div>
        
        <div class="pt-2">
            <?php inputElement("<i class='fas fa-id-badge'></i>","Month/Year", "month",""); ?>
        </div>

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
$rowid=$_GET['payrollID'];
$lid=$_GET['loanID'];
$eid=$_GET['employeeID'];
$atd=$_GET['atdID'];
$adv=$_GET['advID'];
$ts=$_GET['totalSalary'];
$acc=$_GET['accountNumber'];
$mn=$_GET['month'];

//check that form fields are not empty
if($rowid){

    $sql = "INSERT INTO employeepayroll(payrollID,loanID,employeeID,atdID,advID,totalSalary,accountNumber,month) 
                    VALUES ('$rowid', '$lid', '$eid', '$atd','$adv', '$ts', '$acc','$mn')";
$data = mysqli_query($conn, $sql);
   
   $sql2 = "INSERT INTO temp(payrollID,employeeID,totalSalary,accountNumber,month) 
                    VALUES ('$rowid', '$eid', '$ts', '$acc','$mn')";
$data2 = mysqli_query($conn, $sql2);

}

if($data && $data2 )
		{
		echo "Data inserted successfully";
        }
}
    
if($_GET['async']){
        
    $dbname = "human_resource";
    $dbname1 = "financial&cost_accounts";
    //ayman
    $servername1 = "192.168.43.38";
    $username1 = "rabiyakhan";
    $password1 = "rkrock";


    $conn1 = mysqli_connect($servername1,$username1,$password1,$dbname1 );
    
    echo "Connection Established with Headquarter Node";
    

	$query_temp="SELECT * FROM temp";
    $data_temp=mysqli_query($conn,$query_temp);
    

while($row = mysqli_fetch_array($data_temp)){
//all data fetch from muneeba's temp table into variable
$rowid=$row['payrollID'];
$lid=$row['loanID'];
$eid=$row['employeeID'];
$atd=$row['atdID'];
$adv=$row['advID'];
$ts=$row['totalSalary'];
$acc=$row['accountNumber'];
$mn=$row['month'];
    
    $query1 = "INSERT INTO employee_payroll (payroll_ID,employeeID,totalSalary,accountNumber,month)
                    values ('$rowid','$eid', '$ts','$acc','$mn')";
    $data1 = mysqli_query($conn1, $query1);
    if($data1)
         {
         echo "\n Data inserted remotely (query 1) successfully";
         }
}
 $query_delete = "TRUNCATE Table temp";
 $emptytemp = mysqli_query($conn, $query_delete);
}

if($_GET['sync']){
//ayman
$dbname1 = "financial&cost_accounts";
$servername1 = "192.168.43.38";
$username1 = "rabiyakhan";
$password1 = "rkrock";


$conn1 = mysqli_connect($servername1,$username1,$password1,$dbname1 );

echo "Connection Established with Headquarter Node";

{
// getting data through global array
$rowid=$_GET['payrollID'];
$lid=$_GET['loanID'];
$eid=$_GET['employeeID'];
$atd=$_GET['atdID'];
$adv=$_GET['advID'];
$ts=$_GET['totalSalary'];
$acc=$_GET['accountNumber'];
$mn=$_GET['month'];
//ayman
$dbname1 = "financial&cost_accounts";
$servername1 = "192.168.43.38";
$username1 = "rabiyakhan";
$password1 = "rkrock";


$conn1 = mysqli_connect($servername1,$username1,$password1,$dbname1 );

echo "Connection Established with Headquarter Node";



if($rowid){

    $sql = "INSERT INTO employeepayroll(payrollID, loanID,employeeID,atdID,advID,totalSalary,acoountNumber,month) 
                    VALUES ('$rowid', '$lid', '$eid', '$atd', '$adv', '$ts', '$acc','$mn')";
    $data = mysqli_query($conn, $sql);
if($data)
		
		{
            $query1 = "INSERT INTO employee_payroll (payroll_ID,employeeID,totalSalary,accountNumber,month)
                             values ('$rowid','$eid', '$ts','$acc','$mn')";

        $data1 = mysqli_query($conn1, $query1);
        if($data1)
             {
             echo "\n Data inserted remotely (query 1) successfully";
             }

	}
}
}
}
?>
