<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");



include"config.php";

$id=$_GET["id"];
$intitule=$_GET["intitule"];
$poids=$_GET["poids"];
$temperature=$_GET["temperature"];
$taille=$_GET["taille"];
$tension=$_GET["tension"];
$sexe=$_GET["sexe"];
$anneeNais=$_GET["anneeNais"];
$groupe_sanguin=$_GET["groupe_sanguin"];
$rexus=$_GET["rexus"];


$sql="update  patients set
          intitule='$intitule',
          poids='$poids',
          temperature='$temperature',
          taille='$taille',
          tension='$tension',
          sexe='$sexe',
          anneeNais='$anneeNais',
          groupe_sanguin='$groupe_sanguin',
          rexus='$rexus'
          where id='$id'
    ";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
