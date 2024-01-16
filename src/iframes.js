// Get all iframes on the page
var iframes = document.getElementsByTagName("iframe");

// Loop through each iframe and remove width and height attributes
for (var i = 0; i < iframes.length; i++) {
    var iframe = iframes[i];
    iframe.removeAttribute("width");
    iframe.removeAttribute("height");
}

console.log("Width and height attributes removed from all iframes.");