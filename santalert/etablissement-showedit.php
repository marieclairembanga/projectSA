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

$query="SELECT * FROM etablissement
				where id='".$_GET["id"]."'  ";
$result = $conn->query($query);

$outp = "";

if( $rs=$result->fetch_array()) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'.$rs["id"].'",';
    $outp .= '"nom":"'.$rs["nom"].'",';
    $outp .= '"code":"'.$rs["code"].'",';
    $outp .= '"telephone":"'.$rs["telephone"].'",';
    $outp .= '"email":"'.$rs["email"]. '",';
    $outp .= '"type":"'.$rs["type"]. '"}';
}
$outp ='{"records":'.$outp.'}';
$conn->close();

echo($outp);


?>
