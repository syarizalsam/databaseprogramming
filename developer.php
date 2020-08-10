<html>
    <head>
        <link href="style.css" rel="stylesheet" media="all" type="text/css">
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

            body {
                background-color: #e6ffff;
            }

            .backButton {
                padding: 5px;
                margin: 15px;
                cursor: pointer;
                font-weight: bold;
                font-size: 120%;
                background: #3399ff;
                color: #fff;
                border: 1px solid #3399ff;
                border-radius: 10px;
            }

            .backButton:hover {
                color: #e6e6e6;
                background: #0066cc;
            }

            .title {
                margin-top: -65px;
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
                        <li><a href="addnewgame.php">Add</a></li>
                        <li><a href="modify.php">Modify</a></li>
                        <li><a href="delete.php">Delete</a></li>
                        <li><a class="active" href="others.php">Others</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <form>
        <input type="button" class="backButton" value="< Go Back" onclick="history.back()">
    </form>

<div align="center">
    <div class="title">
       <h1> DEVELOPER TABLE </h1>
    </div>
        </br>
        </br>

<?php
$con = mysqli_connect("localhost","root","","gameshop") or die ("could not connect to mysql");


$sql = "SELECT * FROM developer";
$result = $con->query($sql);


if ($result->num_rows > 0) {
    echo "<table><tr><th> dev_id</th><th>dev_name</th><th>founded</th><th>origin</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" .$row['dev_id']. "</td>";
        echo "<td>" .$row['dev_name']. "</td>";
        echo "<td>" .$row['founded']. "</td>";
        echo "<td>" .$row['origin']. "</td>"; 
    }
    echo "</table>";
}

else {
    echo "0 results";
}

$con->close();

?>
</div>
</body>
</html>