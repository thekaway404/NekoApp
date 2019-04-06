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

function login_register(){
  var ativo = 1;
	$("#logar").click(function(){
		var href = $(this).data("href");
		const stateObj = { foo: "bar" };
		history.pushState(stateObj, "NekoApp", href);
		$("#registro").css("left", "200%");
		$("#login").css("left", "0%");
	});
	$("#cadastrar").click(function(){
		var href = $(this).data("href");
		const stateObj = { foo: "bar" };
		history.pushState(stateObj, "NekoApp", href);
		$("#registro").css("left", "0%");
		$("#login").css("left", "-200%");
	});

	$(".return_true").click(function(){
		return true;
	});

	$(".return_false").click(function(){
		return false;
	})

	$("#cadastrarr").click(function(){
    if(ativo == 1){
    anima_cadastrar();
    ativo = 0;
    }
		 var emailr = $("#email-r").val();
         var senhar = $("#senha-r").val();
         var nomer = $("#nome-r").val();
         var sobrenomer = $("#sobrenome-r").val();
		  $.post("/register", {email: emailr, senha: senhar, nome: nomer, sobrenome: sobrenomer},
         function(data){
            if(data == '01'){
            	 var error = "Preencha os campos";
               $(".error .after").after("<div class='box'><p>" + error + "</p></div>");
               $(".error .after").show();
               setTimeout(  function(){
               $(".error .box").css("transform", "scale(0)");
               voltar_registro();
               $(".loading").hide();
               ativo = 1;
               }, 2500);
            }
            else if(data == 'verificar'){
            	var error = "Verifique seu e-mail";
               $(".error .after").after("<div class='box'><p>" + error + "</p></div>");
               $(".error .after").show();
               $("#registro").css("left", "-200%");
               $("#login").css("left", "-200%");
               $("#verificar").css("left", "0%");
               $("#cadastrarr").css("width", "100%");
               $("#logarr").css("width", "100%");
               setTimeout(  function(){
               $(".error .box").css("transform", "scale(0)");
               voltar_registro();
               $(".loading").hide();
               ativo = 1;
               }, 2500);
            }
            else if(data == '02'){
               var error = "Este e-mail já existe";
               $(".error .after").after("<div class='box'><p>" + error + "</p></div>");
               $(".error .after").show();
               setTimeout(  function(){
             	$(".error .box").css("transform", "scale(0)");
              voltar_registro();
              $(".loading").hide();
              ativo = 1;
               }, 2500);
            }
            else{
               setTimeout(  function(){
               $("#alertar-danger").html("Ocorreu um erro");
               $("#alertar-danger").show();
               $("#alertar-sucess").hide();
               }, 500);
            }
         }
          , "html");
         return false;
	});

var clicavel = 1;

$(".nani").hide();

function anima_cadastrar(){
  $(".loading").show();
  $("#logar").css("display", "none");
  var top = "0";
  var vezes = 0;
  var clicavel = 1;
  setInterval(function(){
  if(clicavel == 1){
  if(vezes < 5){
  if(top == "0"){
    top = "40";
    var toper = top + "px";
  }
  else if(top == "40"){
    top = "-20";
    var toper = top + "px";
  }
  else if(top == "-20"){
    top = "-50";
    var toper = top + "px";
  }
  else if(top == "-50"){
    top = "50";
    var toper = top + "px";
  }
  else if(top == "50"){
    top = "-310";
    vezes += 1;
    var toper = top + "px";
    clicavel = 0;
    $(".nani").show();
    $("#cadastrarr").css("background", "#2f353e");
    $("#cadastrarr").html("<div class='nani'></div>");
    $("#cadastrarr").css("background-size", "cover");
    $("#cadastrarr").css("border", "2px solid transparent");
    $("#cadastrarr").css("width", "120px");
    $("#cadastrarr").css("height", "120px");
    $("#cadastrarr").css("border-radius", "40%");
    $("#cadastrarr").css("z-index", "500");
    $("#cadastrarr").css("transform", "scale(8)");
  }
  }
  $("#cadastrarr").css("transition", "0.4s");
  $("#cadastrarr").css("width", "50%");
  $("#cadastrarr").css("left", "80px");
  $("#cadastrarr").css("top", toper);
}
}, 100);
}

function anima_login(){
  $(".loading").show();
  $("#cadastrar").css("display", "none");
  var top = "0";
  var vezes = 0;
  var clicavel = 1;
  setInterval(function(){
  if(clicavel == 1){
  if(vezes < 5){
  if(top == "0"){
    top = "40";
    var toper = top + "px";
  }
  else if(top == "40"){
    top = "-20";
    var toper = top + "px";
  }
  else if(top == "-20"){
    top = "-50";
    var toper = top + "px";
  }
  else if(top == "-50"){
    top = "50";
    var toper = top + "px";
  }
  else if(top == "50"){
    top = "-310";
    vezes += 1;
    var toper = top + "px";
    clicavel = 0;
    $(".nani").show();
    $("#logarr").css("background", "#2f353e");
    $("#logarr").css("background-size", "cover");
    $("#logarr").html("<div class='nani'></div>");
    $("#logarr").css("border", "2px solid transparent");
    $("#logarr").css("width", "120px");
    $("#logarr").css("height", "120px");
    $("#logarr").css("border-radius", "40%");
    $("#logarr").css("z-index", "500");
    $("#logarr").css("transform", "scale(8)");
  }
  }
  $("#logarr").css("transition", "0.4s");
  $("#logarr").css("width", "50%");
  $("#logarr").css("left", "80px");
  $("#logarr").css("top", toper);
}
}, 100);
}

function voltar_registro(){
  var clicavel = 1;
  $(".nani").hide();
  $("#logar").css("display", "inline-block");
  $("#logar").css("width", "35%");
  $("#cadastrarr").css("background", "rgba(0,0,0,.1)");
  $("#cadastrarr").html("Cadastrar");
  $("#cadastrarr").css("border", "1px solid rgba(0,0,0,.4)");
  $("#cadastrarr").css("width", "width: 45%;");
  $("#cadastrarr").css("height", "auto");
  $("#cadastrarr").css("border-radius", "3px");
  $("#cadastrarr").css("z-index", "500");
  $("#cadastrarr").css("transform", "scale(1)");
  $("#cadastrarr").css("top", "0px");
  $("#cadastrarr").css("left", "10px");
}

function voltar_login(){
  var clicavel = 1;
  $(".nani").hide();
  $("#cadastrar").css("display", "inline-block");
  $("#cadastrar").css("width", "40%");
  $("#logarr").css("background", "rgba(0,0,0,.1)");
  $("#logarr").html("Login");
  $("#logarr").css("border", "1px solid rgba(0,0,0,.4)");
  $("#logarr").css("width", "width: 30%;");
  $("#logarr").css("height", "auto");
  $("#logarr").css("border-radius", "3px");
  $("#logarr").css("z-index", "500");
  $("#logarr").css("transform", "scale(1)");
  $("#logarr").css("top", "0px");
  $("#logarr").css("left", "10px");
}

function loading(){
  $(".loading").hide();
  var display1 = "1";
  var display2 = "0";
  var display3 = "0";
  setInterval(function(){
  if(display1 == "0"){
    display1 = "1";
    display2 = "0";
    display3 = "0";
  }
  else if(display1 == "1"){
    display1 = "2";
    display2 = "1";
    display3 = "0";
  }
  else if(display2 == "1"){
    display1 = "2";
    display2 = "2";
    display3 = "1";
  }
  else if(display3 == "1"){
    display1 = "0";
    display2 = "2";
    display3 = "2";
  }
  $(".loading .step1").css("opacity", display1);
  $(".loading .step2").css("opacity", display2);
  $(".loading .step3").css("opacity", display3);
}, 400);

}

loading();

	 $('#verificarr').click(function() {
          $(".loading").show();
         var tokenD = $("#token").val();


          $.post("/verificandotoken", {token: tokenD},
         function(dataa){
            if(dataa == 'sucess'){
               var error = "Aguarde um momento";
               $(".error .after").after("<div class='box'><p>" + error + "</p></div>");
               $(".error .after").show();
               const stateObj = { foo: "bar" };
               history.pushState(stateObj, "NekoApp", "/dashboard");
               setTimeout( function(){
                  location.reload();
                }, 2000);
            }
            else if(dataa == 'invalid'){
            	var error = "Código invalido";
               $(".error .after").after("<div class='box'><p>" + error + "</p></div>");
               $(".error .after").show();
               setTimeout(  function(){
               $(".error .box").css("transform", "scale(0)");
               $(".loading").hide();
               }, 2500);
            }
            else{
               var error = "Ocorreu um erro";
               $(".error .after").after("<div class='box'><p>" + error + "</p></div>");
               $(".error .after").show();
              setTimeout(  function(){
               $(".error .box").css("transform", "scale(0)");
               }, 2500);
            }
         }
          , "html");
         return false;

     });

$('#logarr').click(function() {
 
         var emaill = $("#email-l").val();
         var senhal = $("#senha-l").val();
          if(ativo == 1){
          anima_login();
          ativo = 0;
          }
          $.post("/login", {email: emaill, senha: senhal},
         function(data){
            if(data == '01'){
               var error = "Preencha os campos";
               $(".error .after").after("<div class='box'><p>" + error + "</p></div>");
               $(".error .after").show();
               setTimeout(  function(){
               $(".error .box").css("transform", "scale(0)");
               voltar_login();
               $(".loading").hide();
               ativo = 1;
               }, 2500);
            }
            else if(data == 'verificar'){
               var error = "Verifique seu e-mail";
               $(".error .after").after("<div class='box'><p>" + error + "</p></div>");
               $(".error .after").show();
               $("#login").css("left", "-200%");
               $("#verificar").css("left", "0%");
               setTimeout(  function(){
               $(".error .box").css("transform", "scale(0)");
               voltar_login();
               $(".loading").hide();
               ativo = 1;
               }, 2500);
            }
            else if(data == 'invalid'){
               var error = "E-mail ou senha incorretos";
               $(".error .after").after("<div class='box'><p>" + error + "</p></div>");
               $(".error .after").show();
               setTimeout(  function(){
               $(".error .box").css("transform", "scale(0)");
               voltar_login();
               $(".loading").hide();
               ativo = 1;
               }, 2500);
            }
            else if(data == 'sucess'){
               var error = "Aguarde um momento";
               $(".error .after").after("<div class='box'><p>" + error + "</p></div>");
               $(".error .after").show();
               setTimeout(  function(){
               $(".error .box").css("transform", "scale(0)");
               }, 2500);
               const stateObj = { foo: "bar" };
               history.pushState(stateObj, "NekoApp", "/dashboard");
               setTimeout( function(){
                  location.reload();
                }, 2000);
            }
            else{
               setTimeout(  function(){
               $("#logando").html("Login");
               $("#alertar-danger").html("Ocorreu um erro");
               $("#alertar-danger").show();
               $("#alertar-sucess").hide();
               }, 2500);
            }
         }
          , "html");
         return false;

     });

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
	login_register();
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