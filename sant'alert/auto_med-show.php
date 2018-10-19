<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

		include"config.php";

		$query="SELECT * FROM auto_med  ";
		$result = $conn->query($query);



		$outp = "";
    while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
        if ($outp != "") {$outp .= ",";}
        $outp .= '{"id":"'.$rs["id"].'",';
        $outp .= '"patients_id":"'.$rs["patients_id"].'",';
        $outp .= '"datecreate":"'.$rs["datecreate"].'",';
        $outp .= '"symtome":"'.$rs["symtome"]. '",';
        $outp .= '"traitement":"'.$rs["traitement"].'",';
        $outp .= '"evaluation":"'.$rs["evaluation"].'",';
        $outp .= '"observation":"'.$rs["observation"]. '",';
        $outp .= '"cout_traitement":"'.$rs["cout_traitement"]. '"}';
    }
    $outp ='{"records":['.$outp.']}';
    $conn->close();

    echo($outp);

?>
