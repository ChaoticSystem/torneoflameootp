<?php

/*

HONORES A HANYERCK DIAZ (TE VOY A REPORTAR POR CAREVERGA) 
GG NO JG 
FF AL 15
REPORT TEAM
WIN MIN 50

*/

?>
<!-- atribuciones--





<a href="https://www.flaticon.es/iconos-gratis/vs" title="vs iconos">Vs iconos creados por Good Ware - Flaticon</a>




-->
<!DOCTYPE
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Torneo</title>
<style>
* {
margin: 0;
padding: 0;
outline: 0 none;
}
body {
min-height: 50vh;
height: 100%;
}


/* cyrillic-ext */
@font-face {
font-family: 'Press Start 2P';
font-style: normal;
font-weight: 400;
src: url(fonts/e3t4euO8T-267oIAQAu6jDQyK3nYivN04w.woff2) format('woff2');
unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
font-family: 'Press Start 2P';
font-style: normal;
font-weight: 400;
src: url(fonts/e3t4euO8T-267oIAQAu6jDQyK3nRivN04w.woff2) format('woff2');
unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek */
@font-face {
font-family: 'Press Start 2P';
font-style: normal;
font-weight: 400;
src: url(fonts/e3t4euO8T-267oIAQAu6jDQyK3nWivN04w.woff2) format('woff2');
unicode-range: U+0370-03FF;
}
/* latin-ext */
@font-face {
font-family: 'Press Start 2P';
font-style: normal;
font-weight: 400;
src: url(fonts/e3t4euO8T-267oIAQAu6jDQyK3nbivN04w.woff2) format('woff2');
unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
font-family: 'Press Start 2P';
font-style: normal;
font-weight: 400;
src: url(fonts/e3t4euO8T-267oIAQAu6jDQyK3nVivM.woff2) format('woff2');
unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}


</style>
<link rel="shortcut icon" href="ico.png" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="css/nes-core.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/sa.css">

<style>

div input {

/*  width: 50%;*/
}

.nes-container.with-title > .title {
background-color: transparent;
height: 48px;
line-height: 48px;
padding: 0;
margin: 0 auto 12px;
}

body  {
min-height: 50vh;
height: 100%;
background-image: url("img/fondo.jpg");
background-position: center center;
background-size: auto 110%;
background-repeat: no-repeat;
background-attachment: fixed;
}
body form {
position: relative;
}
body form:before {
content: '';
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ffffff;
opacity:0.8;
}


input {
box-sizing: border-box;
}

.img-align-block img{
height: 100px !important;
width:150px !important;
}

h1{

/*   background-color: #f3ec78;
background-image: linear-gradient(45deg, #f3ec78, #af4261);
background-size: 100%;
-webkit-background-clip: text;
-moz-background-clip: text;
-webkit-text-fill-color: transparent; 
-moz-text-fill-color: transparent;*/
}

[for=nombrereal], [for=nombredeinvocador] {
margin: 0;
height: 42px;
line-height: 42px;
}
#nombrereal, #nombredeinvocador {
/*float: right;*/
padding: 0 26px;
height: 42px;
border: 1px solid rgba(0,0,0, 0);
border-radius: 6px;
box-shadow: 0 0 3px rgba(0,0,0, 0.5);
box-sizing: border-box;
}

#nombrereal.invalid, #nombredeinvocador.invalid {
border-color: darkred;
box-shadow: 0 0 3px red;
}
</style>
</head>

<body><br>




<div  class="item nes-container with-title is-centered">
<h1 >BIENVENIDO INVOCADOR</h1>
<!--<h3 class="title"></h3>--><button type="button" class="nes-btn is-success" onclick="mostrarpremios()">PREMIOS</button>
<!--<h3 class="title"></h3>--><button type="button" class="nes-btn " onclick="mostrarreglas()">REGLAS DEL TORNEO</button>
<!--<h3 class="title"></h3>--><button type="button" class="nes-btn is-error" onclick="buscarrival()">BUSCAR RIVAL</button>


</div>






<form>
<section class="showcase">
<section class="nes-container with-title">
<h1 class="title" id="countdown">Falta para el torneo: </h1>
<h4 class="title" align="center">Formulario de registro para torneo</h4>
<div id="textarea" class="item" align="center">
<div style="width:100%">
<label for="nombrereal">Nombre completo:</label>
<input type="text" name="nombrereal" id="nombrereal" placeholder="Nombre" required>
</div>
<div style="width:100%">
<label for="nombredeinvocador">Nombre de invocador:</label>
<input type="text" name="nombredeinvocador" id="nombredeinvocador" placeholder="Nickname" required>
</div>
<div>
<button type="button" onclick="calcularfuerza()" class="nes-btn is-primary center">Calcula tu poder de pelea</button>
<br>
</div>
<div id="datosdeinvocador"></div>
<button type="button" id="participar" onclick="enviarform()" class="nes-btn is-disabled center" disabled="disabled" ">Participar</button>
</div>
</section>
</section>
</form>
<script>
var music = "silvido.ogg";

function calcularfuerza(){

var nombrereal = $("#nombrereal").val().trim();
var nombredeinvocador = $("#nombredeinvocador").val().trim();


$("#nombrereal").removeClass('invalid');
//.input.is-warning
if(nombrereal == ''){
$("#nombrereal").focus();
$("#nombrereal").addClass('invalid');
return false;
}
$("#nombredeinvocador").removeClass('invalid');
if(nombredeinvocador == ''){
$("#nombredeinvocador").focus();
$("#nombredeinvocador").addClass('invalid');
return false;
}

var data = new URLSearchParams({
nombrereal,
nombredeinvocador,
}).toString();

swal({
title: 'Por vavor espera!',
text: '',
imageUrl: 'img/espere.gif',
/*   onOpen: function() {
var zippi = new Audio(music)
zippi.play();
},*/
imageWidth: 400,
imageHeight: 200,
imageAlt: 'Espere por favor...',
})



$.ajax({
url: 'php/getinfo.php?'+data,
success: function(response, status){
//console.log('response:',response);
var parser = new DOMParser();
var doc = parser.parseFromString(response, "text/html");
//console.log('doc:', doc);

if(doc.querySelector('#pageContent div.txt') == null){
/*alert('El inv no exixte careverga');*/
swal('No existe el invocador').catch(swal.noop)
return;
}

var inv = $(doc).find('#pageContent div.img img').get(0);
var txt = $(doc).find('#pageContent div.txt').get(0).innerText;


var rang = $(doc).find('#pageContent #mainContent div.img-align-block img').get(0);
var desc = $(doc).find('#pageContent div.img-align-block .leagueTier').get(0).innerText;

var temp = txt.split('(LAN)');
var name = temp[0].trim();
var level = temp[1].trim().split(' ')[1].trim();
txt = `<div style="padding-bottom: 4px;"><b>${name}</b> <span style="color: red;">${level}</span></div>`;
var src = $(rang).attr('src');

var imageUrl = 'php/images.php?rango='+desc.trim().split(' ')[0].trim().toLowerCase();

rang = $('<div></div>').css({
'display': 'inline-block',
'width': 60,
'height': 60,
'background-size': '125%',
'background-image': `url('${src}')`,
'background-position': 'center',
}).get(0);

response = txt+''+inv.outerHTML+'<br>'+rang.outerHTML+'<br>'+desc+'<br>';

//console.log(inv.outerHTML)


swal({
title: '<strong>Confirmar<u><br>Nombre de invocador</u></strong>',
icon: 'info',
//imageUrl: 'img/mr_satan.gif',
//  imageUrl: imageUrl,
// imageHeight: 200,
// imageAlt: 'Manos arriba',
html:
'<br>'+response+
'¿Es correcto?',
showCloseButton: true,
showCancelButton: true,
focusConfirm: false,
confirmButtonText:
'<i class="fa fa-thumbs-up"></i> Si, soy yo!',
confirmButtonAriaLabel: 'Confirmar',
cancelButtonText:
'<i class="fa fa-thumbs-down" ></i>',
cancelButtonAriaLabel: 'Equivocado'
}).then(function(json_data) {

var element = document.getElementById("participar");
element.classList.remove("is-disabled");
document.getElementById("participar").disabled = false;
}, function(dismiss) {
if (dismiss === 'cancel' || dismiss === 'close') {
document.getElementById("nombredeinvocador").value="";
} 
})
document.getElementById("datosdeinvocador").innerHTML = response;

},

error: function (xhr, status) {
console.log("mal")

},
complete: function (xhr, status) {
//	alert('status: '+status);
console.log("bien fin del ajax ");
}
});

}

function clear(){
document.getElementById("nombredeinvocador").value="";
}


function enviarform(){

var data = new URLSearchParams({
nombrereal  : $("#nombrereal").val(),
nombredeinvocador: $("#nombredeinvocador").val()

}).toString();

swal({
title: 'Verificando registro, por favor espere!',
text: '',
imageUrl: 'img/espere.gif',
imageWidth: 400,
imageHeight: 200,
imageAlt: 'Espere por favor...',
})


$.ajax({


url: 'php/connect.php?'+data,
success: function(response){
var json = JSON.parse(response);


swal(json.message)


//console.log(JSON.parse(response.result)); 
//	console.log('json:', json);
//fine
//	alert(json.message);
/*
if (json.message ==='se agrego correctamente' ){

alert(json.message);
}

if (json.message ==='El invocador ya se encuentra registrado' ){

alert(json.message+" intente otro ");
}

*/

/*
swal({
title: 'GRACIAS POR REGISTRARTE!',
text: '',
imageUrl: 'img/mr_satan.gif',
imageWidth: 400,
imageHeight: 300,
imageAlt: 'Iniciar torneo',
})
*/


},

error: function (xhr, status) {
//console.log("mal")
},

complete: function (xhr, status) {
//console.log("bien fin del ajax ");
}

});

}


function mostrarreglas(){
swal('Para ganar: \n 1ero en obtener 100 de farm, \n Destruya primera torre').catch(swal.noop)
}

function mostrarpremios(){

swal({
title: 'Primer lugar: \n Codigo 20$. \n Segundo Lugar: \n  Codigo 10$. \n Mejor insulto en el canal: \n  Codigo 5$ + Sorpresa.',
text: '',
imageUrl: 'img/premios.jpg',
imageWidth: 400,
imageHeight: 200,
imageAlt: 'premios',
}).catch(swal.noop)



}


function buscarrival(){




swal({

allowOutsideClick: false,
title: 'Ingrese nombre de invocador',
html:
'<input id="buscarvs" class="swal2-input">',
confirmButtonText: 'Continuar',
showCancelButton: false,
showLoaderOnConfirm: true,
inputAttributes: {
id: "datac",
name: "datac",
autocapitalize: 'off',
maxlength: 40,
min: 1,
required: "required",
},



}).then((result) => {

var datavs = new URLSearchParams({
buscarvs  : $("#buscarvs").val()

}).toString();

console.log("llego aqui")
console.log(datavs)
$.ajax({


url: 'php/vs.php?'+datavs,
success: function(response){

swal(response)

},

error: function (xhr, status) {

},

complete: function (xhr, status) {

}

});		

})	


}


</script>
<script src="js/jquery.js"></script>
<script src="js/sa.js"></script>

<div id="loading" style="z-index:99999999;position: fixed;top:0;left:0;right:0;bottom:0;background-color:black;"></div>
<script>
$(document).ready(function(){
var divLoading = $('#loading')
divLoading.animate({opacity: 0}, 1000, function(){
divLoading.remove();
});


});

/*para mostrar lo que falta para el evento , formato mes , dia a*/
var end = new Date('02/25/2022 9:30 AM');

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;

function showRemaining() {
var now = new Date();
var distance = end - now;
if (distance < 0) {

clearInterval(timer);
document.getElementById('countdown').innerHTML = 'Culminado, nos vemos pronto!';
return;
}
var days = Math.floor(distance / _day);
var hours = Math.floor((distance % _day) / _hour);
var minutes = Math.floor((distance % _hour) / _minute);
var seconds = Math.floor((distance % _minute) / _second);

document.getElementById('countdown').innerHTML = ' Faltan: ';
document.getElementById('countdown').innerHTML += days + ' dias, ';
document.getElementById('countdown').innerHTML += hours + ' horas, ';
document.getElementById('countdown').innerHTML += minutes + ' minutos y ';
document.getElementById('countdown').innerHTML += seconds + ' segundos';

}

timer = setInterval(showRemaining, 0);





</script>



</body>
</html>
