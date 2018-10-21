<?php
/**
 * Created by PhpStorm.
 * User: Kamguia
 * Date: 16/10/2018
 * Time: 21:48
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


		include"config.php";

    $id=$_GET["id"];


    $sql="delete  from bilan   where id='$id'  ";
    $res=mysqli_query($conn,$sql);
    if($res){
      echo true;
    }else{
      echo false;
    }

?>
