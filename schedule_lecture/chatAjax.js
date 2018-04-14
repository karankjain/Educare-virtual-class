function getXmlHttpRequestObject() {

if (window.XMLHttpRequest) {
return new XMLHttpRequest(); //Not IE
} else if(window.ActiveXObject) {
return new ActiveXObject("Microsoft.XMLHTTP"); //IE
} else {
alert("Your browser doesn't support the XmlHttpRequest object.");

}
}	

var Req = getXmlHttpRequestObject();

var right_now = new Date();
Req.open("GET", "testFile.txt?" + right_now.getTime(), true);

Req.onreadystatechange = function() {
if (Req.readyState == 4) {
var output = Req.responseText;
}
}