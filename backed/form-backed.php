<?php

require ("../database/database-config.php");


$counter=0;
function logs($attempt,$issuccessful)
{
    global $counter;
    

    if ($counter==0)
    {
   $counter+=1;
   global $database;
   global $user;
   global $pass;
   global $server;
   $filter_sting=addslashes($attempt);
   echo $filter_sting;
  
    $conn_db=new mysqli($server,$user,$pass,$database);
    $date=date('Y/m/d').date("h:i:sa");
    $sql="INSERT INTO Logs(sqlattemps,IsSucess,dateAttempted) VALUES('$filter_sting','$issuccessful','$date')";
    mysqli_query($conn_db,$sql);
    echo $date;
    }

  

 
    
    
}





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
logs($username,"success");
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
    logs($username,"failed");
}








?>