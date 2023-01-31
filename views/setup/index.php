<?php
require ("../../Components/nav.php");
require ("../../database/database-config.php");
$db_name='LTQSLAB';

$conn=new mysqli($server,$user,$pass,$db_name);
if ($conn->connect_error) {
    $response = "Database not set: ".$conn->connect_error;
} else {
    $response = "The lab is already set";
}





if (isset($_POST['submit'])) {
    ResetCreateDatabase();
    header("Refresh:0");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>setup</title>
</head>
<body>
    <div class="body-container">
        <div class="sub-b">
            <div class="left">
               <div class="menu">
                <ul>
                    <div class="title">Manage The Labs</div>
                    
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                     <li><button class="lbtn" name="submit">create/reset database</button></li>
                    </form>




                    <li><button class="lbtn">see logs</button></li>
                </ul>
               </div>
            </div>
            <div class="right">
              <div class="lscreen">
                <span>
                  The hacking lab is a simulated environment designed for practicing and testing various hacking techniques. <br> 
                  The reset button serves as a tool to reinitialize the lab, either by creating a new database or resetting the existing one to its original state. This allows users to start fresh and experiment with different scenarios without affecting previous work. <br>
                </span>
                <span>
                    Clicking the log button will display a record of all actions performed within the hacking lab. This log includes detailed information about each step taken, allowing you to review their progress and analyze their techniques.
                </span>
                <div class="smallscreen">
                    <?php
                    echo $response;

                    ?>

                </div>


              </div>
            </div>
        </div>

    </div>



    <style lang="css">
        body
        {
            background-color: black;
            color: white;
        }
        *
        {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            color: white;
        }
       .left
        {
            grid-column: 1/3;
           
        }
        .right
        {
            grid-column: 3/9;
        }

        .sub-b
        {
            display: grid;
            grid-template-columns: repeat(8,1fr);
            height: 100vh;
            gap: 1rem;
        }
        .left
        {
            border: 1px solid red;
            padding: 10px;
        }
        .menu
        {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            position: relative;
        }
        .menu ul 
        {
            width: 100%;

        }
        .menu ul li
        {
            border: 2px solid green;
            width: 100%;
            margin-bottom: .5rem;
            list-style: none;
        }
        .lbtn:active
        {
            transform: scale(.9);
        }
        .menu ul li .lbtn
        {
            width: 100%;
            padding: 10px;
            background:none;
            border: 1px solid green;
            text-transform: uppercase;
            font-weight: bold;

        }
        .lscreen
        {
            width: 90%;
            height: 90%;
            border: 2px inset green;
            margin: auto;
            margin: .5rem;
        }
        .title
        {
            position: absolute;
            top: 4rem;
            font-size: large;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            width: 100%;
        }
        .lscreen
        {
            font-size: large;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
           
        }
        .smallscreen
        {
            width: 98%;
            height: 20rem;
            background-color: rgba(102, 51, 153, 0.281);
            margin: auto;
        }
        .smallscreen
        {
        font-weight: bold;
        font-size: large;
        color: white;
        
        }
        
    </style>
    
</body>
</html>