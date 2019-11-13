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

	    background-color: #000;
	          position: relative;
          width: 100%;


          /*

      background-color: #231f1f;

      */

}




#myTitle {
    font-family: 'Anton';
    position: relative;

    color: #999;
    
    width: 100%;
    top: 10px;
    margin-bottom: 10px;
    z-index: 3;

   /*
    left: 70px;
   width: 800px;
     text-align: center;
     margin: auto;
   */
}
h1{

  font-family: 'Anton';
    font-size: 60px;
  text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.53);
  margin:auto;
 text-align: center;

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



    /*

      	background-color: black;
      height: 200px;
      */
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




	/* 

        -webkit-box-shadow: 5px 5px 10px -1px rgba(0,0,0,0.53);
      -moz-box-shadow: 5px 5px 10px -1px rgba(0,0,0,0.53);
      box-shadow: 5px 5px 10px -1px rgba(0,0,0,0.53);
	   border: 2px solid #000;
	opacity: .4;
	*/
}

p{
    /*position: relative;*/
    top: 60px;
    color: #999;
    font-size: 12px;
    margin-top: 6px;



    /*    display: inline;
    */
}

a{
	  text-decoration: none;
}

/* Style the video: 100% width and height to cover the entire window */
#bgVid {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    opacity: .15;
    z-index: 1;
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

    	 //echo "<a href=video.php?link=". ($i + 1)  ."><div class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
      //echo "<a href=video.php?link=". ($i + 1)  ."><div id='div1' class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
      //echo "<a href=video.php?link=". ($i + 1)  ."><div id='div". ($i+1) ."' class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
      //echo "<a href=video.php?link=". ($i + 1)  ."><div id='div". ($i+1) ."' class='myRow'><img src=" . $row["ThumbURL"] . "><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
      echo "<a href=video.php?link=". $row["ClipID"] ."><div id='div". ($i+1) ."' class='myRow'><img src=" . $row["ThumbURL"] . "><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 


        $i++;

}

} else {
    echo "0 results";
}

mysqli_close($conn);


echo'
</div>
</div>
<video autoplay muted loop id="bgVid">
  <source src="sw.mp4" type="video/mp4">
</video>
</body>
<script src="flex.js"></script><script type="text/javascript">window.onload = animateIt();</script>
</html>'
?>