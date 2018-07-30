<?php
    $server="mysql.dur.ac.uk";
    $db_username="ljmv81";
    $db_password="cheste2r";
    $con=mysql_connect($server,$db_username,$db_password);
    if(!$con){
        die("can't connect".mysql_error());
    } 
    mysql_select_db('Xljmv81__',$con);
?>