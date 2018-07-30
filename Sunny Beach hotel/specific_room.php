<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>specific room</title>
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
                <li><a href="search_room_information.php">view all room</a></li>
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
    session_start();
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("wrong execute");
    } 

    include('connect.php');
    $room_id = $_POST['room_id'];   
    $_SESSION['room_id']="$room_id";         
         $sql = mysql_query("select * from rooms where room_id = '$room_id'");
         $datarow = mysql_num_rows($sql); 
         if ($datarow ==0) {
             header('Location: no_room.html');
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
    <div class="Rooms">
            <div class="container"> 
            <div class="col-md-4 reser-grid">
             </div>             
               <div class="col-md-4 reser-grid">
                     <h5>Delete this room</h5>
                     <div class="best-hot">
                        <button onclick="window.location.href='delete_room.php'" class="btn btn-primary">delete</button>
                     </div>
                  </div>
                  <div class="col-md-4 reser-grid">
                     <h5>Modify room</h5>
                     <div class="best-hot">
                        <button type="submit" onclick="window.location.href='modify_room.html'" name="submit" class="btn btn-primary" id="btn-reg">modify</button>
                     </div>       
          </div>
         </div>
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>