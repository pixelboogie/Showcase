function animateIt() {

   // var div = document.getElementById("dom-target");
    //var myData = div.textContent;


    var myCollection = document.getElementsByTagName("p");
	//document.getElementById("demo").innerHTML = myCollection.length;

	//console.log("There are: " + myCollection.length);

var tl = new TimelineLite();
tl.from("#myTitle", 1, {opacity:0})

var myVar = setInterval(myTimer, 100);
var i=1;
function myTimer() {
	var	thisDiv = "#div" + i;
	//tl.from(thisDiv, .6, {opacity:0, scale:.2, ease: Power1.easeOut}, '.3');
	//var tween = TweenLite.from(thisDiv, .5, {opacity:0 ease: Power1.easeOut});
	TweenLite.to(thisDiv, 1.5, {opacity:1});
	//console.log("Going to: " + i);
	if(i>=myCollection.length){
		clearInterval(myVar);

	}
	i++;
}




}
// ------------ Video Control

 document.getElementById("closeBtn").addEventListener("click", closeIt);
 function closeIt() {
 	document.getElementById("vidDiv").style.visibility = "hidden";
	console.log("aaaa!!!!!")
}

function playVid(url) {
	document.getElementById("vidDiv").style.visibility = "visible";
		//console.log("bbb!!!!!" + [id])
		console.log("bbb!!!!!" + [url])
		//console.log("ccc!!!!!" + ["ClipName"][id])
		
		//descVideo.src = $row["ClipURL"];
		//descVideo.src = "http://www.pixelboogie.com/level2/VidProjsVids/AdBuilderDemo.mp4;"

	//console.log("bbb!!!!!" +  "<?php echo $row["ClipName"][3] ?>")


}
// ------------ 

console.log("animateIt JS!!!!!");
//console.log("loaded JS!!!!!");