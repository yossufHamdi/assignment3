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

$queryString='SELECT emp.lastName ,man.firstName 
FROM employees AS emp JOIN employees AS man
 on man.employeeNumber=emp.reportsTo

';

$dbResult=$con->query($queryString);
$row=mysqli_fetch_assoc($dbResult);
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">employee name</th>
      <th scope="col"> manger name</th>
    </tr>
  </thead>  <tbody>
<?php // idont know why first product doesnt exsist
while ($row=mysqli_fetch_assoc($dbResult)) 
{

?>


    <tr>
      <td><?php echo $row["lastName"]  ?></td>
      <td><?php echo $row["firstName"]  ?></td>
    </tr>


<?php 
}
?>
  </tbody>
  </table>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>