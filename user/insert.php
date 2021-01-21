<?php
  require "../dbCon.php";
    $mssv=$_POST['mssvSV'];
    $hoten=$_POST['hotenSV'];
    $khoa=$_POST['khoaSV'];
    $nienkhoa=$_POST['nienkhoaSV'];
    $gioitinh=$_POST['gioitinhSV'];
    $diachi=$_POST['diachiSV'];
    $role="ROLE_USER";
    $namsinh=$_POST['ngaythangnamsinhSV'];
    $username=$_POST['usernameSV'];
    $password=$_POST['passwordSV'];
   
    

    $query="INSERT INTO USER VALUES(null,'$hoten','$mssv','$username','$password',
    '$role','$gioitinh',11,'$khoa','$diachi','$namsinh','$nienkhoa' )";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>