<?php
$number=$_POST["num"]
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

$queryString='SELECT productName, productCode ,quantityInStock FROM products WHERE quantityInStock >'. $number 

;

$dbResult=$con->query($queryString);
$num=mysqli_num_rows($dbResult)
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">productName</th>
      <th scope="col"> productCode</th>
      <th scope="col"> quantity</th>
    </tr>
  </thead>  <tbody>
<?php 
while ($row=mysqli_fetch_assoc($dbResult)) 
{

?>


    <tr>
      <td><?php echo $row["productName"]  ?></td>
      <td><?php echo $row["productCode"]  ?></td>
      <td><?php echo $row["quantityInStock"]  ?></td> 
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