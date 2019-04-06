function disableselect(e){
  return false
  }
  function reEnable(){
  return true
  }
  document.onselectstart=new Function ("return false")
  if (window.sidebar){
  document.onmousedown=disableselect
  document.onclick=reEnable
}

function zoom()
{
var developer = 0;
if(developer == 0){

$(document).ready(function(){
 var keyCodes = [61, 107, 173, 109, 187, 189];
 $(document).keydown(function(event) {   
   if (event.ctrlKey==true && (keyCodes.indexOf(event.which) != -1)) { 
     event.preventDefault();
    }
 });
 $(window).bind('mousewheel DOMMouseScroll', function (event) {
    if (event.ctrlKey == true) {
      event.preventDefault();
    }
  });
  document.body.addEventListener("wheel", e=>{
    if(e.ctrlKey)
      event.preventDefault();//prevent zoom
  });

document.addEventListener("contextmenu", function (e) {
               e.preventDefault();
           }, false);
           document.addEventListener("keydown", function (e) {
               //document.onkeydown = function(e) {
               // "I" key
               if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                   disabledEvent(e);
               }
               // "J" key
               if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                   disabledEvent(e);
               }
               // "S" key + macOS
               if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                   disabledEvent(e);
               }
               // "U" key
               if (e.ctrlKey && e.keyCode == 85) {
                   disabledEvent(e);
               }
               // "F12" key
               if (event.keyCode == 123) {
                   disabledEvent(e);
               }
           }, false);
           function disabledEvent(e) {
               if (e.stopPropagation) {
                   e.stopPropagation();
               } else if (window.event) {
                   window.event.cancelBubble = true;
               }
               e.preventDefault();
               return false;
           }

});
}
}

function start(){
  var version = "1.0";
  $( document ).ready(function() {
  zoom();
  console.log("Beep boop beep");
  console.log("Version " + version);
  });
    $( window ).on( "load", function() {
        console.log( "window = windows" );
    });
  disableselect();
}

start();