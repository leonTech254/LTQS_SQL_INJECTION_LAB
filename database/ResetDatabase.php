<?php
require("./database-config.php");
$database="LTQSLAB";
try {
// reseting the database;
$sql="DROP DATABASE $database";
mysqli_query($conn,$sql);

} catch (\Throwable $th) {
    throw $th;
}
$sql="CREATE DATABASE IF NOT EXISTS $database";
mysqli_query($conn,$sql);
$db_conn=mysqli_connect($server,$user,$pass,$database);
// print($_SERVER['DOCUMENT_ROOT']."LTQS_SQLINJECTION/");
// creatinting of tables
$varchar="VARCHAR(20) NOT NULL";
$int="INT(100) NOT NULL";
$varchar_default="/image/users/user.jpg";
 $sql_table="CREATE TABLE IF NOT EXISTS Users( id INT AUTO_INCREMENT PRIMARY KEY, firstname $varchar, lastname $varchar,password $varchar, image VARCHAR(100) DEFAULT '/image')";
mysqli_query($db_conn,$sql_table);
// print(mysqli_error($db_conn));

// adding users in the data
$firstnames=["martin",'jane',"john",'Daisy','Bob','cidney','carol','valentine','daniel','kelvin'];
$lastnames=['leon','doe','doe','linker','maker','snipper','mika','valentine','daniela','ketter'];
$i=-1;

foreach($firstnames as $name)
{
    $i++;
   $password=rand(10000,90000);
   $sql="INSERT INTO Users(firstname,lastname,password) VALUES('$name','$lastnames[$i]','$password')";
   mysqli_query($db_conn,$sql);
   
    
}

?>