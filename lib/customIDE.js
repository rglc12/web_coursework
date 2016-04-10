var windowHeight = window.innerHeight;
var codeContainerHeight = (windowHeight - 40) + "px";

var container = document.getElementsByClassName("codeContainer");

/*
	Resize the textarea/input fields of each the HTML, CSS and Javascript fields
 */

function resize(){
	for (var i = 0; i < container.length; i++) {
		container[i].style.height = codeContainerHeight;
	}
}

/*
	Code injection: injectResults injects the HTML (text), CSS and Javascript from each field into the
	iframe within the 'Result' field for the IDE.
 */

function injectResults(iframe, htmlCode, cssCode, Javascript){

	var ifr = iframe.contentWindow.document;
	var htmlInput = htmlCode.value;
	var cssInput = cssCode.value;
	var jsInput = Javascript.value;

	ifr.open();
	ifr.write("<style>" + cssInput + "</style>" + htmlInput + "<script>" + jsInput + "</script>");
	ifr.close();
}

/*
	Event handlers
 */
runButton.addEventListener(
	"click",
	function() {
		injectResults(resultFrame, htmlCode, cssCode, jsCode);
	},
	false);

addEventListener("load", resize, false);
