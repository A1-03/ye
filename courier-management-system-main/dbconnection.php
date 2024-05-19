<?php

    $dbcon = mysqli_connect('127.0.0.1','root','','project_1');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>