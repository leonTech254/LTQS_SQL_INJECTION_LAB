<?php
require ("../../Components/nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./index.js"></script>
</head>
<body>
    <div><h1 class="title-lab">SQLINJECTION LAB</h1></div>
    <div class="types-of-sql-injection">   
    <div class="lpcard">Union-based SQL injection</div>
    <div class="lpcard">Error-based SQL injection</div>
    <div class="lpcard">Boolean-based blind SQL injection</div>
    <div class="lpcard">
        Time-based blind SQL injection
    </div>
    </div>
    <section class="section-form-result">
        <div class="form">
            <h1>LOG IN</h1>
            <label for="">Username</label>
            <input type="text" name="" id="username">
            <label for="">password</label>
            <input type="text" name="" id="password">

            <button class="lbtn" id="btn">login</button>
        </div>

        <div class="database-response" id="container">
            <span>
                Database response will display here. <br>
                Try inserting this <span class="code-example">leon' OR '1'='1'#</span> on the username field and type anything for your password
            </span>
<ul>
    <li><span class="label" id="status"></span> <span></span></li>
    <li><span class="label" id="query"></span> <span></span></li>
    <li><span class="label" id="data"></span> <span></span></li>
</ul>


        </div>
    </section>

 <style>
    *
    {
        padding: 0;
        margin: 0;

    }
   
    body
    {
        background-color: black;
        color: white;
    }
    .types-of-sql-injection
    {
        display: grid;
        grid-template-columns: repeat(2,1fr);
        grid-template-rows: repeat(2,1fr);
        gap: 1rem;

    }
.lpcard
{
    width: 90%;
    padding: 15px;
    background-color: black;
    color: whitesmoke;
    box-shadow: 0px 0px 1px white;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
  

}
.form 
{
    display: flex;
    flex-direction: column;
    padding:10px;
     box-shadow: 0px 0px 1px white;
     gap: .5rem;
     grid-column: 1/2;



}
.form h1
{
    text-align: center;
    width: 100%;
}
.form input
{
    background: none;
    border: 1px solid white;
    height: 2rem;
    border-radius: 5px;
    color: white;
font-weight: bold;
}
.section-form-result
{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    grid-template-rows: repeat(2,1fr);
    gap: 1rem;
    margin-top: 1.5rem;
    padding: 10px;
}
.lbtn
{
    width: 100%;
    padding: 10px;
    background: none;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    font-size: large;

}
.title-lab
{
    text-align: center;
    padding: 10px;
    color: green;

}
.labs
{
 background-color: green; 
 border-radius:2px;  
}
.database-response
{
    font-weight: bold;
    text-align: center;
     display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: red;
    grid-column: 2/5;
    width: 95%;
    overflow-x: auto;

    

}
.database-response ul
{
    list-style: none;
   

}
.code-example
{
    color: green;
    font-weight: bold;
    background-color: yellow;
}
 </style>   
    
</body>
</html>