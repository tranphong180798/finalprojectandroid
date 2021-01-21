<?php

require "../dbCon.php";
    $id=$_POST['idMH'];
    $tenmonhoc=$_POST['tenMH'];
    $sotinchi=$_POST['sotinchiMH'];
    $idgiaovien=$_POST['idGiaoVien'];
    $idkhoa=$_POST['idKhoa'];
    $hocki=$_POST['hockiMH'];
    
    
    

    $query="UPDATE subjects SET tenmonhoc='$tenmonhoc',credit='$sotinchi',semester='$hocki', category_id ='$idkhoa',teacher_id ='$idgiaovien' WHERE idMonHoc = '$id'  ";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>