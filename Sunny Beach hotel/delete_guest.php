<?php 
    session_start();
    header("Content-Type: text/html; charset=utf8");
    $guest_name = $_SESSION['guest_name'];
    include('connect.php');
    $q="DELETE FROM guest WHERE guest_name='$guest_name'";
    $reslut=mysql_query($q,$con);   
    if (!$reslut){
        die('Error: ' . mysql_error());
    }else{
        echo "
                    <script>
                            setTimeout(function(){window.location.href='delete_guest_successful.html';},1000);
                    </script>
                ";
    }
    mysql_close($con);
?>