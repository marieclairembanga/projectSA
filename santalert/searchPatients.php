
<?php


header('Access-Control-Allow-Origin: *');
if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        
            {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }

 try {
      $strConnection= 'mysql:host=localhost; dbname = sant-alert';
      $pdo = new PDO ($strConnection, 'root', '');
  }
  catch (PDOException $e) {
      $msg = 'ERREUR PDO dans ' . $e ->getMessage();
      die ($msg);
  }
$ps=$pdo->prepare("SELECT * FROM patients where nom like '%".$_GET["name"]."%' ");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
 // header("Access-Control-Allow-Origin : *");
 // header("Content-Type:application/json; charset=utf-8");
 // echo (json_encode($liste));

  // pour resoudre le problème des accents pour json-encode
  $data=array();
  foreach ($liste as $i=>$v){
      $fields=array();
      foreach ($v as $key=>$value){
          $fields[$key] = utf8_encode($value);
      }
      $data[$i]=$fields;
}
header("Access-Control-Allow-Origin: *");
header("Content-Type:application/json; charset=utf-8");
echo (json_encode($data));


?>