function tablaMultiplicar(){

    let num = document.getElementById("numero").value;
    let cant = document.getElementById("cantidad").value;
    let resultado = document.getElementById("res");
    let tabla = document.createElement("table");
    
   resultado.appendChild(tabla);

   resultado.style.cssText = 'padding-left:42%';
    
    for(let i = 0; i < cant; i++){
        let fila = document.createElement("tr");
        let columna1 = document.createElement("th");
        let columna2 = document.createElement("th");
        columna1.innerText = i+1;
        columna2.innerText = num * (i+1);
        tabla.appendChild(fila);
        tabla.appendChild(columna1);
        tabla.appendChild(columna2);
    }
    
}