<?php
//ini_set('display_startup_errors',1);
//ini_set('display_errors',1);
//error_reporting(-1);

session_start();
// session is not set
if (!isset($_SESSION["uid"])) {
header("location:index.php");

}
$trx_id = $_GET["tx"];
$tp_st = $_GET["st"];
$amt = $_GET["amt"];
$cc = $_GET["cc"];
$cm = $_GET["cm"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
   
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
     integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
     crossorigin="anonymous">

     <style>
     table tr td {padding:10px;}
     </style>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container-fluid"> 
        <div class="navbar navbar-header"> 
            <a href="index.php" class="navbar-brand"> </a>
        </div>
        <ul class="nav navbar-nav">
          <li> <h1><a href="index.php" style="text-decoration:none;"><i class="fas fa-home"></i>Mobile Mart</a></h1></li>
        </ul>
        </div>
        </div>

<p><br/></p>
<p><br/></p>
<p><br/></p>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading"></div>
            <div class="panel-body">
                <h1>Thanks  <?php echo $_SESSION["name"]; ?> </h1>
                <p>Your payment has been received and your order will be shipped soon!<br/>
                </p>
                <a href="index.php" class="btn btn-success btn-lg" style="background-color:black;color:white;">Back to Home</a>
                <hr/>
            </div>
            <div class="panel-headifooter"></div>
        </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


</body>
</html>