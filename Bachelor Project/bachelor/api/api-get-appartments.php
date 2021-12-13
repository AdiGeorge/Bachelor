<?php


require_once(__DIR__.'/../private/db.php');
try{  
  $q = $db->prepare('SELECT * FROM appartments');
  $q->execute();
  $aRows = $q->fetchAll();
  // echo $aRows[0]['name']; // PDO::FETCH_ASSOC 
  // echo $aRows[0]->name; // PDO::FETCH_OBJ 
  header('Content-Type: application/json');
  echo json_encode($aRows);
  exit();  
}catch(PDOException $ex){
  sendError(500, 'system under maintainance', __LINE__);
}

// ############################################################
// ############################################################
// ############################################################
function sendError($iErrorCode, $sMessage, $iLine){
  http_response_code($iErrorCode);
  header('Content-Type: application/json');
  echo '{"message":"'.$sMessage.'", "error":"'.$iLine.'"}';
  exit();
}