<?php

    require "dbCon.php";
    $idgv=$_POST['idCuaGiaoVien'];
    $query="DELETE FROM teacher WHERE idTeacher='$idgv' ";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }


?>