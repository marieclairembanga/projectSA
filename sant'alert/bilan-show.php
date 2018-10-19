<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

		include"config.php";

		$query="SELECT * FROM bilan  ";
		$result = $conn->query($query);

		$outp = "";
    while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
        if ($outp != "") {$outp .= ",";}
        $outp .= '{"id":"'.$rs["id"].'",';
        $outp .= '"intitule":"'.$rs["intitule"].'",';
        $outp .= '"temperature":"'.$rs["temperature"].'",';
        $outp .= '"taille":"'.$rs["taille"].'",';
        $outp .= '"tension":"'.$rs["tension"]. '",';
        $outp .= '"dateCreate":"'.$rs["dateCreate"]. '",';
        $outp .= '"patients_id":"'.$rs["patients_id"].'",';
        $outp .= '"poidsActuel":"'.$rs["poidsActuel"].'",';
        $outp .= '"poidsNormal":"'.$rs["poidsNormal"].'",';
        $outp .= '"imc":"'.$rs["imc"].'",';
        $outp .= '"tgc":"'.$rs["tgc"]. '",';
        $outp .= '"masseMinEraleOsseuse":"'.$rs["masseMinEraleOsseuse"]. '",';
        $outp .= '"pourcentageEau":"'.$rs["pourcentageEau"].'",';
        $outp .= '"masseMusculaire":"'.$rs["masseMusculaire"].'",';
        $outp .= '"evaluationSihouette":"'.$rs["evaluationSihouette"]. '",';
        $outp .= '"tgViscerale":"'.$rs["tgViscerale"]. '"}';

    }
    $outp ='{"records":['.$outp.']}';
    $conn->close();

    echo($outp);

?>
