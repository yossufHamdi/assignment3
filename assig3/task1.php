<?php
$serverName='localhost';
$dbUser='root';
$serverPass="";
$dbName="monday_company";
$con=new mysqli($serverName,$dbUser,$serverPass,$dbName);
if ($con->connect_error) {
die($con->connect_error);
}

$queryString='SELECT customerName 
        FROM customers
        WHERE creditLimit >20000';

$dbResult=$con->query($queryString);
while ($row=mysqli_fetch_assoc($dbResult)) 
{

echo $row["customerName"]."<br>";
}
