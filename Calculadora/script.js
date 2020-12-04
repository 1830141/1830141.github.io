var n1;
var n2;
var op;

function variables(){

  var resultado = document.getElementById('resultado');
  var C = document.getElementById('C');
  var suma = document.getElementById('suma');
  var resta = document.getElementById('resta');
  var multiplicacion = document.getElementById('multiplicacion');
  var division = document.getElementById('division');
  var igual = document.getElementById('igual');
  var uno = document.getElementById('uno');
  var dos = document.getElementById('dos');
  var tres = document.getElementById('tres');
  var cuatro = document.getElementById('cuatro');
  var cinco = document.getElementById('cinco');
  var seis = document.getElementById('seis');
  var siete = document.getElementById('siete');
  var ocho = document.getElementById('ocho');
  var nueve = document.getElementById('nueve');
  var cero = document.getElementById('cero');
}


uno.onclick = function(e){
    resultado.textContent = resultado.textContent  + "1";
  }

dos.onclick = function(e){
    resultado.textContent = resultado.textContent  + "2";
  }

tres.onclick = function(e){
    resultado.textContent = resultado.textContent  + "3";
  }

cuatro.onclick = function(e){
    resultado.textContent = resultado.textContent  + "4";
  }

cinco.onclick = function(e){
    resultado.textContent = resultado.textContent  + "5";
  }

seis.onclick = function(e){
    resultado.textContent = resultado.textContent  + "6";
  }

siete.onclick = function(e){
    resultado.textContent = resultado.textContent  + "7";
  }

ocho.onclick = function(e){
    resultado.textContent = resultado.textContent  + "8";
  }

nueve.onclick = function(e){
    resultado.textContent = resultado.textContent  + "9";
  }

cero.onclick = function(e){
    resultado.textContent = resultado.textContent  + "0";
  }

C.onclick = function(e){
    reinicio();
  }

suma.onclick = function(e){
    n1 = resultado.textContent;
    op = "+";
    limpiar();
  }

resta.onclick = function(e){
    n1 = resultado.textContent;
    op = "-";
    limpiar();
  }

multiplicacion.onclick = function(e){
    n1 = resultado.textContent;
    op = "*";
    limpiar();
  }

division.onclick = function(e){
    n1 = resultado.textContent;
    op = "/";
    limpiar();
  }

igual.onclick = function(e){
    n2 = resultado.textContent;
    resolver();
  }

function limpiar(){
  resultado.textContent = "";
}

function reinicio(){
  resultado.textContent = "";
  n1 = 0;
  n2 = 0;
  op = "";
}

function resolver(){

  var res = 0;

  switch(op){
    case "+":
      res = parseFloat(n1) + parseFloat(n2);
    break;

    case "-":
        res = parseFloat(n1) - parseFloat(n2);
    break;

    case "*":
      res = parseFloat(n1) * parseFloat(n2);
    break;

    case "/":
      res = parseFloat(n1) / parseFloat(n2);
    break;

  }

  reinicio();
  resultado.textContent = res;
  
}