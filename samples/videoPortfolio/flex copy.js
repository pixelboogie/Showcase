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





/*
tl.from("#div1", .6, {opacity:0, scale:.2, ease: Power1.easeOut}, '.3')
tl.from("#divA2", .9, {opacity:0, scale:.2, ease: Power1.easeOut}, '.3')
tl.from("#divA3", 1.2, {opacity:0, scale:.2, ease: Power1.easeOut}, '.3')
tl.from("#divB1", .6, {opacity:0,  scale:.2, ease: Power1.easeOut}, '.3')
tl.from("#divB2", .9, {opacity:0,  scale:.2, ease: Power1.easeOut}, '.3')
tl.from("#divB3", 1.2, {opacity:0, scale:.2, ease: Power1.easeOut}, '.3')
tl.from("#divC1", .6, {opacity:0,  scale:.2, ease: Power1.easeOut}, '.3')
tl.from("#divC2", .9, {opacity:0,  scale:.2, ease: Power1.easeOut}, '.6')
tl.from("#divC3", 1.2, {opacity:0, scale:.2, ease: Power1.easeOut}, '.9')
tl.from("#divD1", .6, {opacity:0,  scale:.2, ease: Power1.easeOut}, '.3')
tl.from("#divD2", .9, {opacity:0,  scale:.2, ease: Power1.easeOut}, '.6')
tl.from("#divD3", 1.2, {opacity:0, scale:.2, ease: Power1.easeOut}, '.9')
tl.from("#divE1", .6, {opacity:0,  scale:.2, ease: Power1.easeOut}, '.3')
tl.from("#divE2", .9, {opacity:0,  scale:.2, ease: Power1.easeOut}, '.6')
tl.from("#divE3", 1.2, {opacity:0, scale:.2, ease: Power1.easeOut}, '.9')
*/


/*
tl.from("#myTitle", 5, {opacity:0})
tl.from("#divA1", .6, {opacity:0, x:-800, ease: Power1.easeOut}, '.9')
tl.from("#divA2", .9, {opacity:0, x:-800, ease: Power1.easeOut}, '.6')
tl.from("#divA3", 1.2, {opacity:0, x:-800, ease: Power1.easeOut}, '.3')

tl.from("#divB1", .6, {opacity:0, x:-800, ease: Power1.easeOut}, '1.9')
tl.from("#divB2", .9, {opacity:0, x:-800, ease: Power1.easeOut}, '1.6')
tl.from("#divB3", 1.2, {opacity:0, x:-800, ease: Power1.easeOut}, '1.3')

tl.from("#divC1", .6, {opacity:0, x:-800, ease: Power1.easeOut}, '2.9')
tl.from("#divC2", .9, {opacity:0, x:-800, ease: Power1.easeOut}, '2.6')
tl.from("#divC3", 1.2, {opacity:0, x:-800, ease: Power1.easeOut}, '2.3')

tl.from("#divD1", .6, {opacity:0, x:-800, ease: Power1.easeOut}, '3.9')
tl.from("#divD2", .9, {opacity:0, x:-800, ease: Power1.easeOut}, '3.6')
tl.from("#divD3", 1.2, {opacity:0, x:-800, ease: Power1.easeOut}, '3.3')

tl.from("#divE1", .6, {opacity:0, x:-800, ease: Power1.easeOut}, '4.9')
tl.from("#divE2", .9, {opacity:0, x:-800, ease: Power1.easeOut}, '4.6')
tl.from("#divE3", 1.2, {opacity:0,  
scale:.2, ease: Power1.easeOut}, '4.3')
*/

}

//console.log("animateIt JS!!!!!");
console.log("loaded JS!!!!!");