
<html>
    <head>
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body class="d-flex align-items-center justify-content-center">
<?php
$serverName='localhost';
$dbUser='root';
$serverPass="";
$dbName="monday_company";
$con=new mysqli($serverName,$dbUser,$serverPass,$dbName);
if ($con->connect_error) {
die($con->connect_error);
}

$queryString='SELECT city FROM customers';



$dbResult=$con->query($queryString);
$row=mysqli_fetch_assoc($dbResult);
$arr=[];
while ($row=mysqli_fetch_assoc($dbResult));
{
$arr[]=$row['city'];
}
print_r($arr);
?>
    
 <form action="task7-handle.php" method="POST">
   <select name="cites"  >';


   <option>1</option>
  <!-- there is an error here -->
   </select>
   <button type="submit" class="btn btn-outline-success" > select country</button>

   </form>


    <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html> 