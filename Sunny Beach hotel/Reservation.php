<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation</title>
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
                <li><a href="Rooms.html">Rooms</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
  <div class="row">
  <div class="col-md-4">
    </div>
    <div class="col-md-4">
    <table style='text-align:left;' border='1'>
         <tr><th>order_id</th><th>room_id</th><th>guest_id</th><th>guest_name</th><th>check_in_date</th><th>check_out_date</th></tr>
    <?php
    session_start();
        require 'connect.php';

         $guest_id=$_SESSION['guest_id'];
         $sql = mysql_query("select * from reservation where guest_id = $guest_id");
         $datarow = mysql_num_rows($sql);
         if ($datarow ==0) {
             header('Location: no_guest_reservation.html');
         }
            for($i=0;$i<$datarow;$i++){
                $sql_arr = mysql_fetch_assoc($sql);
                $order_id = $sql_arr['order_id'];
                $room_id = $sql_arr['room_id'];
                $guest_id = $sql_arr['guest_id'];
                $guest_name = $sql_arr['guest_name'];
                $check_in_date = $sql_arr['check_in_date'];
                $check_out_date = $sql_arr['check_out_date'];
                echo "<tr><th>$order_id</th><th>$room_id</th><th>$guest_id</th><th>$guest_name</th><th>$check_in_date</th><th>$check_out_date</th></tr>";
            }
    ?>
</table>
    </div>
    <div class="col-md-4">
    </div>
    </div>
    </div>
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>