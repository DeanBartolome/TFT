<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.js"></script>
            
        <title>Homepage</title>
    </head>
    <body background = pengu.jpg>
<?php
include('header.html');
?>

        <div class="container" id="align">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                </ol>
                
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="tft1.jpg" class="img-responsive" width="1200">
                        <div class="carousel-caption">
                            <h5>View the Items</h5>
                        </div>
                    </div>
                    
                    <div class="item">
                        <img src="tft5.jpg" class="img-responsive" width="1200">
                        <div class="carousel-caption">
                            <h5>See all the characters</h5>
                        </div>
                    </div>
                    
                    <div class="item">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/liNLLx874g4" frameborder="0" allowfullscreen></iframe>
                </div>
                    </div>
                </div>
            </div>
            <div class="jumbotron">
                <h3 class ="center">Gameplay here!</h3><br>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/_qwf3jp688c" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </body>
</html>