

function animateIt() {


/*
var myMovies = Array;
myMovies[0] = "vids/Experiments.mp4";
myMovies[1] = "vids/FlashStuff.mp4";
myMovies[2] = "vids/HTML5Ads.mp4";
myMovies[3] = "vids/sillVideos.mp4"; 
*/

var tl = new TimelineLite();
tl.from("#myTitle", 1, {opacity:0, x:-800, ease: Power1.easeOut})
tl.from("#div1", 1, {opacity:0, x:-800, rotation:-380, ease: Power1.easeOut}, '-=0.9')
tl.from("#div2", 1, {opacity:0, x:-800, rotation:-380, ease: Power1.easeOut}, '-=0.9')
tl.from("#div3", 1, {opacity:0, x:-800, rotation:-380, ease: Power1.easeOut}, '-=0.9')
tl.from("#div4", 1, {opacity:0, x:-800, rotation:-380, ease: Power1.easeOut}, '-=0.9')
tl.from("#div5", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div6", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div7", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9');

document.getElementById("myBody").style.visibility = "visible";
console.log("animateIt JS!!!!!");


    document.getElementById("div1").addEventListener("click", function() { goAd(0)});
    document.getElementById("div2").addEventListener("click", function() { goAd(1)});
    document.getElementById("div3").addEventListener("click", function() { goAd(2)});
    document.getElementById("div4").addEventListener("click", function() { goAd(3)});
    

    document.getElementById("div1").addEventListener("mouseenter", function() { playDesc(0)});
    document.getElementById("div2").addEventListener("mouseenter", function() { playDesc(1)});
    document.getElementById("div3").addEventListener("mouseenter", function() { playDesc(2)});
    document.getElementById("div4").addEventListener("mouseenter", function() { playDesc(3)});

    document.getElementById("div1").addEventListener("mouseleave", function() { clearDesc(0)});
    document.getElementById("div2").addEventListener("mouseleave", function() { clearDesc(1)});
    document.getElementById("div3").addEventListener("mouseleave", function() { clearDesc(2)});
    document.getElementById("div4").addEventListener("mouseleave", function() { clearDesc(3)});

///    document.getElementById("div1").addEventListener("click", goAd(1));

	/*

TweenMax.from("#myTitle", .8, {opacity:0, x:-100, scale:0.95, ease: Power3.easeOut});

   	    TweenMax.from("#div1", 1, {opacity:0, x:-100, delay:0.5, ease: Power3.easeOut});
    TweenMax.from("#div2", 1, {opacity:0, x:-100, delay:1, ease: Power3.easeOut});
    TweenMax.from("#div3", 1, {opacity:0, x:-100, delay:1.5, ease: Power3.easeOut});



   TweenMax.from("#myTitle", .8, {scale:0.80, ease: Power3.easeOut});
    TweenMax.to("#x_txt1", 1, {opacity:1});
    TweenMax.to("#x_txt2", 1, {opacity:1, delay:0.5});
    TweenMax.to("#x_txt3", 1, {opacity:1, delay:.8});

    */


}

function goAd(id){
   var descVideo = document.getElementById('descVideo');
   descVideo.pause();


path="level2/";

links = Array;
links[0] = "/indexFlash.html";
links[1] = "/HTML5Ads.html";
links[2] = path + "videoProjects.html";
links[3] = path + "Experiments.html";


	
	//window.location.href = "http://www.pixelboogie.com/samples/Allegra160x600to300x600/index.html";
	//window.location.href = "http://www.pixelboogie.com/" + links[id];
    window.location.href = links[id];

    //console.log("http://www.pixelboogie.com/" + links[id]);

    

}

function clearDesc(id){
    var t3 = new TimelineLite();

   /// document.getElementById("vidDiv ").style.scale = "1";
    //document.getElementById("vidDiv ").css('transform:', 'scale(1)');
    t3.to("#vidDiv", 0, {opacity:1, scale:1})

   // document.getElementById("vidDiv").style.opacity = "1";
    document.getElementById("vidDiv").style.visibility = "hidden";
 
    var descVideo = document.getElementById('descVideo');
    //TweenMax.killAll();
    descVideo.pause();


console.log("clearDesc called");
   }


function playDesc(id){

Desc = Array;
Desc[0] = "Flash Portfolio - Coded with ActionScript, PHP and a MySQL <br>Database. Many projects from the Flash era are featured. <br>The Flash Plugin for your browser is required to view this.";
Desc[1] = "Some examples of HTML5 digital ad units. These are mostly <br>hand-coded, but I can also build using commonly used production <br>tools.";
Desc[2] = "Collection of personal videos - mostly of me playing video games <br>and not very well. But the production process was good practice<br> and demonstrates proficiency with the tools.";
Desc[3] = "Various, incomplete experiments and concepts, but they<br> demonstrate some technical proficiency and can be used <br>in larger projects.";

   //    console.log("playDesc " + id);
    document.getElementById("desc").innerHTML=Desc[id];
    document.getElementById("vidDiv").style.visibility = "visible";
    var t2 = new TimelineLite();
    t2.from("#vidDiv", .5, {opacity:0, scale:.8, ease: Power1.easeOut})

    playVid(id);
}

/*
function addSourceToVideo(element, src, type) {
    var source = document.createElement('source');
    var vidDiv = document.getElementById('vidDiv');

    source.src = src;
    source.type = type;

    element.appendChild(source);
}

var video = document.createElement('video');
document.body.appendChild(video);
addSourceToVideo(video, 'http://upload.wikimedia.org/wikipedia/commons/7/79/Big_Buck_Bunny_small.ogv', 'video/ogg');
video.play();
*/


function playVid(movieNum) {


var myMovies = Array;
myMovies[0] = "vids/FlashStuff.mp4";
myMovies[1] = "vids/HTML5Ads.mp4";
myMovies[2] = "vids/Alpha/flex.php";
myMovies[3] = "vids/Experiments.mp4";

    //vid.src = "movie.ogg";
    var descVideo = document.getElementById('descVideo');
  
    //descVideo.setAttribute('src', 'vids/Experiments.mp4'); 
   //descVideo.setAttribute('src', myMovies[movieNum]); 
   descVideo.src = myMovies[movieNum];

    //descVideo.src = "vids/FlashStuff.mp4";

    //descVideo.play();
 


var playPromise = descVideo.play();
playPromise.catch(function(error) {
// poof console error gone.
 console.log(error);
});

    }


console.log("loaded JS!!!!!");