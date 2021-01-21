<?php
require "../dbCon.php";

    
    $ngaydangki=$_POST['ngaydangki'];
    $thoikhoabieu=$_POST['thoikhoabieu'];
    $tenuser=$_POST['tenUser'];
    $tenmonhoc=$_POST['tenmonhoc'];
    $tengiaovien=$_POST['tenGiaoVien'];
    $sotinchi=$_POST['sotinhchi'];
    $hocki=$_POST['hocki'];
    $id_monhoc=$_POST['idMonHoc'];

    $query="INSERT INTO result VALUES(null,'$ngaydangki','Tuần sau',$sotinchi,'$thoikhoabieu','$tenuser','$tenmonhoc','$tengiaovien','$hocki',null,'$id_monhoc' )";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>