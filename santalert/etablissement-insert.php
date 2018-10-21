<?php
/**
 * Created by PhpStorm.
 * User: Kamguia
 * Date: 18/10/2018
 * Time: 20:54
 */

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include"config.php";


$nom=$_GET["nom"];
$code=$_GET["code"];
$telephone=$_GET["telephone"];
$email=$_GET["email"];
$type=$_GET["type"];


$sql="insert into etablissement (nom, code, telephone, email) 
      values('$nom', '$code', '$telephone', '$email', '$tension')
 ";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
