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

$intitule=$_GET["intitule"];
$temperature=$_GET["temperature"];
$taille=$_GET["taille"];
$tension=$_GET["tension"];
$dateCreate=$_GET["dateCreate"];
$patients_id=$_GET["patients_id"];
$poidsActuel=$_GET["poidsActuel"];
$poidsNormal=$_GET["poidsNormal"];
$imc=$_GET["imc"];
$tgc=$_GET["tgc"];
$masseMinEraleOsseuse=$_GET["masseMinEraleOsseuse"];
$pourcentageEau=$_GET["pourcentageEau"];
$masseMusculaire=$_GET["masseMusculaire"];
$evaluationSihouette=$_GET["evaluationSihouette"];
$tgViscerale=$_GET["tgViscerale"];

$sql="insert into bilan(intitule, temperature, taille, tension, dateCreate, patients_id, poidsActuel, poidsNormal, imc,
                        tgc, masseMinEraleOsseuse, pourcentageEau, masseMusculaire, evaluationSihouette, tgViscerale) 
 values('$intitule', '$temperature', '$taille', '$tension', '$dateCreate', '$patients_id', '$poidsActuel', '$poidsNormal', 
 '$imc', '$tgc', '$masseMinEraleOsseuse', '$pourcentageEau', '$masseMusculaire', '$evaluationSihouette', '$tgViscerale')
    ";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
