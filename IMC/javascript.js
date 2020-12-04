function imc(){
	calc = document.getElementById("calc");
	kg = document.getElementById("kg");
	m = document.getElementById("m");
	imc = document.getElementById("imc");
	resp = document.getElementById("resp");

			if(kg.value!="" && m.value!=""){
			imcx = (kg.value / (m.value* m.value));

			imcx = imcx*100;
			imcx=Math.round(imcx);
			imcx=imcx/100;

			imc.innerHTML = imcx

			console.log(imcx);



			if(imcx<18.5){ 
				resp.innerHTML = "Usted tiene infrapeso.";
				document.getElementById("img").style.backgroundImage = "url('img/infrapeso.png')"; 
			}
			else if(imcx>=18.5 && imcx<=24.9){ 
				resp.innerHTML = "Usted tiene su peso normal."; 
				document.getElementById("img").style.backgroundImage = "url('img/normal.png')"; 
			}
			else if(imcx>=25 && imcx<=29.9){ 
				resp.innerHTML = "Usted tiene sobrepeso."; 
			}
			else if(imcx>=30 && imcx<=34.9){ 
				resp.innerHTML = "Usted tiene obesidad."; 
			}
			else if(imcx>=35){
				resp.innerHTML = "Usted tiene obesidad mórbida."
			}

		}else{
			alert("Favor de ingresar su peso y su altura.")
		}
}
	

