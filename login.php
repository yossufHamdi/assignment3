
<?php
session_start();

if(isset($_SESSION['email']))
{
    header('Location: all-products.php');
}?>
<html>
<head>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title></title>

</head>
<body class=" d-flex align-items-center" style="  background-color: rgba(0,0,0,.8);">




<div class="container ">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center p-4 bg-light rounded-lg shadow-lg">
            <h2 class="font-italic font-weight-normal text-primary fa-3x">sign in</h2>
            <form class="text-left" method="POST" action="handle.php">

                <div class="form-group text-primary">
                    <label for="exampleInputEmail1" >Email address</label>
                    <input name="email" type="email" class="form-control border-bottom border-top-0 border-right-0 border-left-0 border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group text-primary">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control border-bottom border-top-0 border-right-0 border-left-0 border-primary" id="exampleInputPassword1">
                </div>
                <div class="w-100 d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-outline-primary ">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>





<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
