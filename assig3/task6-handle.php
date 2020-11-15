<?php
$customer=$_POST["customer"]
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

$queryString='SELECT customerName, customerNumber,country,phone FROM customers WHERE customerName LIKE "%' .$customer.'%"'
;

$dbResult=$con->query($queryString);
$num=mysqli_num_rows($dbResult)
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"> customer Name</th>
      <th scope="col"> customer Number</th>
      <th scope="col"> country</th>
      <th scope="col"> city</th>
    </tr>
  </thead>  <tbody>
<?php // idont know why first product doesnt exsist
while ($row=mysqli_fetch_assoc($dbResult)) 
{

?>


    <tr>
      <td><?php echo $row["customerName"]  ?></td>
      <td><?php echo $row["customerNumber"]  ?></td>
      <td><?php echo $row["country"]  ?></td> 
      <td><?php echo $row["phone"]  ?></td>
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