<html>
    <head>
        <!-- <link href="style.css" rel="stylesheet" media="all" type="text/css"> -->
        <meta charset="utf-8">
        <link rel="icon" type="image/ico" href="img/joystick.ico">

        <title>Game Shop</title>
        
        <style>
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

            body{
                background-color: #e6ffff;
            }

            .button{
                cursor: pointer;
            }

            .button:hover {
                background: #b3b3b3;
            }

            .title{
                color: black;
                text-align: center;
                font-family: sans-serif;
            }

            input{
                width: 40%;
                height: 5%;
                border: 1px;
                border-radius: 5px;
                padding: 8px 15px 8px 15px;
                margin: 10px 0px 15px 0px;
                box-shadow: 1px 1px 2px 1px grey;
            }

            input[type=submit]{
                width: 19.1%;
                height: 5%;
                border: 1px;
                border-radius: 5px;
                padding: 8px 15px 8px 15px;
                margin: 10px 0px 15px 0px;
                box-shadow: 1px 1px 2px 1px grey;
            }

            input[type=reset]{
                width: 19.1%;
                height: 5%;
                border: 1px;
                border-radius: 5px;
                padding: 8px 15px 8px 15px;
                margin: 10px 0px 15px 0px;
                box-shadow: 1px 1px 2px 1px grey;
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
<div align="center">
       <div class="title">
           <h1> ADD NEW GAME </h1>
        </div> 
    <div class="content">
    <form method="post" action="insert.php" >
        <input type="text" name="game_id" class="form-control" placeholder="Enter game ID" required><br/>
        <input type="text" name="gameName" class="form-control" placeholder="Enter game name" required><br/>
        <input type="text" name="releaseGame" class="form-control" placeholder="Enter release date" required><br/>
        <input type="text" name="gameType" class="form-control" placeholder="Enter game type" required><br/>
        <input type="text" name="numPlayer" class="form-control" placeholder="Enter number of player" required><br/>
        <input type="text" name="game_price" class="form-control" placeholder="Enter game price" required><br/>
        <input type="text" name="dev_id" class="form-control" placeholder="Enter developer ID" required><br/>     
    </div>
        <div>
        <input type="submit" class="button" value="Add data">
        &nbsp; &nbsp; &nbsp;
            
        <input type="reset" class="button" value="Reset"><br/>
        </div>
    </form>
</div>
</body>
</html>