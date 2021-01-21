<?php

require "dbCon.php";

 $query="SELECT *FROM USER";
 $data=mysqli_query($connect,$query);


//tao class
 class User{
//tao construct
    function User($id,$hoten,$mssv,$username,$password,$ngaysinh,$gioitinh,$diachi,$vaitro,$tuoi,$khoa,$nienkhoa)
    {
        $this->ID=$id;
        $this->HoTen=$hoten;
        $this->Mssv=$mssv;
        $this->TenDangNhap=$username;
        $this->MatKhau=$password;
        $this->NgaySinh=$ngaysinh;
        $this->GioiTinh=$gioitinh;
        $this->DiaChi=$diachi;
        $this->VaiTro=$vaitro;
        $this->Tuoi=$tuoi;
        $this->Khoa=$khoa;
        $this->NienKhoa=$nienkhoa;

    }
}
//tao mang
$mangSV= [];

while($row=mysqli_fetch_assoc($data))
 {
     $mangSV[] = ['id'=>$row['idUser'], 'name'=>$row['NAME']];
//        array_push($mangSV,new User($row['idUser'],$row['NAME'],$row['mssv'],$row['username'],$row['password'],$row['DateOfBirth']
//        ,$row['gender'],$row['address'],$row['role'],$row['age'],$row['faculty'],$row['schoolyear']));
 }

 var_dump($mangSV);
echo json_encode($mangSV);

?>
