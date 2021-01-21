<?php
require "../dbCon.php";

 $query="SELECT *FROM teacher";
 $data=mysqli_query($connect,$query);


//tao class
 class Teacher{
//tao construct
    function __construct($id,$hoten,$age,$address,$certificate)
    {
        $this->ID=$id;
        $this->HoTen=$hoten;
        $this->Age=$age;
        $this->Address=$address;
        $this->Certificate=$certificate;
      
       
    }
}
//tao mang
$mangTC=array();

while($row=mysqli_fetch_assoc($data))
 {
        array_push($mangTC,new Teacher($row['idTeacher'],$row['nameTeacher'],$row['age'],$row['address'],$row['certificate']));
 }


echo json_encode($mangTC);

?>