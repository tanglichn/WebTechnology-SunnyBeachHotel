<?php 
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("wrong execute");
    }
    $room_id=$_POST['room_id'];
    $price=$_POST['price'];
    $status=$_POST['status'];
    include('connect.php');

    $q="UPDATE rooms SET price='$price',status='$status' WHERE room_id=$room_id";

    $reslut=mysql_query($q,$con);   
    if (!$reslut){
        die('Error: ' . mysql_error());
    }else{
        echo "
                    <script>
                            setTimeout(function(){window.location.href='modify_room_successful.html';},1000);
                    </script>
                ";
    }
    mysql_close($con);
?>    