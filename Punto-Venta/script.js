
	var i=0;
	var subtotal = 0;
	var iva = 0;
	var total = 0;
	var acumulacion = 0;
	var fililla=0;

function agregar(){
	//var tabla = document.getElementById("tablita");

	i++;
	fililla++;
	

	let vproductos = document.getElementById("productos").value;
	let precio = document.getElementById("precio").value;
	let unidades = document.getElementById("unidades").value;
	let monto = precio*unidades;

	subtotal = subtotal+monto;
	iva = monto*0.16;
	acumulacion = acumulacion+iva;
	total = subtotal+acumulacion;

	subtotal.toFixed(2);
	acumulacion.toFixed(2);
	total.toFixed(2);


	let btn_eliminar = document.createElement("button");
	btn_eliminar.innerText="eliminar";
	btn_eliminar.setAttribute("onclick","eliminar()");

	console.log(vproductos);

	var fila="<tr><td>"+i+"</td><td>"+vproductos+"</td><td>"+precio+"</td><td>"+unidades+"</td><td>"+monto+"</td></tr>";

	
	
	var btn = document.createElement("TR");
	btn.innerHTML = fila;
	btn.setAttribute("id",fililla);

	document.getElementById("cuerpo").appendChild(btn);
	document.getElementById("subtotal").innerHTML=subtotal;
	document.getElementById("iva").innerHTML=acumulacion;
	document.getElementById("total").innerHTML=total;
	document.getElementById(fililla).appendChild(btn_eliminar);
	
	//body.#

	
	limpiar();


	//document.getElementById("tablita").insertRow(i).innerHTML = "<td>"+i+"</td><td>"+vproductos+"</td><td>"+precio+"</td><td>"+unidades+"</td><td>"+monto+"</td>";
	
}

/*function incrementar(){
	i++;
	return false;
}*/


function limpiar(){

	precio.value="";
	unidades.value="";
}

function eliminar(){
	var j=0;

  	var table = document.getElementById("cuerpo");
  	var rowCount = table.rows.length;
  	console.log(rowCount);
  	

  	for(j=0;j<rowCount;j++){
		
	}

  /*if(rowCount <= 1)
    alert('No se puede eliminar el encabezado');
  else*/
    table.deleteRow(rowCount -1);
}
