<?php
require ("../database/database-config.php");
$username = $_POST['username'];
$password = $_POST['password'];
$conn=new mysqli($server,$user,$pass,$database);

$resultData = array('data1' => 'value1', 'data2' => 'value2');
$responseContainer=[];
$sql="SELECT * FROM Users WHERE username = '$username' AND password = '$password'";

$result=mysqli_query($conn,$sql);
print(mysqli_info($conn));
if($result)
{
while($row=mysqli_fetch_assoc($result))
{
$responseContainer["query"]="Sucessfull";
$responseContainer["Your_sql_query"]=$sql;
$responseContainer['UserData']=$row;
echo json_encode($responseContainer);
}


}else
{
   $responseContainer['query_status']='Failed to execute';
   $responseContainer['Your_sql_query']=$sql;
    echo json_encode($responseContainer);
    $responseContainer['UserData']='no data';
}








?>