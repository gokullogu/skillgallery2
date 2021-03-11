<?php
$servername="localhost";
$username="root";
$password="";
$dbname= "skillgallerydatabase";
try{
$login_system=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

$login_system->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="CREATE TABLE loginsignup(
    id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
)";
$login_system->exec($sql);
echo "table created successfully";
}
catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
}
$login_system=null;
?>