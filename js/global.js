function loadjscssfile(filename, filetype){
    var fileref = '';
    if (filetype=="js"){ //if filename is a external JavaScript file
        fileref=document.createElement('script')
        fileref.setAttribute("type","text/javascript")
        fileref.setAttribute("src", filename)
    }
    else if (filetype=="css"){ //if filename is an external CSS file
        fileref=document.createElement("link")
        fileref.setAttribute("rel", "stylesheet")
        fileref.setAttribute("type", "text/css")
        fileref.setAttribute("href", filename)
    }
    if (typeof fileref !== "undefined") {
        var head  = document.getElementsByTagName('head')[0];
        head.appendChild(fileref);
    }
}


$(document).ready(function() {
    $( ".hamburger" ).click(function() {
        $(".menu-ul").toggle();
        $("form").toggle();
    });
});