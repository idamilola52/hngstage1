<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Front Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=New+Rocker|Passero+One" rel="stylesheet">
    <style>
        html {
    background: url('unsplash.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.top {
    padding-top: 20px;
    text-align: center;
    color: #56CCF2;
    font-family: 'Passero One', cursive;
    font-style: normal;
    font-size: 60px;
    line-height: 30px;

}

.bottom {
    color: #000406;
    font-size: 3.5vh;
    bottom: 30px;
    height: 200px;
    display: flex;
    justify-content: space-between;
    font-family: 'New Rocker', cursive;
    letter-spacing: 5%;
}

.alien-content {
    padding-bottom: 69vh;
}

.bottom .left {
    text-align: center;
    padding-left: 100px;
}

.bottom .right{
    padding-right: 180px;
}
    </style>
</head>
<body>
        <div class="top">
                <span>HNG STAGE ONE CHALLENGE</span>
            </div>
            
            <div class="alien-content"></div>
            
            <div class="bottom">
                <span class="left">
                    TIME SLIPS AWAY WHEN YOU HAVE
                    <br>
                    NOTHING BUT TIME.
                </span>
                <span class="right">

                 <?php
                    date_default_timezone_set("Africa/Lagos");
                    echo "<p>". date("h:iA");
                    echo "<p>". date("d/m/Y"). "</p>";

                ?>
                    



                </span>
            </div>
    
</body>
</html>