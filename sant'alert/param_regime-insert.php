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

$regime_id=$_GET["regime_id"];
$poids=$_GET["poids"];
$dateParam=$_GET["dateParam"];
$temperature=$_GET["temperature"];
$tension=$_GET["tension"];
$observation=$_GET["observation"];


$sql="insert into param_regime (regime_id, poids, dateParam, temperature, tension, observation) 
 values('$regime_id', '$poids', '$dateParam', '$temperature', '$tension', '$observation')";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
