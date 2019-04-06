$(".left .busca_div").hide();

$(".left .buscar").keyup(function(){
	let nome = $(".buscar").val();
	let found = "found user " + nome;
	$(".left .busca_div").show();
	if(nome == ""){
		$(".left .busca_div").html("");
		$.post("/api/search_recent", {nome: nome},
        function(data){
        	if(data === '404'){
        		$(".left .busca_div").html("<p style='color: #000;position: relative; top: 5px; text-align: center;'>Nenhuma busca recente</p>");
        	}
        	else{
        	$(".left .busca_div").html(data);
        	}
        	return false;
       }
          , "html");
	}
	else{
		$.post("/api/search_user", {nome: nome},
        function(data){
        	if(data === '404'){
        		$(".left .busca_div").html("<p style='color: #000;position: relative; top: 5px; text-align: center;'>Nenhuma busca encontrada</p>");
        	}
        	else{
        	$(".left .busca_div").html(data);
        	}
        	return false;
       }
          , "html");
	}
});

$("body").click(function(){
	$(".left .busca_div").hide();
});