
<html>
    <head>
        <!-- <link href="style.css" rel="stylesheet" media="all" type="text/css"> -->
        <meta charset="utf-8">
        <link rel="icon" type="image/ico" href="img/joystick.ico">

        <title>Game Shop</title>
        
        <style>
            table, th, td {
                
    border: 1px solid black;
    border-collapse: collapse;
}
            nav {
                padding: 0px;
                height: 60px;
                border-bottom:  #070617 solid 10px;
                font-family: 'Courier New', Courier, monospace;
                background-color: #ffffe6;
                margin: -8px;
            }

            nav ul {
                float: right;
            }

            nav ul li {
                display: inline-block;
                float: left;
            }

            nav ul li:not(:first-child) {
                margin-left: 48px;
            }

            nav ul li:last-child {
                margin-right: 24px;
            }

            nav ul li a {
                display: inline-block;
                outline: none;
                color: #000;
                text-transform: uppercase;
                text-decoration: none;
                font-size: 14px;
                letter-spacing: 1px;
                font-weight: 600;
                opacity: 0.5;
                transition: 0.3s;

            }

            nav ul li a:hover {

                border-bottom:#3D4849 solid 8px;
                opacity: 1;

                }

            .logo {
                float: left;
                padding: 8px;
                margin-top: 8px;
            }

            .logo a {
                color: #000;
                text-transform: uppercase;
                font-weight: 700;
                font-size: 18px;
                letter-spacing: 2px;
                text-decoration: none;
            }

            .active {
                opacity: 1;
            }

            .bodyalign {
                text-align: center;
                margin-top: 5%;
            }

            body{
                background-color: #e6ffff;
            }

        </style>
    </head>

<body>
<nav>
            <div class="container">
                <a href="gamelist.php">
                    <img src="img/joystick.png" alt="Game Shop" style="float: left; width: 32px; margin-left: 19px; margin-top: 10.5px">
                </a>

                <div class="logo">
                    <a href="gamelist.php">Game Shop</a>
                </div>

                <div class="topnav">
                    <ul>
                        <li><a href="gamelist.php">Game List</a></li>
                        <li><a class="active" href="addnewgame.php">Add</a></li>
                        <li><a href="modify.php">Modify</a></li>
                        <li><a href="delete.php">Delete</a></li>
                        <li><a href="others.php">Others</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- <div class="title">
           <h1> INSERT NEW GAME </h1>
        </div>  -->
<div align="center">
<?php
//Open connection
$con= mysqli_connect("localhost","root","","gameshop") or die ("could not connect to mysql"); 
 
//Escape user inputs for security
$game_id = mysqli_real_escape_string($con, $_REQUEST['game_id']);
$gameName = mysqli_real_escape_string($con, $_REQUEST['gameName']);
$releaseGame = mysqli_real_escape_string($con, $_REQUEST['releaseGame']);
$gameType = mysqli_real_escape_string($con, $_REQUEST['gameType']);
$numPlayer = mysqli_real_escape_string($con, $_REQUEST['numPlayer']);
$game_price = mysqli_real_escape_string($con, $_REQUEST['game_price']);
$dev_id = mysqli_real_escape_string($con, $_REQUEST['dev_id']);
//Attempt insert query execution
$sql = "INSERT INTO game (game_id,gameName,releaseGame,gameType,numPlayer,game_price,dev_id) VALUES ('$game_id', '$gameName', '$releaseGame','$gameType','$numPlayer','$game_price','$dev_id')";

//Execute query
if(mysqli_query($con, $sql))
{
    echo "<br>";
    echo "<br>";
    echo "Records added successfully. ";
    echo "<br>";
    echo "<br>";
    echo "Click <a href='gamelist.php'>here</a> to show game list. ";
    echo "<br>";
    echo "<br>";
    echo "Click <a href='addnewgame.php'>here</a> to add new game. ";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>
</div>
</body>
</html>