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
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>DELETE RECORDS</h1>
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


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="GET">
Row ID <input type="text" name="rowid" value=""><br><br>
<input type="submit" name="submit" value="Submit">
 <a href="insert2.php" class="update">BACK</a>
</form>


<?php
if($_GET['submit'])
{
	
// getting data through global array
$rowid=$_GET['rowid'];
$sql = "DELETE FROM sender WHERE rowid=$rowid";

    if(mysqli_query($GLOBALS['conn'], $sql)){
        echo "deleted";
    }else{
        echo "not deleted";
	}
}
?>

</body>
</html>