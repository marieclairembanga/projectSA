<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");



include"config.php";

$query="SELECT * FROM patients
				where id='".$_GET["id"]."'  ";
$result = $conn->query($query);

$outp = "";

if( $rs=$result->fetch_array()) {
    if ($outp != "") {$outp .= ",";}

    $outp .= '{"id":"'.$rs["id"].'",';
    $outp .= '"nom":"'.$rs["nom"].'",';
    $outp .= '"premon":"'.$rs["premon"]. '"}';
    $outp .= '"mot_de_passe":"'.$rs["mot_de_passe"].'",';
    $outp .= '"telephone":"'.$rs["telephone"]. '"}';
    $outp .= '"anneeNais":"'.$rs["anneeNais"].'",';
    $outp .= '"lieuNais":"'.$rs["lieuNais"]. '"}';
    $outp .= '"profession":"'.$rs["profession"].'",';
    $outp .= '"filename":"'.$rs["filename"].'",';
    $outp .= '"lieuService":"'.$rs["lieuService"]. '"}';
    $outp .= '"dateCreate":"'.$rs["dateCreate"].'",';
    $outp .= '"telBureau":"'.$rs["telBureau"].'",';
    $outp .= '"email":"'.$rs["email"]. '"}';
    $outp .= '"residencePrincipal":"'.$rs["residencePrincipal"].'",';
    $outp .= '"residenceSecondaire":"'.$rs["residenceSecondaire"].'",';
    $outp .= '"nomPere":"'.$rs["nomPere"]. '"}';
    $outp .= '"telPere":"'.$rs["telPere"].'",';
    $outp .= '"emailPere":"'.$rs["emailPere"].'",';
    $outp .= '"professionPere":"'.$rs["professionPere"]. '"}';
    $outp .= '"quartierPere":"'.$rs["quartierPere"].'",';
    $outp .= '"ruePere":"'.$rs["ruePere"].'",';
    $outp .= '"nomMere":"'.$rs["nomMere"]. '"}';
    $outp .= '"telMere":"'.$rs["telMere"].'",';
    $outp .= '"emailMere":"'.$rs["emailMere"].'",';
    $outp .= '"professionMere":"'.$rs["professionMere"]. '"}';
    $outp .= '"quartierMere":"'.$rs["quartierMere"].'",';
    $outp .= '"rueMere":"'.$rs["rueMere"].'",';
    $outp .= '"nomTuteur":"'.$rs["nomTuteur"]. '"}';
    $outp .= '"telTuteur":"'.$rs["telTuteur"].'",';
    $outp .= '"emailTuteur":"'.$rs["emailTuteur"].'",';
    $outp .= '"professionTuteur":"'.$rs["professionTuteur"]. '"}';
    $outp .= '"quartierTuteur":"'.$rs["quartierTuteur"].'",';
    $outp .= '"rueTuteur":"'.$rs["rueTuteur"].'",';
    $outp .= '"proche1":"'.$rs["proche1"]. '"}';
    $outp .= '"tel_proche1":"'.$rs["tel_proche1"].'",';
    $outp .= '"emailProche1":"'.$rs["emailProche1"].'",';
    $outp .= '"residenceProche1":"'.$rs["residenceProche1"]. '"}';
    $outp .= '"professionProche1":"'.$rs["professionProche1"].'",';
    $outp .= '"proche2":"'.$rs["proche2"].'",';
    $outp .= '"tel_proche2":"'.$rs["tel_proche2"]. '"}';
    $outp .= '"emailProche2":"'.$rs["emailProche2"].'",';
    $outp .= '"residenceProche2":"'.$rs["residenceProche2"].'",';
    $outp .= '"professionProche2":"'.$rs["professionProche2"]. '"}';
    $outp .= '"tel_proche3":"'.$rs["tel_proche3"].'",';
    $outp .= '"emailProche3":"'.$rs["emailProche3"].'",';
    $outp .= '"residenceProche3":"'.$rs["residenceProche3"]. '"}';
    $outp .= '"professionProche3":"'.$rs["professionProche3"].'",';
    $outp .= '"groupeSanguin":"'.$rs["groupeSanguin"].'",';
    $outp .= '"allergie":"'.$rs["allergie"]. '"}';
    $outp .= '"incapacite":"'.$rs["incapacite"].'",';
    $outp .= '"medecinFamille":"'.$rs["medecinFamille"].'",';
    $outp .= '"assurance":"'.$rs["assurance"]. '"}';
    $outp .= '"rhesus":"'.$rs["rhesus"].'",';
    $outp .= '"observationPhisyque":"'.$rs["observationPhisyque"].'",';
    $outp .= '"signeParticulier":"'.$rs["signeParticulier"].'"}';

}
$outp ='{"records":'.$outp.'}';
$conn->close();

echo($outp);


?>
