<?php
/**
 * Created by PhpStorm.
 * User: Kamguia
 * Date: 18/10/2018
 * Time: 07:28
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


		include"config.php";

    $id=$_GET["id"];


    $sql="delete  from regime   where id='$id'  ";
    $res=mysqli_query($conn,$sql);
    if($res){
      echo true;
    }else{
      echo false;
    }

?>
