<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="./css/stylesheet_1.css"
          rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/icon.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="./css/animation.css"
          rel="stylesheet" type="text/css"/>



    <style>
        /* customizable snowflake styling */
        .snowflake {
            color: #fff;
            font-size: 1em;
            font-family: Arial, sans-serif;
            text-shadow: 0 0 5px #000;
        }

        @-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}
        @-webkit-keyframes snowflakes-shake{0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}}
        @keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}
        @keyframes snowflakes-shake{0%,100%{transform:translateX(0)}50%{transform:translateX(80px)}}
        .snowflake{
            position:fixed;
            top:-10%;
            z-index:9999;
            -webkit-user-select:none;
            -moz-user-select:none;
            -ms-user-select:none;
            user-select:none;
            cursor:default;
            -webkit-animation-name:snowflakes-fall,snowflakes-shake;
            -webkit-animation-duration:10s,3s;
            -webkit-animation-timing-function:linear,ease-in-out;
            -webkit-animation-iteration-count:infinite,infinite;
            -webkit-animation-play-state:running,running;
            animation-name:snowflakes-fall,snowflakes-shake;
            animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;
            animation-iteration-count:infinite,infinite;
            animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}
        .snowflake:nth-of-type(1){
            left:10%;
            -webkit-animation-delay:1s,1s;
            animation-delay:1s,1s}
        .snowflake:nth-of-type(2){
            left:20%;-webkit-animation-delay:6s,.5s;
            animation-delay:6s,.5s}
        .snowflake:nth-of-type(3){
            left:30%;-webkit-animation-delay:4s,2s;
            animation-delay:4s,2s}
        .snowflake:nth-of-type(4){
            left:40%;-webkit-animation-delay:2s,2s;
            animation-delay:2s,2s}
        .snowflake:nth-of-type(5){
            left:50%;-webkit-animation-delay:8s,3s;
            animation-delay:8s,3s}
        .snowflake:nth-of-type(6){
            left:60%;-webkit-animation-delay:6s,2s;
            animation-delay:6s,2s}
        .snowflake:nth-of-type(7){left:70%;
            -webkit-animation-delay:2.5s,1s;
            animation-delay:2.5s,1s}
        .snowflake:nth-of-type(8){
            left:80%;-webkit-animation-delay:1s,0s;
            animation-delay:1s,0s}
        .snowflake:nth-of-type(9){
            left:90%;-webkit-animation-delay:3s,1.5s;
            animation-delay:3s,1.5s}
        .snowflake:nth-of-type(10){
            left:25%;-webkit-animation-delay:2s,0s;
            animation-delay:2s,0s}
        .snowflake:nth-of-type(11){
            left:65%;-webkit-animation-delay:4s,2.5s;
            animation-delay:4s,2.5s}
        .snowflake:nth-of-type(12){
            left:65%;-webkit-animation-delay:3s,2s;
            animation-delay:5s,2s}
        .snowflake:nth-of-type(13){
            left:65%;-webkit-animation-delay:3s,2s;
            animation-delay:5s,2s}
        .snowflake:nth-of-type(14){
            left:65%;-webkit-animation-delay:3s,2s;
            animation-delay:5s,2s}
        .snowflake:nth-of-type(15){
            left:65%;-webkit-animation-delay:3s,2s;
            animation-delay:5s,2s}
        .snowflake:nth-of-type(16){
            left:65%;-webkit-animation-delay:3s,2s;
            animation-delay:5s,2s}
        .snowflake:nth-of-type(17){
            left:65%;-webkit-animation-delay:3s,2s;
            animation-delay:5s,2s}
        .snowflake:nth-of-type(18){
            left:80%;-webkit-animation-delay:1s,0s;
            animation-delay:1s,0s}
        .snowflake:nth-of-type(19){
            left:90%;-webkit-animation-delay:3s,1.5s;
            animation-delay:3s,1.5s}
        .snowflake:nth-of-type(20){
            left:25%;-webkit-animation-delay:2s,0s;
            animation-delay:2s,0s}
    </style>


</head>
<body>

<div class="snowflakes" aria-hidden="true">
    <div class="snowflake"></div>
    <div class="snowflake">❆</div>
    <div class="snowflake">❅</div>
    <div class="snowflake">❆</div>
    <div class="snowflake">❅</div>
    <div class="snowflake">❆</div>
    <div class="snowflake">❅</div>
    <div class="snowflake">❆</div>
    <div class="snowflake">❅</div>
    <div class="snowflake">❆</div>
    <div class="snowflake">❅</div>
    <div class="snowflake">❆</div>
    <div class="snowflake">❅</div>
    <div class="snowflake">❆</div>
    <div class="snowflake">❅</div>
    <div class="snowflake">❆</div>
    <div class="snowflake">❅</div>
    <div class="snowflake">❆</div>
    <div class="snowflake">❅</div>
    <div class="snowflake">❆</div>
    <div class="snowflake">❅</div>
    <div class="snowflake">❆</div>
    <div class="snowflake">❅</div>
    <div class="snowflake">❆</div>


</div>


<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="home_page.php" class="w3-bar-item w3-button"><img style="margin-left:-17px; height:50px;" src="./img/logo.jpg" alt="logo"><b>STA</b> Snow Station</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
            <a href="home_page.php" class="w3-bar-item w3-button" >Home</a>
            <a href="pdo.php" class="w3-bar-item w3-button">Registration</a>
            <a href="animation_snow.php" class="w3-bar-item w3-button">Animations</a>
        </div>
    </div>
</div>
<header class="w3-display-container w3-content w3-wide" style="max-width:2000px; line-height: 100px" id="home">
    <img class="w3-image" src="./img/winner_2.jpg" alt="Winner" width="100%">
    <div class="w3-display-middle w3-margin-top w3-center">
        <h1 class="w3-xlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>STA</b></span> <span class="w3-hide-small w3-text-light-grey">Snow Station</span></h1>
    </div>
</header>

<div class="wrapper" >
    <div id="menubar">
        <div id="menu_list">
            <a href="home_page.php" class="w3-bar-item w3-button menuitem menuitem_1" >Home</a><br>
            <a href="pdo.php" class="w3-bar-item w3-button menuitem menuitem_1" >Registration</a><br>
            <a href="animation_snow.php" class="w3-bar-item w3-button menuitem menuitem_1" >Animations</a>
        </div>
    </div>


    <!-- Page Content -->
    <div id="main1">
        <h1 style="text-align: center">This is the Animation Page</h1>
        <img src="./img/house.jpg" alt="House" width="1500" height="900" style="position: relative"/><br>


    </div>
</div>







<footer class="w3-container w3-padding-32 w3-light-blue">
    <div class="w3-row-padding">
        <div class="w3-third">
            <h3>Contact Information</h3>
            <p>Contact me if you have any questions.</p>
            <p> <i class="material-icons">email</i>  ntnhmc@umsystem.edu </p>
            <p> <i class="material-icons">phone</i>  314-256-1754 </p>
            <p> <i class="material-icons">account_balance</i> 1 University Saint Louis, MO, 63125 </p>
        </div>

        <div class="w3-third">
            <h3>MEDIA POSTS</h3>
            <ul class="w3-ul">
                <li class="w3-padding-16 w3-hover-white">
                    <img src="./img/fb.jpg" class="w3-left w3-margin-right" style="width:50px" alt="facebook">
                    <span class="w3-large">SnowStation</span><br>
                    <a href="https://www.facebook.com/" target="_blank" title="Click here for more information">
                        Click Here
                    </a>

                </li>
                <li class="w3-padding-16 w3-hover-white">
                    <img src="./img/instagram.jpg" class="w3-left w3-margin-right" style="width:50px" alt="instagram">
                    <span class="w3-large">SnowStation_SaintLouis</span><br>
                    <a href="https://www.instagram.com/" target="_blank" title="Click here for more information">
                        Click Here
                    </a>
                </li>
            </ul>
        </div>

        <div class="w3-third">
            <h3>POPULAR TAGS</h3>
            <p>
                <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Saint Louis</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Snow</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Skiing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fishing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Building</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Family</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Shopping</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Games</span>
            </p>
        </div>
    </div>
</footer>


</body>
</html>
