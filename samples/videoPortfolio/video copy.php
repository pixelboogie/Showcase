<html>
<body>
<?php
require("database.php"); 
//if($_GET['link'] == 'Link1')
$clipID = $_GET['link'];
$videoURL = "http://localhost/Alpha/video.php?link=". $clipID;
/*
echo $clipID;

if($_GET['link'] == 1)
{
echo "Link 1 Clicked";
} else {
echo "Link 2 Clicked";
}
*/

//$thisVideo = mysql_query("select * from movieclips where clipID = '$clipID'") or die(mysql_error());  		
//$thisVideo = mysqli_query($conn, "select * from movieclips where clipID = '1'") or die(mysqli_error());  		
$thisVideo = mysqli_query($conn, "select * from movieclips where clipID = '".$clipID."'") or die(mysqli_error());  		


	$i = 0;

	while ($row = mysqli_fetch_array($thisVideo))
	{
 	  $clipName = $row["ClipName"];
	  $clipTopic = $row["ClipTopic"];
	  $clipURL = $row["ClipURL"];
	  $thumbURL = $row["ThumbURL"];
	  $comments = $row["Comments"];
	$i++;
	}

	mysqli_free_result($thisVideo);	

?>


<!DOCTYPE html>
<html>
<head>
<title>PixelBoogie - <?= $clipName ?></title>
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
<link href="video.css" rel="stylesheet">
</head>
<body id="myBody">
<!--
<div id="myTitle"><a href="<?= $videoURL ?>"<h1>PixelBoogie - <?= $clipName ?></h1></a></div>
-->
<div id="myTitle"><a href="<?= $videoURL ?>"><h1>PixelBoogie - <?= $clipName ?></h1></a></div>
<div id="vidDiv">
	<!--
	<video width="640" height="360" id="descVideo" src="VidProjsVids/AdBuilderDemo.mp4" autoplay controls='true' type="video/mp4"></video>
-->
	<video width="640" height="360" id="descVideo" src="<?= $clipURL ?>" autoplay='true' controls='true' type="video/mp4"></video>
</div>

<div id="clipInfo">
<p>
<?php
	//echo ($clipName . "</p><p>");
	//echo ($clipTopic . "</p><p>");
	//echo ($clipURL . "</p><p>");
	//echo ($thumbURL . "</p><p>");
	echo ($comments . "</p>");

/*
 $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
            echo "<a href=videos/".$row["ClipURL"].".   mp4 ><div id=".$divNum[$i]." class='myRow'><img src=thumbs/" . $row["ThumbURL"] . ".jpg><div id='myName'><p>" . $row["ClipName"] . "</p></div></div>" . "<a/><br>"; 
        $i++;
    }
    
 */

?></div></body></html>