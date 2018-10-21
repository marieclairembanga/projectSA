<?php
/**
 * Created by PhpStorm.
 * User: Kamguia
 * Date: 18/10/2018
 * Time: 21:13
 */

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

		include"config.php";

		$query="SELECT * FROM param_regime  ";
		$result = $conn->query($query);

		$outp = "";
    while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
        if ($outp != "") {$outp .= ",";}
        $outp .= '{"id":"'.$rs["id"].'",';
        $outp .= '{"id":"'.$rs["id"].'",';
        $outp .= '"regime_id":"'.$rs["regime_id"].'",';
        $outp .= '"poids":"'.$rs["poids"].'",';
        $outp .= '"dateParam":"'.$rs["dateParam"]. '",';
        $outp .= '"temperature":"'.$rs["temperature"].'",';
        $outp .= '"tension":"'.$rs["tension"]. '",';
        $outp .= '"observation":"'.$rs["observation"].'"}';

    }
    $outp ='{"records":['.$outp.']}';
    $conn->close();

    echo($outp);

?>
