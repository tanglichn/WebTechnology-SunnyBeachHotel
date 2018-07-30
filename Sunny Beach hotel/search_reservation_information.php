<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation information</title>
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
                <li><a href="search_reservation_information.html">return to search reservation</a></li>
            </ul>
        </div>      
    </div>
</nav>
<div class="container">
    <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
    <table style='text-align:center;' border='1'>
         <tr><th>order_id</th><th>room_id</th><th>guest_id</th><th>guest_name</th><th>check_in_date</th><th>check_out_date</th></tr>
    
<?php
    session_start();
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("wrong execute");
    }

    include('connect.php');
    $guest_name = $_POST['guest_name'];          
    $_SESSION['guest_name']="$guest_name";
         $sql = mysql_query("select * from reservation where guest_name = '$guest_name'");
         $datarow = mysql_num_rows($sql); 
         if ($datarow ==0) {
             header('Location: no_reservation.html');
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
    <div class="Rooms">
            <div class="container"> 
            <div class="col-md-4 reser-grid"> 
            </div>       
               <div class="col-md-4 reser-grid">
                     <h5>Delete reservation information</h5>
                     <div class="best-hot">
                        <button onclick="window.location.href='delete_reservation.php'" class="btn btn-primary">delete</button>
                     </div>
                  </div>
                  <div class="col-md-4 reser-grid">
                     <h5>Modify reservation information</h5>
                     <div class="best-hot">
                        <button type="submit" onclick="window.location.href='modify_reservation.html'" name="submit" class="btn btn-primary" id="btn-reg">modify</button>
                     </div>        
          </div>
         </div>
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>