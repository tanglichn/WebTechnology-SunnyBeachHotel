<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>search room information</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">Sunny Beach hotel</a>
        </div> 
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="view information.html">return to view information</a></li>
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
         <tr><th>room_id</th><th>room_type</th><th>price</th><th>status</th></tr>
   
<?php
        require 'connect.php';
         $sql = mysql_query("select * from rooms");
         $datarow = mysql_num_rows($sql); 
         if ($datarow ==0) {
             header('Location: adding_room.html');
         }
     
            for($i=0;$i<$datarow;$i++){
                $sql_arr = mysql_fetch_assoc($sql);
                $room_id = $sql_arr['room_id'];
                $room_type = $sql_arr['room_type'];
                $price = $sql_arr['price'];
                $status = $sql_arr['status'];
                echo "<tr><td>$room_id</td><td>$room_type</td><td>$price</td><td>$status</td></tr>";
            }
?>
</table>
    </div>
    <div class="col-md-4">
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <form name="search_specific_room" action="specific_room.php" class="form-signin" target="submitFrame" method="post">
                <h2 class="form-signin-heading">search specific room</h2>
                <input type="room_id" name="room_id" id="inputRoom_id" class="form-control" placeholder="please input the Room ID" required autofocus><br>
                <button type="submit" name="submit" class="btn btn-primary" id="btn-login">Search</button>
            </form>
             </div>         
        <div class="col-md-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <form name="add_room" action="add_room.html" >
                <h2 class="form-signin-heading">add room</h2>
                <button class="btn btn-primary" id="btn-login">Add</button>
            </form>
        </div>
        <div class="col-md-4">
        </div>
        </div>
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>
