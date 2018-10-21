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
$regime_id=$_GET["regime_id"];
$poids=$_GET["poids"];
$dateParam=$_GET["dateParam"];
$temperature=$_GET["temperature"];
$tension=$_GET["tension"];
$observation=$_GET["observation"];


$sql="update  param_regime set
          regime_id='$regime_id',
          poids='$poids',
          dateParam='$dateParam',
          temperature='$temperature',
          tension='$tension',
          observation='$observation'
          where id='$id'
    ";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
