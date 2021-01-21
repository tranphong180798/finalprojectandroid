<?php

require "../dbCon.php";   

$query="SELECT *FROM result where point is null ";
 $data=mysqli_query($connect,$query);
//  SELECT p.idDiem,s.tenmonhoc,u.name,p.pointSubjects FROM pointsubjects  p INNER JOIN subjects s  ON p.subject_id=s.idMonHoc INNER JOIN USER u ON p.user_id= u.idUser

//tao class
 class Result{
//tao construct
    function __construct($id,$tenuser,$tenmonhoc)
    {
        $this->ID=$id;
       
        $this->TenUser=$tenuser;
        $this->TenMonHoc=$tenmonhoc;
        
        
    }
};

//tao mang
$mangS=array();

while($row=mysqli_fetch_assoc($data))
 {
        array_push($mangS,new Result($row['idResult'],$row['user_name'],$row['subject_name']));
 }


echo json_encode($mangS);

?>