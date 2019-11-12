
function animateIt() {






var tl = new TimelineLite();
tl.from("#myTitle", .8, {opacity:0, x:-300, scale:0.90, ease: Power1.easeOut})
tl.from("#div1", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div2", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div3", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div4", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div5", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div6", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div7", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div8", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div9", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div10", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div11", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9')
tl.from("#div12", 1, {opacity:0, x:-150, scale:0.70}, '-=0.9');


document.getElementById("myBody").style.visibility = "visible";

URLs = Array;
//s = "http://www.pixelboogie.com/samples/"
s = "samples/"

URLs[0] = s + "LateNight/index.html";
URLs[1] = s + "Anna/index.html";
URLs[2] = s + "AmericanWoman/index.html";
URLs[3] = s + "GhostReconEdge/EdgeAnimateGhostRecon.html";
URLs[4] = s + "PeanutsMovie/index.html";
URLs[5] = s + "IceAgePeanuts_300x250_500x250/index.html";
URLs[6] = "http://shane-anderson.celtra.com/preview/8a1bd10a";
URLs[7] = s + "Allegra160x600to300x600/index.html";
URLs[8] = s + "CoffeMateSteam/index.html";
URLs[9] = s + "AnimHTML5Idol/index.html";
URLs[10] = "http://shane-anderson.celtra.com/preview/53cf0f56"
URLs[11] = s + "TUF2_160x600/index.html";

    document.getElementById("div1").addEventListener("click", function() { goAd(0)});
    document.getElementById("div2").addEventListener("click", function() { goAd(1)});
    document.getElementById("div3").addEventListener("click", function() { goAd(2)});
    document.getElementById("div4").addEventListener("click", function() { goAd(3)});
    document.getElementById("div5").addEventListener("click", function() { goAd(4)});
    document.getElementById("div6").addEventListener("click", function() { goAd(5)});
    document.getElementById("div7").addEventListener("click", function() { goAd(6)});
    document.getElementById("div8").addEventListener("click", function() { goAd(7)});
    document.getElementById("div9").addEventListener("click", function() { goAd(8)});
    document.getElementById("div10").addEventListener("click", function(){ goAd(9)});
    document.getElementById("div11").addEventListener("click", function(){ goAd(10)});
    document.getElementById("div12").addEventListener("click", function() { goAd(11)});
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
	console.log(id);
	//window.location.href = "http://www.pixelboogie.com/samples/Allegra160x600to300x600/index.html";
	//window.location.href = URLs[id];
    window.open(URLs[id], "_blank")
}

console.log("loaded JS!");

