<?php 
$db_user="root";
$db_password="";
$dbname="restaurant";
$hostname="localhost";

$dsn="mysql:host=$hostname; dbname=$dbname";


$option =array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8",
);




try{
   $conn = new PDO($dsn , $db_user ,$db_password ,$option);
   
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
