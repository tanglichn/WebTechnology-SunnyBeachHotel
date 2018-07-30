<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>delete reservation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">Sunny Beach hotel </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="search_reservation_information.html">return to search reservation record</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
<?php
    session_start();
    $guest_name = $_SESSION['guest_name'];
    $con=mysqli_connect("localhost","root","","Sunny_Beach_hotel");
// 检测连接
if (mysqli_connect_errno())
{
    echo "connect failed: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM reservation WHERE guest_name='$guest_name'");

mysqli_close($con);
?>
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            
                <h2 class="form-signin-heading">delete successful</h2>
                
        </div>
        <div class="col-md-4">
        </div>
</div>
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>