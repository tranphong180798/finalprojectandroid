<?php

require "../dbCon.php";
    $idDK=$_POST['idCuaMonDangKi'];
    $tenuser=$_POST['tenuser'];
    $query="DELETE FROM result WHERE subjects_id='$idDK' ";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }


?>