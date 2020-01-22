<?php
require_once ("php/component.php");
require_once ("php/operation.php");

?>

<!Doctype html>
<html>
<head>
    <title> NELSON PAINTS </title>
    <!-- data (information) about data -->
    <meta charset="UTF-8"> <!-- UniversalCharacterSet Transformation Format—8-bit) capable of encoding all possible characters -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- scaling user's visible area of webpage -->
    <meta name="description" content="Financial & Cost Accounts Management"> <!-- description of the web page -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- compatible with the latest version of IE -->
    
    <link rel="icon" href="images/icon.jpg">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css"/> <!-- external style sheet-->
    <script src="styles.js"></script>
    </head>
    <style>
        .c{
            color:  #ff6600;
        }
    </style>
    <body style="background-image:url('images/background.jpg'); background-repeat: no-repeat; background-size: cover; ">
    
        
<!-- ALL WEB CONTENT -->        
    <div class="row" style="font-family:Georgia">
    
<!-- COLOUMN 1 -->
        <div class="col-sm-3" style="background-color:#000000; height:690px; border-radius: 15px" >
        <div style="background-color:#f2f2f2; width:370px; height:50px; text-align:center; font-size:30px; text-color:white;">VIEW RECORDS</div>
        
        <div><a href="FA.php"><button type="button" class="btn btn-success btn-lg">Fixed Assets</button></a></div>
        <div><a href="IA.php"><button type="button" class="btn btn-success btn-lg">Intangible Assets</button></a></div>
        <div><a href="GP.php"><button type="button" class="btn btn-success btn-lg">General Purchases</button></a></div>
        <div><a href="RMCost.php"><button type="button" class="btn btn-success btn-lg">Repairig/Maintenace Cost</button></a></div>
        <div><a href="RMPurchased.php"><button type="button" class="btn btn-success btn-lg">Raw Material Purchased</button></a></div>
        <div><a href="Shipment.php"><button type="button" class="btn btn-success btn-lg">Shipment</button></a></div>
        <div><a href="Emp.php"><button type="button" class="btn btn-success btn-lg">Employee Payroll</button></a></div>
        </div>
        
        
<!--COLOUMN 2 -->
        <div class="col-sm-9">
        
<!--CAROUSEL--> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel"  style="height:280px">
  <!-- Indicators -->
  <ol class="carousel-indicators" style="height:300px">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="height:280px">
    <div class="item active">
      <img src="images/slideshow1.jpg" style="width:100%">
    </div>

    <div class="item">
      <img src="images/slideshow2.jpg" style="width:100%">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
       </div>
            
    
<!--NAVIGATIONBAR-->            
            <div style="font-size:17px">
                <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand"><b><i class="fa fa-home fa-lg"></i> Financial &amp; Cost Accounts</b></a>
                    </div>
    <ul class="nav navbar-nav">
      <li><a href="#AccRcv"><i class="fa fa-paypal fa-lg"></i> Accounts Recievable</a></li>
      <li><a href="#AccPay"><i class="fa fa-credit-card fa-lg"></i> Accounts Payable</a></li>
      <li><a href="#Asset"><i class="fa fa-building fa-lg"></i> Assets</a></li>
    </ul>
  </div>
</nav>
                
                
            </div>
 

<!--HEADING-->
            <div class="row" style="opacity:0.9">
                <div id="AccRcv" class="col-sm-4" style="background-color:#f2f2f2;border-radius: 15px; "><h3 align="center">Accounts Recievable</h3>
                </div>
                <div id="AccPay" class="col-sm-4" style="background-color:#f2f2f2;border-radius: 15px;"><h3 align="center">Accounts Payable</h3>
                </div>
                <div id="Asset" class="col-sm-4" style="background-color:#f2f2f2;border-radius: 15px;"><h3 align="center">Assets</h3>
                 </div>    
            </div>
            

<!--CRUD OPERATIONS-->
            <div class="row">
                <div class="col-sm-4" style="border-radius: 15px; font-size:150px">
                    <div class="btn-group-vertical  btn-block" style="opacity:0.8">
                        <button type="button" class="btn btn-primary"><h4><i class="fa fa-file-text"></i> Insert Accounts Recievable</h4></button>
                        <button type="button" class="btn btn-primary"><h4><i class="fa fa-trash"></i> Remove Inserted Data</h4></button>
                        <button type="button" class="btn btn-primary"><h4><i class="fa fa-edit"></i> Update Existing Accounts</h4></button>
                        <button type="button" class="btn btn-primary"><h4><i class="fa fa-database"></i> Retrieve Accounts Recievable</h4></button>
                    </div>
                </div>
                <div class="col-sm-4" style="border-radius: 15px; font-size:150px">
                    <div class="btn-group-vertical  btn-block" style="opacity:0.8">
                        <button type="button" class="btn btn-primary"><h4><a href="CRUD/insert2.php"><i class="fa fa-file-text"></i></a> Insert Accounts Payable</h4></button>
                        <button type="button" class="btn btn-primary"><h4><a href="CRUD/delete.php"><i class="fa fa-trash"></i></a>Remove Residing Data</h4></button>
                        <button type="button" class="btn btn-primary"><h4><a href="CRUD/update.php"><i class="fa fa-edit"></i></a>Update Existing Accounts</h4></button>
                        <button type="button" class="btn btn-primary"><h4><a href="CRUD/display.php"><i class="fa fa-database"></i></a> Retrieve Accounts Payable</h4></button>
                    </div>
                </div>
                <div class="col-sm-4" style="border-radius: 15px; font-size:150px">
                    <div class="btn-group-vertical  btn-block" style="opacity:0.8">
                        <button type="button" class="btn btn-primary"><h4><i class="fa fa-file-text"></i> Insert Assets</h4></button>
                        <button type="button" class="btn btn-primary"><h4><i class="fa fa-trash"></i> Remove Inserted Data</h4></button>
                        <button type="button" class="btn btn-primary"><h4><i class="fa fa-edit"></i> Update Existing Accounts</h4></button>
                        <button type="button" class="btn btn-primary"><h4><i class="fa fa-database"></i> Retrieve Assets</h4></button>
                    </div>
                </div>
            </div>
                    
            
        
        
    </div>
    
   
    
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     
        <script>
        $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
        });
            
    </script>
    </body>
</html>