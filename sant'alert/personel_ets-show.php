<?php
/**
 * Created by PhpStorm.
 * User: Kamguia
 * Date: 18/10/2018
 * Time: 21:59
 */

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

		include"config.php";

		$query="SELECT * FROM personel_ets  ";
		$result = $conn->query($query);

       /* $query1="SELECT * FROM patients WHERE id='$patients_id'  ";
        $result1 = $conn->query($query1);*/



		$outp = "";
    while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
        if ($outp != "") {$outp .= ",";}
        $outp .= '{"id":"'.$rs["id"].'",';
        $outp .= '"etablissement_id":"'.$rs["etablissement_id"].'",';
        $outp .= '"nom":"'.$rs["nom"].'",';
        $outp .= '{"premon":"'.$rs["premon"].'",';
        $outp .= '{"telephone":"'.$rs["telephone"].'",';
        $outp .= '"email":"'.$rs["email"].'",';
        $outp .= '"type_personnel":"'.$rs["type_personnel"].'"}';
    }
    $outp ='{"records":['.$outp.']}';
    $conn->close();

    echo($outp);

?>
