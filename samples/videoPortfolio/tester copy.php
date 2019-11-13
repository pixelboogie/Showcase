<?php 
require("database.php"); 
$sql = "SELECT * FROM movieclips ORDER BY Rank";
$result = mysqli_query($conn, $sql);

$row1 = mysqli_fetch_row($result); 

$answer1 = $row1[1]; 
$answer2 = json_encode($row1, JSON_PRETTY_PRINT);
//$answer3 = $answer2[1]["ClipName"];
//$answer3 = $answer2[1]["ClipName"];
//$answer3 = $answer2[1][1];
//$answer3 = json_encode($row1[3], JSON_PRETTY_PRINT);
$answer3 = json_encode($row1[6], JSON_PRETTY_PRINT);


if (mysqli_num_rows($result) > 0) {
echo
"<!DOCTYPE html>
<html>
<head>
<title>PixelBoogie - Projects</title>


<script type='text/javascript'>
console.log('answer1 is:' + ".$answer1.");
console.log('answer2 is:' + ".$answer2.");
console.log('answer3 is:' + ".$answer3.");
</script>


<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js'></script>
<style>

body{

	     background-color: #FFF;
	      position: relative;
        width: 100%;
        background-image: url('shinyMetalTexture.jpg');
        background-repeat-x: no-repeat;
        background-repeat-y: repeat;
        background-size: cover; 




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
  text-shadow: 6px 7px 10px rgba(0, 0, 0, 0.53);
  margin:auto;
 text-align: center;
color: black;

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


    	 //echo "<a href=video.php?link=". ($i + 1)  ."><div class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
      //echo "<a href=video.php?link=". ($i + 1)  ."><div id='div1' class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
      //echo "<a href=video.php?link=". ($i + 1)  ."><div id='div". ($i+1) ."' class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
      //echo "<a href=video.php?link=". ($i + 1)  ."><div id='div". ($i+1) ."' class='myRow'><img src=" . $row["ThumbURL"] . "><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 

      /*
      This worked
      echo "<a href=video.php?link=". $row["ClipID"] ."><div id='div". ($i+1) ."' class='myRow'><img src=" . $row["ThumbURL"] . "><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
      */
    
  /*
        echo "<a onClick=playVid(".$row["ClipID"].")><div id='div". ($i+1) ."' class='myRow'><img src=" . $row["ThumbURL"] . "><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 

*/
                echo "<a onClick=playVid(".$row["ClipID"].")><div id='div". ($i+1) ."' class='myRow'><img src=" . $row["ThumbURL"] . "><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 



        $i++;

}

} else {
    echo "0 results";
}

echo "i = " . $i;

mysqli_close($conn);


echo'
</div>
</div>
  <div id="vidDiv">
  <button id="closeBtn">close</button>
  <video id="descVideo" src="" autoplay="true" controls="true" type="video/mp4"></video>
  </div>
</body>
<script src="flex.js"></script><script type="text/javascript">window.onload = animateIt();</script>
</html>'
?>