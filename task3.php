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

$queryString='SELECT customers.customerName,COUNT(orders.orderNumber)
FROM customers JOIN orders
ON customers.customerNumber=orders.customerNumber
GROUP BY customers.customerName';

$dbResult=$con->query($queryString);
$row=mysqli_fetch_assoc($dbResult);
while ($row=mysqli_fetch_assoc($dbResult)) 
{

?>

<span class="lead ">customer name:</span><span class="text-muted mr-5"> <?php echo $row["customerName"]  ?></span>
<span class="lead ml-5 ">customer orders number:</span><span class="text-muted "> <?php echo $row["COUNT(orders.orderNumber)"]  ?></span> <br>
<?php 
}
?>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>