<?php

require "../dbCon.php";

 $query="SELECT *FROM category";
 $data=mysqli_query($connect,$query);


//tao class
 class Category{
//tao construct
    function __construct($id,$tenKhoa)
    {
        $this->ID=$id;
        $this->TenKhoa=$tenKhoa;
        
    }
}
//tao mang
$mangC=array();

while($row=mysqli_fetch_assoc($data))
 {
        array_push($mangC,new Category($row['idCategory'],$row['NAMEE']));
 }


echo json_encode($mangC);

?>