
opcion(prompt("Favor de seleccionar una opción: 1. Factorial, 2. Potencia"));



function opcion(op){

	if(op==1){

		document.write("Factorial resultante: "+factorial(prompt("Favor de ingresar el número: ")));

	}else if(op==2){

		document.write("Potencia resultante: "+potencia(prompt("Favor de ingresar el número:"), prompt("Favor de ingresar el exponente: ")));
		
	}else{
		document.write("El número que ingresó es erróneo, favor de recargar la página para volver a intentarlo.")
	}
	
}

function factorial(num){

	if(num===0){
		return 1;
	} else{
		num = num*factorial(num-1);
	}

	return num;
}

function potencia(num, expo){

	let resultado = Math.pow(num, expo);

	return resultado;
}
