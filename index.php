<?php
require ("./Components/nav.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>


<div class="banner">
<ul>
    <li><h1>WELCOME TO LTQS HACKING LABS</h1>  </li>
    <li><h1 class="lab-title">SQL injection</h1></li>
    <li><button class="lbtn">See documentation</button></li>


    <div class="bottom-nav">
        <li>other labs</li>
        <li>github</li>
        <li>contacts</li>
    </div>
</ul>
</div>
<style>
*
{
    padding: 0;
    margin: 0;
    box-sizing: border-box;   
}
body
{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
   
    height: 100%;
    width: 100%;
}


.banner
{
    font-weight: bold;
    text-transform: uppercase;
    background: linear-gradient(rgba(0, 0, 0, 0.81),rgba(0, 0, 0, 0.878)),url("./Assets/Images/pexels-cottonbro-8720586.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;

    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    color: white;
    position: relative;
}
.banner ul 
{
    list-style: none;
    text-align: center;
    font-size: 20px;
}
.lbtn
{
    padding: 10px;
    background: none;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
    border: 1px solid  orangered;
    cursor: pointer;



}
.lbtn:active
{
    transform: scale(.9);



}
.bottom-nav
{
    position: absolute;
    bottom: 0;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    right: 2rem;
}
.bottom-nav *
{
    padding: 10px;
    font-size: medium;
}
.lab-title
{
    color: green;
}


.home
{
 background-color: green; 
 border-radius:2px;  
}

</style>    
</body>
</html>