<?php
/**
 * Created by PhpStorm.
 * User: Kamguia
 * Date: 18/10/2018
 * Time: 21:07
 */

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");



include"config.php";

$query="SELECT * FROM param_regime
				where id='".$_GET["id"]."'  ";
$result = $conn->query($query);

$outp = "";


if( $rs=$result->fetch_array()) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'.$rs["id"].'",';
    $outp .= '"regime_id":"'.$rs["regime_id"].'",';
    $outp .= '"poids":"'.$rs["poids"].'",';
    $outp .= '"dateParam":"'.$rs["dateParam"]. '",';
    $outp .= '"temperature":"'.$rs["temperature"].'",';
    $outp .= '"tension":"'.$rs["tension"]. '",';
    $outp .= '"observation":"'.$rs["observation"].'"}';

}
$outp ='{"records":'.$outp.'}';
$conn->close();

echo($outp);


?>
