<?php 
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("wrong execute");
    }
    $guest_id=$_POST['guest_id'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $guest_name=$_POST['guest_name'];
    include('connect.php');

    $q="UPDATE guest SET email='$email',password='$password',guest_name='$guest_name' WHERE guest_id=$guest_id";

    $reslut=mysql_query($q,$con);   
    if (!$reslut){
        die('Error: ' . mysql_error());
    }else{
        echo "
                    <script>
                            setTimeout(function(){window.location.href='modify_guest_successful.html';},1000);
                    </script>
                ";
    }
    mysql_close($con);
?>