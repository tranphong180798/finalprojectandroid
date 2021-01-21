<?php

require "../dbCon.php";
    $id=$_POST['idResult'];
   
    $point=$_POST['point'];

    $query="UPDATE result SET point ='$point' WHERE idResult = '$id'  ";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>