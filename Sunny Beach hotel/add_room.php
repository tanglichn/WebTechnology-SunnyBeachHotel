<?php 
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("wrong execute");
    }
    $room_type=$_POST['room_type'];
    $price=$_POST['price'];
    $status=$_POST['status'];
    include('connect.php');
    $q="insert into rooms(room_id,room_type,price,status) values (null,'$room_type','$price','$status')";
    $reslut=mysql_query($q,$con);   
    if (!$reslut){
        die('Error: ' . mysql_error());
    }else{
        echo "
                    <script>
                            setTimeout(function(){window.location.href='add_room_successful.html';},1000);
                    </script>
                ";
    }
    mysql_close($con);
?>
   