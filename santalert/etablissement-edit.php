<?php
/**
 * Created by PhpStorm.
 * User: Kamguia
 * Date: 18/10/2018
 * Time: 21:04
 */

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");



include"config.php";

$id=$_GET["id"];
$nom=$_GET["nom"];
$code=$_GET["code"];
$telephone=$_GET["telephone"];
$email=$_GET["email"];
$type=$_GET["type"];


$sql="update  etablissement set
          nom='$nom',
          code='$code',
          telephone='$telephone',
          email='$email',
          type='$type',
          where id='$id'
    ";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
