<?php 
session_start();

?>
<html>
    <head>
        <title><?php echo $_SESSION['uname']; ?></title>
        <link rel="stylesheet" type="text/css" href="/MY SITE/CSS/main.css">
        <link rel="stylesheet" type="text/css" href="/MY SITE/CSS/main2.css">
        <style>
            * {
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
    overflow-x: hidden;
}
header {
    overflow-y: hidden;
}
.head {
	background-color:#BE59C0;
	height:60px;
	width:100%;
}
.head img {
    float: left;
    height: 90px;
    width: 100px;
    margin-top: -15px;
    margin-left: 100px;    
}
.search{
    margin-left: 250px;
    margin-top: -45px;
}
.search1 {
    height: 25px;
    width: 30%;
    padding-left: 10px;
    border: none;
    border-radius: 5px;
    color: #BE59C0;
    font-weight: bold;
}
.submit {
     height: 25px;
    width: 5%;
    border: none;
    border-radius: 5px;
    color: #BE59C0;
    font-weight: bold;
    cursor: pointer;    
}
.about {
    margin-left: 50%;
    margin-top: -35px;
}
.about ul {
    display: block;
    height: 50px;
    width: 640px;
}
.about ul li {
    display: block;
    float: right;
    height: 45px;
    width: 120px;
    text-align: center;
    line-height: 45px;
    overflow-y: hidden;
    font-family: sans-serif;
    font-weight: 500; 
}
.about ul li:hover {
    text-decoration: underline;
    cursor: pointer;
    transition: 0.1s ease-in-out;
    font-weight: 600;
}
.about ul li a {
    text-decoration: none;
    color:White;
}
.rest {
    height: 100%;
    width: 100%;
    border: 2px dashed #A800AB;
    overflow-y: hidden;
}
.left {
    float: left;
    height: 650px;
    width: 290px;
    border-right: 2px dashed #BE59C0;
    font-size: 22px;
}
.going {
    background-color:purple;
    border: none;
    border-radius: 15px;
}
            .left a {
                text-decoration: none;
                color: #BE59C0;
                font-family: sans-serif;
                font-weight: 500;
            } 
        </style>
    </head>
    <body>
        <header>
	       <div class = "head">
	       <div class = "img">
	         <img src = "/MY SITE/Images/logo.png">
	       </div>
            </div>
            <div class="search">
                <input type="search" placeholder="Search Users" class="search1">
                <input type="submit" class="submit">
            </div>
            <div class="about">
                <ul>
                    <li><a href = "/MY SITE/main.html">Logout !!!</a></li>
                    <li><a href = "">More About Us</a></li>
                    <li><a href = "">Settings</a></li>
                    <li><a href = ""><?php echo $_SESSION['uname']; ?></a></li>
                    <li  class="going"><a href = "/MY SITE/php/Home.php" >Home</a></li>
                </ul>
            </div>
        </header>
        <div class="rest">
            <div class="left"><br>
                <a href = ""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "/MY SITE/Images/images.png" height="25px" width = "25px">&nbsp; <?php echo $_SESSION['uname']; ?></a><hr><br>
                <a href = ""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "/MY SITE/Images/news.png" height="25px" width = "25px">&nbsp; News Feed!</a><br><hr>
                <a href = ""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "/MY SITE/Images/weather.png" height="25px" width = "25px">&nbsp; Weather and Time</a><br><hr>
                <a href = ""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "/MY SITE/Images/Fun.png" height="25px" width = "25px">&nbsp; Fun Activities</a><hr>
                <a href = "">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "/MY SITE/Images/politics.png" height="25px" width = "25px">&nbsp; Politics</a><br><hr>
                <a href = ""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "/MY SITE/Images/stream.png" height="25px" width = "25px">&nbsp; Watch</a><br><hr>
                <a href = ""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "/MY SITE/Images/game.png" height="25px" width = "25px">&nbsp; Explore Games</a><hr>
                <a href = ""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "/MY SITE/Images/market.jfif" height="25px" width = "25px">&nbsp;Market place</a> <hr>
                <a href = ""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "/MY SITE/Images/develop.jpg" height="25px" width = "25px">&nbsp; Create</a><hr><br>
            </div>
            <div class="right"></div>
        </div>
    </body>
</html>

