<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.js"></script>
            
        <title>TFT: Items</title>
    </head>
<style>
table.center{
    margin-left:auto;
    margin-right:auto;
    margin-top:150px;
    height: 550px;
    width: 550px;
  border-collapse: collapse;
    }
    
table, td, th {
}

.zoom {
  transition: transform .5s; 
  margin: 0 auto;
}
.zoom:hover {
  transform: scale(1.3); 
}

</style>
  <body background = pengu.jpg>
<?php
    include('header.html');
?>

<table class = "center"> 
  <tr>
<th> <div class= "zoom" onmouseover= "mDown('bfsword')">
<a href="#"></a>
    <img src="imgs/bf_item.png" width="100" height="100" onclick="getItemInfo1('bfsword')">
</a>
</div>
</th>
    <th><div class= "zoom" onmouseover= "mDown('recurvebow')">
    <a href="#"></a>
    <img src="imgs/bow_item.png" width="100" height="100" onclick="getItemInfo1('recurvebow')">
  </a>
</div> </th>
<th><div class= "zoom" onmouseover= "mDown('negatroncloak')">
    <a href="#"></a>
    <img src="imgs/cloak_item.png" width="100" height="100" onclick="getItemInfo1('negatroncloak')">
  </a>
<th>
    <div class= "zoom" onmouseover= "mDown('needlesslylargerod')">
    <a href="#"></a>
    <img src="imgs/rod_item.png" width="100" height="100"  onclick="getItemInfo1('needlesslylargerod')">
  </a>
</div> </th>
<th><div class= "zoom" onmouseover= "mDown('chainvest')">
    <a href="#"></a>
    <img src="imgs/vest_item.png" width="100" height="100"  onclick="getItemInfo1('chainvest')">
  </a>
</div> </th>
  </tr>
  <tr>
    <td><div class= "zoom" onmouseover= "mDown('giantsbelt')">
    <a href="#"></a>
    <img src="imgs/belt_item.png" width="100" height="100" onclick="getItemInfo1('giantsbelt')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('guardianangel')">
    <a href="#"></a>
    <img src="imgs/ga_item.png" width="100" height="100" onclick="getItemInfo1('guardianangel')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('locketoftheironsolari')">
    <a href="#"></a>
    <img src="imgs/solari_item.png" width="100" height="100" onclick="getItemInfo1('locketoftheironsolari')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('redemption')">
    <a href="#"></a>
    <img src="imgs/redemption_item.png" width="100" height="100" onclick="getItemInfo1('redemption')">
  </a></td>
  <td><div class= "zoom"onmouseover= "mDown('morellonomicon')">
    <a href="#"></a >
    <img src="imgs/morello_item.png" width="100" height="100" onclick="getItemInfo1('morellonomicon')">
  </a></td>
  </tr>
  <tr>
    <td><div class= "zoom" onmouseover= "mDown('hush')">
    <a href="#"></a>
    <img src="imgs/hush_item.png" width="100" height="100" onclick="getItemInfo1('hush')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('bladeoftheruinedking')">
    <a href="#"></a>
    <img src="imgs/bortk_item.png" width="100" height="100" onclick="getItemInfo1('bladeoftheruinedking')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('hextechgunblade')">
    <a href="#"></a>
    <img src="imgs/gunblade_item.png" width="100" height="100" onclick="getItemInfo1('hextechgunblade')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('swordofthedivine')">
    <a href="#"></a>
    <img src="imgs/sword_item.png" width="100" height="100" onclick="getItemInfo1('swordofthedivine')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('infinityedge')">
    <a href="#"></a>
    <img src="imgs/ie_item.png" width="100" height="100" onclick="getItemInfo1('infinityedge')">
  </a></td>
  </tr>
  <tr>
    <td><div class= "zoom" onmouseover= "mDown('knightsvow')">
    <a href="#"></a>
    <img src="imgs/knights_item.png" width="100" height="100" onclick="getItemInfo1('knightsvow')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('guinsoosrageblade')">
    <a href="#"></a>
    <img src="imgs/rageblade_item.png" width="100" height="100" onclick="getItemInfo1('guinsoosrageblade')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('rabadonsdeathcap')">
    <a href="#"></a>
    <img src="imgs/dcap_item.png" width="100" height="100" onclick="getItemInfo1('rabadonsdeathcap')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('tearofthegoddess')">
    <a href="#"></a>
    <img src="imgs/tear_item.png" width="100" height="100" onclick="getItemInfo1('tearofthegoddess')">
  </a></td>
  <td><div class= "zoom" onmouseover= "mDown('warmogsarmor')">
    <a href="#"></a>
    <img src="imgs/warmogs_item.png" width="100" height="100" onclick="getItemInfo1('warmogsarmor')">
  </a></td>
  </tr>
  <tr>
    <td><div class= "zoom" onmouseover= "mDown('yuumi')">
    <a href="#"></a>
    <img src="imgs/yuumi_item.png" width="100" height="100" onclick="getItemInfo1('yuumi')">
    </a></td>
  <td><div class= "zoom" onmouseover= "mDown('phantomdancer')">
    <a href="#"></a>
    <img src="imgs/pd_item.png" width="100" height="100" onclick="getItemInfo1('phantomdancer')">
  </a></td>
  <td><div class= "zoom"  onmouseover= "mDown('redbuff')" >
    <a href="#"></a>
    <img src="imgs/redbuff_item.png" width="100" height="100" onclick="getItemInfo1('redbuff')">
  </a></td>
  <td><div class= "zoom"  onmouseover= "mDown('rapidfirecannon')" >
    <a href="#"></a>
    <img src="imgs/rapid_item.png" width="100" height="100" onclick="getItemInfo1('rapidfirecannon')">
  </a></td>
  <td><div class= "zoom"  onmouseover= "mDown('titanichydra')" >
    <a href="#"></a>
    <img src="imgs/hydra_item.png" width="100" height="100" onclick="getItemInfo1('titanichydra')">
  </a></td>
  </tr>
</table>
<div>
  <span id = "childSpan">Item Information: </span>
</div>
 <script src ='js/Items.js'></script>
 <script>
function mDown(item) {
  getItemInfo1(item)
}
</script>
    </body>
</html>

