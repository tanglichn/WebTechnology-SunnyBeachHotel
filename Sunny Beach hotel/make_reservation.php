<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("wrong execute");
    }
    $room_id=$_POST['room_id'];
    $guest_id=$_POST['guest_id'];
    $guest_name=$_POST['guest_name'];
    $check_in_date=$_POST['check_in_date'];
    $check_out_date=$_POST['check_out_date'];

    include('connect.php');


    $q="insert into reservation(order_id,room_id,guest_id,guest_name,check_in_date,check_out_date) values (null,'$room_id','$guest_id','$guest_name','$check_in_date','$check_out_date')";
    $reslut=mysql_query($q,$con);

    $q_2="UPDATE rooms SET status='unvailable' WHERE room_id=$room_id";
    $reslut_2=mysql_query($q_2,$con);
   
    if (!$reslut || !$reslut_2){
        die('Error: ' . mysql_error());
    }else{
        echo "
                    <script>
                            setTimeout(function(){window.location.href='reservation successful.html';},1000);
                    </script>
                ";
    }
    mysql_close($con);
?>