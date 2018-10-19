<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");



include"config.php";

$query="SELECT * FROM auto_med
				where id='".$_GET["id"]."'  ";
$result = $conn->query($query);

$outp = "";

if( $rs=$result->fetch_array()) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",';
    $outp .= '"patients_id":"'.$rs["patients_id"].'",';
    $outp .= '"datecreate":"'   . $rs["datecreate"]        . '",';
    $outp .= '"symtome":"'   . $rs["symtome"]        . '",';
    $outp .= '"traitement":"'. $rs["traitement"]     . '",';
    $outp .= '"evaluation":"'   . $rs["evaluation"]        . '",';
    $outp .= '"observation":"'   . $rs["observation"]        . '",';
    $outp .= '"cout_traitement":"'. $rs["cout_traitement"]     . '"}';
}
$outp ='{"records":'.$outp.'}';
$conn->close();

echo($outp);


?>
