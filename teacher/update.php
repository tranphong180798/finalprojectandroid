<?php

require "../dbCon.php";
    $id=$_POST['idGV'];
    $hoten=$_POST['hotenGV'];
    $tuoi=$_POST['tuoiGGV'];
    $diachi=$_POST['diachiGV'];
    $bangcap=$_POST['bangcapGV'];

    $query="UPDATE teacher SET nameTeacher ='$hoten',age ='$tuoi',address ='$diachi',certificate='$bangcap' WHERE idTeacher = '$id'  ";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>