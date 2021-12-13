<?php
if( ! isset($_POST['name']) ){
  sendError(400, 'missing firsname', __LINE__);
}

if( ! isset($_POST['email']) ){
  sendError(400, 'missing email', __LINE__);
}

if( ! isset($_POST['password']) ){
  sendError(400, 'missing password', __LINE__);
}
if( strlen($_POST['name']) < 2 ){
  sendError(400, 'firstname must be at least 2 characters', __LINE__);
}
if( strlen($_POST['name']) > 20 ){
  sendError(400, 'firstname cannot be longer than 20 characters', __LINE__);
}

if( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ){
  sendError(400, 'email is not valid', __LINE__);
}

if( strlen($_POST['password']) < 6 ){
  sendError(400, 'password must be at least 6 characters', __LINE__);
}
if( strlen($_POST['password']) > 50 ){
  sendError(400, 'password cannot be longer than 50 characters', __LINE__);
}



require_once( __DIR__.'/../private/db.php');

try{
  $query = $db->prepare('INSERT INTO users
  VALUES(:id, :name, :email, :password)');
  $query->bindValue(':id', null);
  $query->bindValue(':name', $_POST['name']);
  $query->bindValue(':email', $_POST['email']);
  $query->bindValue(':password',  password_hash($_POST['password'], PASSWORD_DEFAULT));
  
  
  $query->execute();
  session_start();

  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $_POST['email'];
  // http_response_code(200); // 201 created
  header('Content-Type: application/json');
  echo '{"id":'.$db->lastInsertId().'}';
  
  header('Content-Type: application/json');
  echo '{"id":'.$db->lastInsertId().'}';


}catch(Exception $ex){
  echo $ex;
}




