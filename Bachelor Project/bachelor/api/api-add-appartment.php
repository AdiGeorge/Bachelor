<?php
if( ! isset($_POST['title']) ){
  sendError(400, 'missing firsname', __LINE__);
}

if( ! isset($_POST['price']) ){
  sendError(400, 'missing email', __LINE__);
}

if( ! isset($_POST['description']) ){
  sendError(400, 'missing password', __LINE__);
}
if( ! isset($_POST['location']) ){
  sendError(400, 'missing password', __LINE__);
}
if( ! isset($_POST['size']) ){
  sendError(400, 'missing password', __LINE__);
}
if( ! isset($_POST['image']) ){
  sendError(400, 'missing password', __LINE__);
}



require_once( __DIR__.'/../private/db.php' );

try{
  $query = $db->prepare('INSERT INTO appartments
  VALUES(:id, :title, :price, :description, :location, :size, :image)');
  $query->bindValue(':id', null);
  $query->bindValue(':title', $_POST['title']);
  $query->bindValue(':price', $_POST['price']);
  $query->bindValue(':description', $_POST['description']);
  $query->bindValue(':location', $_POST['location']);
  $query->bindValue(':size', $_POST['size']);
  $query->bindValue(':image', $_POST['image']);
  
  
  $query->execute();
  
  header('Content-Type: application/json');
  echo '{"id":'.$db->lastInsertId().'}';


}catch(Exception $ex){
  echo $ex;
}

function sendError($iErrorCode, $sMessage, $iLine){
    http_response_code($iErrorCode);
    header('Content-Type: application/json');
    echo '{"message":"'.$sMessage.'", "error":"'.$iLine.'"}';
    exit();
  }
