var search_top = "-35px";
$(".search").css("top", search_top);
var tabs = 1;
var grupos = 0;

$(".tabs .icon").click(function(){
	var href = $(this).data("id");
	if(href == "search"){
		if(search_top == "-35px"){
			search_top = "0px";
			icon_index_search = "5";
		}
		else{
			search_top = "-35px";
			icon_index_search = "0";
		}
		$(".search").css("top", search_top);
	}
})

$(".tabs").mouseover(function(){
	tabs = 1;
});

$(".tabs").mouseout(function(){
	tabs = 0;
});

$(".sugered").mouseover(function(){
	grupos = 1;
});

$(".sugered").mouseout(function(){
	grupos = 0;
});

$(function() {

   $(".sugered").mousewheel(function(event, delta) {
   	if(grupos == 1){
      this.scrollLeft -= (delta * 30);
      event.preventDefault();
   }
   });

});


$(function() {

   $(".tabs").mousewheel(function(event, delta) {
   	if(tabs == 1){
   	if(grupos == 0){
      this.scrollTop -= (delta * 30);
      event.preventDefault();
   }
}
   });

});

$(function() {

   $(".scroll").mousewheel(function(event, delta) {
   	if(tabs == 0){
   if(grupos == 0){
      this.scrollLeft -= (delta * 30);
    
      event.preventDefault();
     }
 }
   });

});
