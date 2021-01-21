<?php

require "../dbCon.php";
    $id=$_POST['idSV'];
    
    $gioitinh=$_POST['gioitinhSV'];
    
    $diachi=$_POST['diachiSV'];
    $namsinh=$_POST['namsinhSV'];
    

    $query=" UPDATE USER SET gender ='$gioitinh',address ='$diachi',DateOfBirth ='$namsinh' WHERE idUser = '$id'  ";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>