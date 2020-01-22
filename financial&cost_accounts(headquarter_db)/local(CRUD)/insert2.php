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
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>FINANCIAL &amp; COST ACCOUNTS</h1>
        
       <div class="d-flex justify-content-center">
        
        <style>
            .d-flex button{
    margin: 1.5em 0.5em;
    padding: 0.3em 1.4em;
}
.d-flex table{
    margin: 1em 2em;
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
                        
                        <th>Accounts Payable</th>
                        
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

<script src="php/main.js"></script>

<form action="" method="get" class="w-50">
                <div class="pt-2">
                <?php inputElement("<i class='fas fa-id-badge'></i>","APCode", "rowid",""); ?>
                </div>
                <div class="row pt-2">
                <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","PtypeID", "assetcode",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>","Creditor Name", "assetcost",""); ?>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","Credit Amount", "gpcode",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>","Paid Balance", "gpcost",""); ?>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","Unpaid Balance", "iacode",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>","Creditor Account Number", "iacost",""); ?>
                    </div>
                </div>
                
	<input type="submit" name="submit" value="Submit Locally">
	
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
$at1=$_GET['assetcode'];
$at2=$_GET['assetcost'];
$gpc=$_GET['gpcode'];
$gpa=$_GET['gpamount'];
$ia1=$_GET['iacode'];
$ia2=$_GET['iacost'];


//echo "$rn";  //displaying data on page

//check that form fields are not empty
if($rowid){

    $dbname = "financial&cost_accounts";
//LOCAL
$servername = "localhost";
$username = "root";
$password = "";
$conn=mysqli_connect($servername,$username,$password,$dbname );
    $sql = "INSERT INTO *accounts_payable(APCode, PtypeID, creditor, creditAmount, paidBalance, unpaidBalance, creditorAccountNo) 
                    VALUES ('$rowid','$at1','$at2', '$gpc', '$gpa', '$ia1', '$ia2')";
    
$data = mysqli_query($conn, $sql);
   

}

if($data)
		{
		echo "Data inserted successfully";
		}

}
    
?>
</body>
</html>
