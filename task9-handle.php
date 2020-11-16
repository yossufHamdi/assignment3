<?php
$city=$_POST["city"]
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

$queryString='SELECT customerName ,creditLimit from customers WHERE city = "'.$city.'" ORDER by creditLimit DESC limit 3'


;

$dbResult=$con->query($queryString);
$num=mysqli_num_rows($dbResult)
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">custome rName</th>
      <th scope="col"> credit Limit</th>
    </tr>
  </thead>  <tbody>
<?php 
while ($row=mysqli_fetch_assoc($dbResult)) 
{

?>


    <tr>
      <td><?php echo $row["customerName"]  ?></td>
      <td><?php echo $row["creditLimit"]  ?></td>
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