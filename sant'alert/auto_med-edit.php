<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");



include"config.php";

$id=$_GET["id"];
$datecreate=$_GET["datecreate"];
$symtome=$_GET["symtome"];
$traitement=$_GET["traitement"];
$evaluation=$_GET["evaluation"];
$observation=$_GET["observation"];
$cout_traitement=$_GET["cout_traitement"];


$sql="update  auto_med set
          datecreate='$datecreate',
          symtome='$symtome',
          traitement='$traitement',
          evaluation='$evaluation',
          observation='$observation',
          cout_traitement='$cout_traitement'
          where id='$id'
    ";
$res=mysqli_query($conn,$sql);
if($res){
    echo true;
}else{
    echo false;
}

?>
