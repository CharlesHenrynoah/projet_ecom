<?php 
$connecthost = 'mysql:host=localhost;dbname=Mystore;charset=utf8';
$dbuser='root';
$dbpassword='root';
try{
  $con = new PDO($connecthost,$dbuser,$dbpassword);
  $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo "connected";
}catch(PDOException $e){
   echo "failed to connect".$e->getMessage();
}
?>

