
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.js"></script>
        <style>
    table.left{
    margin-right:auto;
    margin-left:20px;
    margin-top:80px;
    height: 425px;
    width: 425px;
   border-collapse: collapse;
    }
            .zoom {
  transition: transform .5s; 
  margin: 0 auto;
}
.zoom:hover {
  transform: scale(1.1); 
}
span.relative {
  position: relative;
  width: 400px;
  height: 200px;
  border: 3px solid grey;
}
        </style>
        <title>TFT: Characters</title>
    </head>
    <body background = pengu.jpg>
<?php
include('header.html');
?>
       <div class="container" id="align">
            <div class="row" id='team'>
            </div>
        </div>
<table class = "left"> 
  <tr>
<th> <div class= "zoom" onmouseover= "mDown('Ashe')">
<a href="#"></a>
    <img src="cimgs/ashe.png" width="100" height="100" onclick="getCharInfo2('Ashe')">
</a>
</div>
</th>
    <th><div class= "zoom" onmouseover= "mDown('Anivia')">
    <a href="#"></a>
    <img src="cimgs/anivia.png" width="100" height="100" onclick="getCharInfo2('Anivia')">
  </a>
</div> </th>
<th><div class= "zoom" onmouseover= "mDown('Braum')">
    <a href="#"></a>
    <img src="cimgs/braum.png" width="100" height="100" onclick="getCharInfo2('Braum')">
  </a>
<th>
    <div class= "zoom" onmouseover= "mDown('Chogath')">
    <a href="#"></a>
    <img src="cimgs/cho.png" width="100" height="100"  onclick="getCharInfo2('Chogath')">
  </a>
</div> </th>
  </tr>
  <tr>
    <td><div class= "zoom" onmouseover= "mDown('Fiora')">
    <a href="#"></a>
    <img src="cimgs/fiora.png" width="100" height="100" onclick="getCharInfo2('Fiora')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('Garen')">
    <a href="#"></a>
    <img src="cimgs/garen.png" width="100" height="100" onclick="getCharInfo2('Garen')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('Leona')">
    <a href="#"></a>
    <img src="cimgs/leona.png" width="100" height="100" onclick="getCharInfo2('Leona')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('Lucian')">
    <a href="#"></a>
    <img src="cimgs/lucian.png" width="100" height="100" onclick="getCharInfo2('Lucian')">
  </a></td>
  <td></td>
  </tr>
  <tr>
    <td><div class= "zoom" onmouseover= "mDown('RekSai')">
    <a href="#"></a>
    <img src="cimgs/rek.png" width="100" height="100" onclick="getCharInfo2('RekSai')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('Sejuani')">
    <a href="#"></a>
    <img src="cimgs/sej.png" width="100" height="100" onclick="getCharInfo2('Sejuani')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('Shen')">
    <a href="#"></a>
    <img src="cimgs/shen.png" width="100" height="100" onclick="getCharInfo2('Shen')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('Veigar')">
    <a href="#"></a>
    <img src="cimgs/veigar.png" width="100" height="100" onclick="getCharInfo2('Veigar')">
  </a></td>
  <td></td>
  </tr>
  <tr>
    <td><div class= "zoom" onmouseover= "mDown('Yasuo')">
    <a href="#"></a>
    <img src="cimgs/yas.png" width="100" height="100" onclick="getCharInfo2('Yasuo')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('Evelynn')">
    <a href="#"></a>
    <img src="cimgs/eve.png" width="100" height="100"  onclick="getCharInfo2('Evelynn')">
  </a>
</div>
  </a></td>
  <td><div class= "zoom"onmouseover= "mDown('Lulu')">
    <a href="#"></a >
    <img src="cimgs/lulu.png" width="100" height="100" onclick="getCharInfo2('Lulu')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('Warwick')">
    <a href="#"></a>
    <img src="cimgs/ww.png" width="100" height="100" onclick="getCharInfo2('Warwick')">
  </a></td>
  </tr>
</table>
<div>
  <span class = "relative" id = "childSpan" style="color:blue;font-size:20px">Character Information: </span>
</div>
<script src ='js/Items.js'></script>
 <script>
function mDown(item) {
  getCharInfo1(item)
}
</script>
</body>
</html>
        <script src="js/Character.js"></script>
    </body>

</html>