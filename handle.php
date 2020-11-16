<html>
<header>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</header>
<body class="text-center bg-dark">


<?php
session_start();
$_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];
function cleanData($input)
{
    $input=htmlspecialchars($input);
    $input=trim($input);
    return $input;
}
$email=cleanData($email);
$password=cleanData($password);



        if (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            echo '<h1 class="text-danger">ERROR PLEASE ENTER A VALID EMAIL</h1>  ' ;
            session_destroy();
          echo ' <a href="login.php">login</a>';

        }
        elseif (empty($password)){
            echo '<h1 class="text-danger">ERROR PLEASE ENTER A VALID PASSWORD</h1>  '  ;
            session_destroy();
            echo ' <a href="login.php">login</a>';


        }
        elseif (filter_var($email,FILTER_VALIDATE_EMAIL)&&(!empty($password))){
            header('location:home.php');
        }
        ?>







    <script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

