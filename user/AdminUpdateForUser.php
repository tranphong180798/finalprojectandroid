<?php

    require "dbCon.php";
    $id=$_POST['idSV'];
   
    $mssv=$_POST['mssvSV'];
    $hoten=$_POST['hotenSV'];
     $khoa=$_POST['khoaSV'];
     $nienkhoa=$_POST['nienkhoaSV'];
     $gioitinh=$_POST['gioitinhSV'];
     $diachi=$_POST['diachiSV'];
    // $role="ROLE_USER";
    $namsinh=$_POST['ngaythangnamsinhSV'];
    $username=$_POST['usernameSV'];
    $password=$_POST['passwordSV'];
    

    $query=" UPDATE USER SET  username='$username',password='$password',DateOfBirth ='$namsinh',mssv='$mssv',NAME='$hoten',faculty='$khoa',schoolyear='$nienkhoa',gender='$gioitinh',address='$diachi' WHERE idUser = '$id'  ";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>