<?php

    require "dbCon.php";
    $idsv=$_POST['idCuaSinhVien'];
    $query="DELETE FROM USER WHERE idUser='$idsv' ";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }


?>