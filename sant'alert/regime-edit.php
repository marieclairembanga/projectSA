<?php
/**
 * Created by PhpStorm.
 * User: Kamguia
 * Date: 18/10/2018
 * Time: 21:48
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");



include"config.php";

$id=$_GET["id"];
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


$sql="update  regime set
          type_regime='$type_regime',
          datedebut='$datedebut',
          poidsDepart='$poidsDepart',
          imc='$imc',
          restrictions='$restrictions',
          taille='$taille'
          natureRegime='$natureRegime',
          alimentationRecommande='$alimentationRecommande',
          typeTraitement='$typeTraitement',
          dateFin='$dateFin'
          where id='$id'
    ";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
