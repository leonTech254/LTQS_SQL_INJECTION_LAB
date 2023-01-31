<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
<?php
// echo $_SERVER['HTTP_HOST'];
$root_path=$_SERVER['HTTP_HOST']."/HACKLAB/LTQS_SQLINJECTION/";
?>
<ul>
    <li><a href="http://<?php echo $root_path ?>" class="home">HOME</a> </li>
    <li><a href="http://<?php echo $root_path."views/setup/" ?>" class="setup">Setup</a></li>
    <li><a href="http://<?php echo $root_path."views/forms/" ?>" class="labs">Labs</a></li>
    <li><a href="http://<?php echo $root_path."views/contrib/" ?>" class="contrib">Contribute</a></li>
</ul>




</nav>
<div class="margin-default">


</div>
<style lang="css">
*
{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    color: white;
}
nav
{
    height: 5rem;
    width: 100%;
    background-color: black;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;

    position: fixed;
    top: 0;
    z-index: 1000;
}
nav ul
{
    width: 50%;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    list-style: none;
    text-transform: uppercase;
    font-weight: bold;
}
nav ul a
{
    text-decoration: none;
    padding: 10px;
}
.margin-default
{
    margin-top: 5rem;
}

</style>
</body>
</html>