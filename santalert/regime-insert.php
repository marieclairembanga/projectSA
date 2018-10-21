<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include"config.php";


$patients_id=$_GET["patients_id"]; //d'abord choisir le patient
$type_regime=$_GET["type_regime"];
$datedebut=$_GET["datedebut"];
$poidsDepart=$_GET["poidsDepart"];
$imc=$_GET["imc"];
$restrictions=$_GET["restrictions"];
$taille=$_GET["taille"];
$natureRegime=$_GET["natureRegime"];
$alimentationRecommande=$_GET["alimentationRecommande"];
$typeTraitement=$_GET["typeTraitement"];
$dateFin=$_GET["dateFin"];



$sql="insert into regime(type_regime, datedebut, poidsDepart, imc, restrictions, taille, patients_id,
natureRegime, alimentationRecommande, typeTraitement, dateFin ) 
values('$type_regime', '$datedebut', '$poidsDepart','$imc', '$restrictions', '$taille', '$patients_id',
'$natureRegime', '$alimentationRecommande', '$typeTraitement', '$dateFin')
    ";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
