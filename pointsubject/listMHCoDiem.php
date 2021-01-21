<?php

require "../dbCon.php";

 $query="SELECT *FROM student";
 $data=mysqli_query($connect,$query);


//tao class
 class SinhVien{
//tao construct
    function __construct($id,$hoten,$namsinh,$diachi)
    {
        $this->ID=$id;
        $this->HoTen=$hoten;
        $this->NamSinh=$namsinh;
        $this->DiaChi=$diachi;
    }
}
//tao mang
$mangSV=array();

while($row=mysqli_fetch_assoc($data))
 {
        array_push($mangSV,new SinhVien($row['id'],$row['hoten'],$row['namsinh']
        ,$row['diachi']));
 }


echo json_encode($mangSV);

?>