<?php
$servername="localhost";
$username="root";
$password="";

try{
$login_system=new PDO("mysql:host=$servername",$username,$password);

$login_system->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="CREATE DATABASE skillgallerydatabase";
$login_system->exec($sql);
echo "database created successfully";
}
catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
}
$login_system=null;
?>