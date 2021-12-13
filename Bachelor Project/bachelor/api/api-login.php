<?php 
require_once( __DIR__.'/../private/db.php');


try{
$q = $db->prepare('SELECT * FROM users WHERE email = :email LIMIT 1');
$q->bindValue(':email', $_POST['email']);
$q->execute();
$row= $q->fetch();


 if( password_verify($_POST['password'], $row->password)){
    session_start();
    $_SESSION['userId'] = $row->id;
    $_SESSION['name'] = $row->name;
    echo '';
    exit();
 }
 http_response_code(401);
 echo 'no match';
}catch(Exception $ex){
    echo $ex;
    sendError(500, 'system under maintanance', __LINE__);
}





// #########################

function sendError($iResponseCode, $sMessage, $iLine){
    http_response_code($iResponseCode);
    header('Content-Type: application/json');
    echo '{"message":"'.$sMessage.'", "error":'.$iLine.'}';
    exit();
}