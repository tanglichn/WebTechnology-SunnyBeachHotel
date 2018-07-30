<?php 
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("wrong execute");
    }
    $email=$_POST['email'];
    $guest_name = $_POST['guest_name'];
    $password=$_POST['password'];
    include('connect.php');
    $q="insert into guest(guest_id,email,password,guest_name) values (null,'$email','$password','$guest_name')";
    $reslut=mysql_query($q,$con);
    if (!$reslut){
        die('Error: ' . mysql_error());
    }else{
        echo "
                    <script>
                            setTimeout(function(){window.location.href='register successful.html';},1000);
                    </script>
                ";
    }
    mysql_close($con);
?>