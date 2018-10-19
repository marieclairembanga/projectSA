<?php
/**
 * Created by PhpStorm.
 * User: Kamguia
 * Date: 18/10/2018
 * Time: 21:52
 */

/**
 * Created by PhpStorm.
 * User: Kamguia
 * Date: 18/10/2018
 * Time: 21:48
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include"config.php";



$etablissement_id=$_GET["etablissement_id"];
$nom=$_GET["nom"];
$premon=$_GET["premon"];
$telephone=$_GET["telephone"];
$email=$_GET["email"];
$type_personnel=$_GET["type_personnel"];


$sql="insert into personel_ets(etablissement_id, nom, premon, telephone, email, type_personnel) 
 values('$etablissement_id', '$nom', '$premon', '$telephone', '$email', '$type_personnel')
    ";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
