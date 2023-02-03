<!-- credentions -->
<?php
$user='root';
$pass='';
$server="localhost";
$database="LTQSLAB";
try {
$conn=new mysqli($server,$user,$pass);

} catch (\Throwable $th) {
    //throw $th;
    if(!$conn)
{
    die("CONNECTION FAILED CHECK CREDENTIALS".mysqli_connect_error());
}
}

$database="LTQSLAB";
function ResetCreateDatabase()
{
global $conn,$server,$user,$pass;
// pasing the connection again
$conn=new mysqli($server,$user,$pass);
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
echo mysqli_error($conn);
$db_conn=mysqli_connect($server,$user,$pass,$database);
// print($_SERVER['DOCUMENT_ROOT']."LTQS_SQLINJECTION/");
// creatinting of tables
$varchar="VARCHAR(20) NOT NULL";
$int="INT(100) NOT NULL";
$varchar_default="/image/users/user.jpg";
 $sql_table="CREATE TABLE IF NOT EXISTS Users( id INT AUTO_INCREMENT PRIMARY KEY, username $varchar,firstname $varchar, lastname $varchar,password $varchar, image VARCHAR(100) DEFAULT '/image')";
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
   $sql="INSERT INTO Users(username,firstname,lastname,password) VALUES('$name','$name','$lastnames[$i]','$password')";
   mysqli_query($db_conn,$sql);
   
    
}
 $sql_table="CREATE TABLE IF NOT EXISTS Logs(id INT AUTO_INCREMENT PRIMARY KEY,sqlattemps $varchar,SuccessfulAtempts $varchar, FailedAttempts $varchar, dateAttempted $varchar)";
 mysqli_query($db_conn,$sql_table);
    
}







?>