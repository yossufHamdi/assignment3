<?php
$id=$_POST["id"]
?>
<html>
    <head>
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
<?php
$serverName='localhost';
$dbUser='root';
$serverPass="";
$dbName="monday_company";
$con=new mysqli($serverName,$dbUser,$serverPass,$dbName);
if ($con->connect_error) {
die($con->connect_error);
}

$queryString='SELECT * FROM customers WHERE customerNumber = '.$id;

$dbResult=$con->query($queryString);
$row=mysqli_fetch_assoc($dbResult)
?>

<p class="lead">customer id:</p><span class="text-muted"> <?php echo $row["customerNumber"]  ?></span>
<p class="lead">customer name:</p><span class="text-muted"> <?php echo $row["customerName"]  ?></span>
<p class="lead">contact last Name:</p><span class="text-muted"> <?php echo $row["contactLastName"]  ?></span>
<p class="lead">contact First Name:</p><span class="text-muted"> <?php echo $row["contactFirstName"]  ?></span>
<p class="lead">phone:</p><span class="text-muted"> <?php echo $row["phone"]  ?></span>
<p class="lead">addressLine1:</p><span class="text-muted"> <?php echo $row["addressLine1"]  ?></span>
<p class="lead">addressLine2:</p><span class="text-muted"> <?php echo $row["addressLine2"]  ?></span>
<p class="lead">city:</p><span class="text-muted"> <?php echo $row["city"]  ?></span>
<p class="lead">state:</p><span class="text-muted"> <?php echo $row["state"]  ?></span>
<p class="lead">postalCode:</p><span class="text-muted"> <?php echo $row["postalCode"]  ?></span>
<p class="lead">country:</p><span class="text-muted"> <?php echo $row["country"]  ?></span>
<p class="lead">sales Rep Employee Number:</p><span class="text-muted"> <?php echo $row["salesRepEmployeeNumber"]  ?></span>
<p class="lead">creditLimit:</p><span class="text-muted"> <?php echo $row["creditLimit"]  ?></span>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>