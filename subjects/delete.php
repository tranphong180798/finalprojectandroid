<?php

    require "dbCon.php";
    $idmh=$_POST['idCuaMonHoc'];
    $query="DELETE FROM subjects WHERE idMonHoc='$idmh' ";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }


?>