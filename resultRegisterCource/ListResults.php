<?php

require "dbCon.php";    

$query="SELECT *FROM result where point is null   ";
 $data=mysqli_query($connect,$query);
//  SELECT p.idDiem,s.tenmonhoc,u.name,p.pointSubjects FROM pointsubjects  p INNER JOIN subjects s  ON p.subject_id=s.idMonHoc INNER JOIN USER u ON p.user_id= u.idUser

//tao class
 class Result{
//tao construct
    function Result($id,$ngaydangki,$ngaybatdau,$sotinchi,$thoikhoabieu,$tenuser,$tenmonhoc,$tenGiaoVien,$kithi,$idMonHoc)
    {
        $this->ID=$id;
        $this->Ngaydangki=$ngaydangki;
        $this->Ngaybatdau=$ngaybatdau;
        $this->Sotinchi=$sotinchi;
        $this->Thoikhoabieu=$thoikhoabieu;
        $this->TenUser=$tenuser;
        $this->TenMonHoc=$tenmonhoc;
        $this->Tengiaovien=$tenGiaoVien;
        $this->KiThi=$kithi;
        $this->IdMonHoc=$idMonHoc;
    }
};

//tao mang
$mangS=array();

while($row=mysqli_fetch_assoc($data))
 {
        array_push($mangS,new Result($row['idResult'],$row['date_register'],$row['DateStart'],$row['credit']
        ,$row['schedule'],$row['user_name'],$row['subject_name'],$row['name_teacher'],$row['semester'],$row['subjects_id']));
 }


echo json_encode($mangS);

?>