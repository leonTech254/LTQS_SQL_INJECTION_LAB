<!-- credentions -->
$user='root';
$pass='';
$server="localhost";
<?php
try {
$conn=new mysqli($server,$user,$pass);

} catch (\Throwable $th) {
    //throw $th;
    if(!$conn)
{
    die("CONNECTION FAILED CHECK CREDENTIALS".mysqli_connect_error());
}
}
?>