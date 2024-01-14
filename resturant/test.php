<?php
session_start();

$_SESSION['user']='mohammed';	
$set=session_id();
echo $set;

echo "<pre>";
print_r($_SESSION);
echo "<pre>"

?>