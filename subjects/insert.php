<?php
  require "../dbCon.php";

    $tenmonhoc=$_POST['tenMH'];
    $sotinchi=$_POST['sotinchiMH'];
    $idgiaovien=$_POST['idGiaoVien'];
    $idkhoa=$_POST['idKhoa'];
    $hocki=$_POST['hockiMH'];

    // $tenmonhoc="djhskjf";
    // $sotinchi="2";
    // $idgiaovien="2";
    // $idkhoa="3";
    // $hocki="5";

    $query="INSERT INTO subjects VALUES(null,'$tenmonhoc','$sotinchi','$idgiaovien','$idkhoa','$hocki',null )";

    if(mysqli_query($connect,$query))
    {
        echo "success";
    }
    else
    {
        echo 'error';
    }

?>