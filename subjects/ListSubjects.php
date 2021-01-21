<?php

require "../dbCon.php";

 $query="SELECT s.idMonHoc,s.tenmonhoc,s.credit,c.idCategory,c.NAMEE,t.idTeacher,t.nameTeacher,s.semester FROM subjects  s LEFT JOIN category c  ON s.category_id=c.idCategory LEFT JOIN teacher t ON s.teacher_id=t.idTeacher  ";
 $data=mysqli_query($connect,$query);
//  SELECT p.idDiem,s.tenmonhoc,u.name,p.pointSubjects FROM pointsubjects  p INNER JOIN subjects s  ON p.subject_id=s.idMonHoc INNER JOIN USER u ON p.user_id= u.idUser

//tao class
 class Subjects{
//tao construct
    function __construct($id,$tenmonhoc,$sotinchi,$id_khoa,$tenKhoa,$id_teacher,$tenGiaoVien,$kithi)
    {
        $this->ID=$id;
        $this->TenMonHoc=$tenmonhoc;
        $this->SoTinChi=$sotinchi;
        $this->Id_Khoa=$id_khoa;
        $this->TenKhoa=$tenKhoa;
        $this->Id_Teacher=$id_teacher;
        $this->TenGiaoVien=$tenGiaoVien;
        $this->KiThi=$kithi;
    }
};
class Teacher{
    function Teacher($id,$nameTeacher,$age,$address,$certificate) {
        $this->ID=$id;
        $this->HoTen=$nameTeacher;
        $this->Tuoi=$age;
        $this->Diachi=$address;
        $this->BangCap=$certificate;

     }

};
class Category{
    function Category($id,$name) {
        $this->ID=$id;
        $this->TenGiaoVien=$name;
        

     }
    };
//tao mang
$mangSB=array();

while($row=mysqli_fetch_assoc($data))
 {
        array_push($mangSB,new Subjects($row['idMonHoc'],$row['tenmonhoc'],$row['credit'],$row['idCategory']
        ,$row['NAMEE'],$row['idTeacher'],$row['nameTeacher'],$row['semester']));
 }


echo json_encode($mangSB);

?>