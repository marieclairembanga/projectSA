<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include"config.php";

$patients_id=$_GET["patients_id"];
$datecreate=$_GET["datecreate"];
$symtome=$_GET["symtome"];
$traitement=$_GET["traitement"];
$evaluation=$_GET["evaluation"];
$observation=$_GET["observation"];
$cout_traitement=$_GET["cout_traitement"];

$sql="insert into auto_med(patients_id, datecreate, symtome, traitement, evaluation, observation, cout_traitement) 
          values('$patients_id', '$datecreate','$symtome','$traitement','$evaluation','$observation','$cout_traitement')";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
