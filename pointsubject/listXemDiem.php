<?php

require "dbCon.php";

 $query="SELECT *FROM result WHERE point >0 ";
 $data=mysqli_query($connect,$query);


//tao class
 class Result{
//tao construct
    function Result($id,$tenmonhoc,$sotinchi,$points,$tenuser,$hocki)
    {
        $this->ID=$id;
        $this->TenMonHoc=$tenmonhoc;
        $this->SoTinChi=$sotinchi;
        $this->Points=$points;
        $this->TenUser=$tenuser;
        $this->HocKi=$hocki;
    }
}
//tao mang
$mangSV=array();

while($row=mysqli_fetch_assoc($data))
 {
        array_push($mangSV,new Result($row['idResult'],$row['subject_name'],$row['credit']
        ,$row['point'],$row['user_name'],$row['semester']));
 }


echo json_encode($mangSV);

?>