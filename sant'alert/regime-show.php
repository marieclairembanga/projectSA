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

		$query="SELECT * FROM regime  ";
		$result = $conn->query($query);

       /* $query1="SELECT * FROM patients WHERE id='$patients_id'  ";
        $result1 = $conn->query($query1);*/



		$outp = "";
    while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
        if ($outp != "") {$outp .= ",";}
        $outp .= '{"id":"'.$rs["id"].'",';
        $outp .= '"patients_id":"'.$rs["patients_id"].'",';
        $outp .= '"type_regime":"'.$rs["type_regime"].'",';
        $outp .= '{"datedebut":"'.$rs["datedebut"].'",';
        $outp .= '{"poidsDepart":"'.$rs["poidsDepart"].'",';
        $outp .= '"imc":"'.$rs["imc"].'",';
        $outp .= '"restrictions":"'.$rs["restrictions"].'",';
        $outp .= '"taille":"'.$rs["taille"]. '",';
        $outp .= '{"natureRegime":"'.$rs["natureRegime"].'",';
        $outp .= '"alimentationRecommande":"'.$rs["alimentationRecommande"].'",';
        $outp .= '"typeTraitement":"'.$rs["typeTraitement"].'",';
        $outp .= '"dateFin":"'.$rs["dateFin"]. '"}';
    }
    $outp ='{"records":['.$outp.']}';
    $conn->close();

    echo($outp);

?>
