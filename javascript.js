window.onload = function() {
document.getElementById("footerText").innerHTML =("<p>      &copy;  2014-" + new Date().getFullYear() + " Daniel Vestol. All rights reserved.</p>");
};

var drama = "drama"
var action = "action"

function removeContainer(matchClass) {
    var elems = document.getElementsByTagName('*'), i;
	console.log(elems)
    for (i in elems) {
        if((' ' + elems[i].className + ' ').indexOf(' ' + matchClass + ' ')
                > -1) {
            elems[i].style.display="none";
        }
    }
}