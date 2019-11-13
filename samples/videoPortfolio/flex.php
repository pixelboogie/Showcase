<?php 
require("database.php"); 
$sql = "SELECT * FROM movieclips ORDER BY Rank";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
echo
"<!DOCTYPE html>
<html>
<head>
<title>PixelBoogie - Projects</title>
<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js'></script>
<style>

body{
  background-color: #FFF;
  position: relative;
  width: 100%;
  background-image: url('film.jpg');
  background-repeat-x: no-repeat;
  background-repeat-y: repeat;
  background-size: cover; 
  background-image: 
}

#myTitle {
  font-family: 'Anton';
  position: relative;
  color: #999;
  width: 100%;
  top: 10px;
  margin-bottom: 40px;
  z-index: 3;
}
h1{
  font-family: 'Anton';
  font-size: 70px;
  letter-spacing: 6px;
  text-shadow: 6px 7px 10px rgba(0, 0, 0, 0.53);
  margin:auto;
  text-align: center;
  color: white;
}


.content {
	width:100%;
  position: fixed;
  z-index:2;
}

.flex-container {
	margin: auto;
  display: flex;
  flex-direction: row;
  width: 80%;
  align-content: space-between;
  flex-wrap: wrap;
  justify-content: center;
  }

.flex-container > a > div {
  width: 130px;
  margin: 20px;
  text-align: center;
  line-height: 10px;
  font-size: 16px;
  font-family: 'Arial';
  height: 80px;
  border: 2px solid #252525;
  color: white;
  background-color: black;
  -webkit-box-shadow: 10px 10px 19px -1px rgba(0,0,0,0.53);
  -moz-box-shadow: 10px 10px 19px -1px rgba(0,0,0,0.53);
  box-shadow: 10px 10px 19px -1px rgba(0,0,0,0.53);
  opacity: 0;
  z-index:2;
}

.flex-container > a > div:hover {
  cursor: pointer;
  -webkit-box-shadow: 10px 10px 19px -1px rgba(0,0,0,0.53);
  -moz-box-shadow: 10px 10px 19px -1px rgba(0,0,0,0.53);
  box-shadow: 10px 10px 19px -1px rgba(0,0,0,0.53);
  -webkit-filter: brightness(0.30);filter: brightness(1.3);
}

p{
    top: 60px;
    color: #999;
    font-size: 12px;
    margin-top: 6px;
}

a{
	  text-decoration: none;
}

#vidDiv{
  position: relative;
  background-color: black;
  border: 2px solid #484848;
  margin: auto;
  background-color:rgba(0, 0, 0, 0.5);
  padding: 10px;
  border-radius: 12px;
  max-width: 800px;
  z-index:20;
  -webkit-box-shadow: 10px 10px 19px -1px rgba(0,0,0,0.53);
  -moz-box-shadow: 10px 10px 19px -1px rgba(0,0,0,0.53);
  box-shadow: 10px 10px 19px -1px rgba(0,0,0,0.53); 
}
</style>
</head>
<body id='myBody'>
<div id='myTitle'>
    <h1>PixelBoogie - Projects</h1>
</div>
<body>
<div class='content'>
<div class='flex-container'>";

$i = 0;
while($row = mysqli_fetch_assoc($result)) {
  echo "<a href=video.php?link=". $row["ClipID"] ."><div id='div". ($i+1) ."' class='myRow'><img src=" . $row["ThumbURL"] . "><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
  $i++;
};
} else {
  echo "0 results";
}
mysqli_close($conn);
echo'
</div>
</div>
</body>
<script src="flex.js"></script><script type="text/javascript">window.onload = animateIt();</script>
</html>'
?>