<?php
    require "dbCon.php";

    $hoten=$_POST['hotenGV'];
    $tuoi=$_POST['tuoiGGV'];
    $diachi=$_POST['diachiGV'];
    $bangcap=$_POST['bangcapGV'];


    $query="INSERT INTO teacher VALUES(null,'$hoten','$tuoi','$diachi','$bangcap' )";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>