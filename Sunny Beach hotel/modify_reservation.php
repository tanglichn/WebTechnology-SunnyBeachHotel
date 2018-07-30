<?php 
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("wrong execute");
    }
    $order_id=$_POST['order_id'];
    $room_id=$_POST['room_id'];
    $guest_id=$_POST['guest_id'];
    $guest_name=$_POST['guest_name'];
    $check_in_date=$_POST['check_in_date'];
    $check_out_date=$_POST['check_out_date'];
    include('connect.php');

    $q="UPDATE reservation SET room_id='$room_id',guest_id='$guest_id',guest_name='$guest_name',check_in_date='$check_in_date',check_out_date='$check_out_date' WHERE order_id=$order_id";;

    $reslut=mysql_query($q,$con);   
    if (!$reslut){
        die('Error: ' . mysql_error());
    }else{
        echo "
                    <script>
                            setTimeout(function(){window.location.href='modify_reservation_successful.html';},1000);
                    </script>
                ";
    }
    mysql_close($con);
?>