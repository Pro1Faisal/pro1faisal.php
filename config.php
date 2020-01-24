<?php
 
function database_connect(){
  return new PDO("mysql:host=localhost;dbname=site1",'root','root');
}
 
function login($user,$pass){
  $pdo = database_connect();
  $pdo = $pdo->prepare("SELECT user,password FROM accounts WHERE user='$user' AND password='$pass'");
  $pdo->execute();
  $data = $pdo->fetchAll();
  if(count($data) != 0){
    $user = $data[0]['user'];
    echo "<p style=\"color:green;\">$user أهلا ً</p>";
  }
  else{
    echo "<p style=\"color:red;\">Wrong password or usernamr </p>";
  }
}
?>
CREATE database site1;
use site1;
CREATE TABLE `accounts`(`user` TEXT, `password` TEXT);
INSERT INTO `accounts`(`user`,`password`) VALUES ('omar','coolpassword');
