<!-- <!DOCTYPE html>
<html>
<head>
    <title>PixelBoogie - Your Interactive Media Handyman</title>
    <style type="text/css" media="screen">
		html, body { height:100%; 

			/*background-color: #000000;
		*/
	}
		body { margin:0; padding:0; overflow:hidden; }
		</style>
</head>
<body>
	Howdy!
</body>
</html>
-->
<?php 
require("database.php"); 
$sql = "SELECT * FROM movieclips";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

echo
"<!DOCTYPE html>
<html>
<head>
<title>PixelBoogie - Video Projects</title>
<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js'></script>
<link href='index.css' rel='stylesheet'>
</head>
<body id='myBody'>
<div id='myTitle'>
    <h1>PixelBoogie - Video Projects</h1>
    <!-- <p id='smallTitle'>Videos and Motion Graphics created with Adobe Premiere and After Effects. -->   
</p>
</div>
<div id='thumbHolder'>
";
    // output data of each row
/*
var divNum[0]="divA1";
var divNum[1]="divA2";
var divNum[2]="divA3";
*/

$divNum[0]="divA1";
$divNum[1]="divA2";
$divNum[2]="divA3";
$divNum[3]="divB1";
$divNum[4]="divB2";
$divNum[5]="divB3";
$divNum[6]="divC1";
$divNum[7]="divC2";
$divNum[8]="divC3";
$divNum[9]="divD1";
$divNum[10]="divD2";
$divNum[11]="divD3";
$divNum[12]="divE1";
$divNum[13]="divE2";
$divNum[14]="divE3";
//echo $divNum[0];
    $i = 0;

    while($row = mysqli_fetch_assoc($result)) {

        //echo "<div id='divA1' class='myRow'><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<br>"; /* 	*/
       // echo "<div id=".$divNum[$i]." class='myRow'><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<br>"; /*  */
         //echo "<div id=".$divNum[$i]." class='myRow' style="background-image: url("thumbs/". $row["thrmbURL"]."><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<br>"; /*  */
        //echo "<div id=".$divNum[$i]." class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<br>"; /*  */
       
        // takes us to the video file
       //echo "<a href=videos/".$row["ClipURL"].".   mp4 ><div id=".$divNum[$i]." class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 

        // take us to the video.php page
        //echo "<a href=".$row["ClipURL"]."><div id=".$divNum[$i]." class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
       // echo "<a href=video.php?link=3><div id=".$divNum[$i]." class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
         echo "<a href=video.php?link=". ($i + 1)  ."><div id=".$divNum[$i]." class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 

        $i++;

}

} else {
    echo "0 results";
}

mysqli_close($conn);

echo'</div><script src="index.js"></script>
<script type="text/javascript">window.onload = animateIt();</script>'
?>