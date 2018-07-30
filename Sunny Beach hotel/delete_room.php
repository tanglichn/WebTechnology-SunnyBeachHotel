<?php 
    session_start();
    header("Content-Type: text/html; charset=utf8");
    $room_id = $_SESSION['room_id'];
    include('connect.php');
    $q="DELETE FROM rooms WHERE room_id='$room_id'";
    $reslut=mysql_query($q,$con);   
    if (!$reslut){
        die('Error: ' . mysql_error());
    }else{
        echo "
                    <script>
                            setTimeout(function(){window.location.href='delete_room_successful.html';},1000);
                    </script>
                ";
    }
    mysql_close($con);
?>