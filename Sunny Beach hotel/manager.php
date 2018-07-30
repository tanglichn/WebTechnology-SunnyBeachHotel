<?PHP
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("wrong execute");
    }

    include('connect.php');
    $manager_id = $_POST['manager_id'];
    $manager_password = $_POST['manager_password'];

    if ($manager_id && $manager_password){
             $sql = "select * from manager where manager_id = '$manager_id' and manager_password='$manager_password'";
             $result = mysql_query($sql);
             $rows=mysql_num_rows($result);
             if($rows){
                $res= mysql_query("SELECT manager_id from manager WHERE manager_id = '$manager_id' and manager_password='$manager_password'");
                $manager_id = mysql_fetch_assoc($res);
               
                session_start();
                // store session data
                $_SESSION['manager_id']=$manager_id['manager_id'];
               
                   header("refresh:0;url=view information.html");
                   exit;
             }else{
                echo "manager id wrong or password wrong";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='manager.html';},1000);
                    </script>
                ";
             }
    }else{
                echo "uncomplete table";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='manager.html';},1000);
                      </script>";
    }
    mysql_close();
?>