<?PHP
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("wrong execute");
    } 
    include('connect.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email && $password){
             $sql = "select * from guest where email = '$email' and password='$password'";
             $result = mysql_query($sql);
             $rows=mysql_num_rows($result);
             if($rows){
                $res= mysql_query("SELECT guest_id from guest WHERE email = '$email' and password='$password'");
                $guest_id = mysql_fetch_assoc($res);   
                session_start();
                // store session data
                $_SESSION['guest_id']=$guest_id['guest_id'];
               
                   header("refresh:0;url=Reservation.php");
                   exit;
             }else{
                echo "email or password wrong";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='Guest sign in.html';},1000);
                    </script>
                ";
             }          
    }else{
                echo "uncomplete table";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='Guest sign in.html';},1000);
                      </script>";
    }
    mysql_close();
?>