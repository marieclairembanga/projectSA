<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include"config.php";


$nom=$_GET["nom"];
$premon=$_GET["premon"];
$mot_de_passe=$_GET["mot_de_passe"];
$telephone=$_GET["telephone"];
$anneeNais=$_GET["anneeNais"];
$lieuNais=$_GET["lieuNais"];
$profession=$_GET["profession"];
$filename=$_GET["filename"];
$lieuService=$_GET["lieuService"];
$dateCreate=$_GET["dateCreate"];
$telBureau=$_GET["telBureau"];
$email=$_GET["email"];
$residencePrincipal=$_GET["residencePrincipal"];
$residenceSecondaire=$_GET["residenceSecondaire"];
$nomPere=$_GET["nomPere"];
$telPere=$_GET["telPere"];
$emailPere=$_GET["emailPere"];
$professionPere=$_GET["professionPere"];
$quartierPere=$_GET["quartierPere"];
$ruePere=$_GET["ruePere"];
$nomMere=$_GET["nomMere"];
$telMere=$_GET["telMere"];
$emailMere=$_GET["emailMere"];
$professionMere=$_GET["professionMere"];
$quartierMere=$_GET["quartierMere"];
$rueMere=$_GET["rueMere"];
$nomTuteur=$_GET["nomTuteur"];
$telTuteur=$_GET["telTuteur"];
$emailTuteur=$_GET["emailTuteur"];
$professionTuteur=$_GET["professionTuteur"];
$quartierTuteur=$_GET["quartierTuteur"];
$rueTuteur=$_GET["rueTuteur"];
$proche1=$_GET["proche1"];
$tel_proche1=$_GET["tel_proche1"];
$emailProche1=$_GET["emailProche1"];
$residenceProche1=$_GET["residenceProche1"];
$professionProche1=$_GET["professionProche1"];
$proche2=$_GET["proche2"];
$tel_proche2=$_GET["tel_proche2"];
$emailProche2=$_GET["emailProche2"];
$residenceProche2=$_GET["residenceProche2"];
$professionProche2=$_GET["professionProche2"];
$proche3=$_GET["proche3"];
$tel_proche3=$_GET["tel_proche3"];
$emailProche3=$_GET["emailProche3"];
$residenceProche3=$_GET["residenceProche3"];
$professionProche3=$_GET["professionProche3"];
$groupeSanguin=$_GET["groupeSanguin"];
$allergie=$_GET["allergie"];
$incapacite=$_GET["incapacite"];
$medecinFamille=$_GET["medecinFamille"];
$assurance=$_GET["assurance"];
$rhesus=$_GET["rhesus"];
$observationPhisyque=$_GET["observationPhisyque"];
$signeParticulier=$_GET["signeParticulier"];


$sql="insert into patients(nom, premon, mot_de_passe, telephone, anneeNais, lieuNais, profession, filename, lieuService, dateCreate, telBureau, email, residencePrincipal,
 residenceSecondaire, nomPere, telPere, emailPere, professionPere, quartierPere, ruePere, nomMere, telMere, emailMere, professionMere, quartierMere, rueMere, nomTuteur, 
 telTuteur, emailTuteur, professionTuteur, quartierTuteur, rueTuteur, proche1,tel_proche1, emailProche1, residenceProche1, professionProche1, proche2, tel_proche2, emailProche2,
residenceProche2, professionProche2, proche3, tel_proche3, emailProche3, residenceProche3, professionProche3, groupeSanguin, allergie, incapacite, medecinFamille, assurance, 
rhesus, observationPhisyque, signeParticulier) values('$nom', '$premon', '$mot_de_passe', '$telephone','$anneeNais', '$lieuNais', '$profession', '$filename', '$lieuService', 
'$dateCreate', '$telBureau', '$email', '$residencePrincipal', '$residenceSecondaire', '$nomPere', '$telPere', '$emailPere', '$professionPere', '$quartierPere', '$ruePere', 
'$nomMere', '$telMere', '$emailMere', '$professionMere', '$quartierMere', '$rueMere', '$nomTuteur', '$telTuteur', '$emailTuteur', '$professionTuteur', '$quartierTuteur', 
'$rueTuteur', '$proche1', '$tel_proche1', '$emailProche1', '$residenceProche1', '$professionProche1', '$proche2', '$tel_proche2', '$emailProche2', '$residenceProche2', 
'$professionProche2', '$proche3', '$tel_proche3', '$emailProche3', '$residenceProche3', '$professionProche3', '$groupeSanguin', '$allergie', '$incapacite', '$medecinFamille', 
'$assurance', '$rhesus', '$observationPhisyque', '$signeParticulier')
    ";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
