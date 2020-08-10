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

            body{
                background-color: #e6ffff;
            }

            .title{
                color: black;
                text-align: center;
                font-family: sans-serif;
            }

            input.button {
                    width: 300px;
                    padding: 20px;
                    margin: 20px;
                    cursor: pointer;
                    font-weight: bold;
                    font-size: 150%;
                    background: #3399ff;
                    color: #fff;
                    border: 1px solid #3399ff;
                    border-radius: 10px;
            }

            input.button:hover {
                    color: #e6e6e6;
                    background: #0066cc;
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

<div align="center">
    <div class="title">
       <h1> OTHERS </h1>
    </div> 

    <form>
        <input class="button" type="button" value="View Developer Table" onclick="window.location.href='developer.php'" />
        <input class="button" type="button" value="View Customer Table" onclick="window.location.href='customer.php'" /></br>
        <input class="button" type="button" value="View Rating Table" onclick="window.location.href='rating.php'" />
    </form>

</div>
</body>
</html>