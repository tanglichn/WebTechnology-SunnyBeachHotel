<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Available Rooms</title>
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
                <li><a href="Rooms.html">return to search availanle room</a></li>
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
         <tr><th>room_id</th><th>room_type</th><th>price</th></tr>
    <?php
        header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("wrong execute");
    }

    include('connect.php');
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    
         $sql = mysql_query("select * from reservation RIGHT JOIN rooms using (room_id) where check_out_date>'$check_in_date' or check_in_date<'$check_out_date' or status='available'");
         $datarow = mysql_num_rows($sql);
         if ($datarow ==0) {
             header('Location: no_available_room.html');
         }
            for($i=0;$i<$datarow;$i++){
                $sql_arr = mysql_fetch_assoc($sql);
                
                $room_id = $sql_arr['room_id'];
                $room_type = $sql_arr['room_type'];
                $price = $sql_arr['price'];
                echo "<tr><td>$room_id</td><td>$room_type</td><td>$price</td></tr>";
            }
    ?>
</table>
</div>
<div class="col-md-4">
    </div>
    </div>
    </div>
<div class="container">
    <div class="row">
<div class="col-md-4">
</div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="make_reservation.html">make reservation</a></li>
            </ul>
        </div>
        </div>
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>