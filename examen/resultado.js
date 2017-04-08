function Resultado(adultos,ninos){
var total;
total = parseInt(adultos.value)+parseInt(ninos.value);
alert("El valor es " + total);
document.getElementById("total").innerHTML="El monto a pagar es: "+total;;
}
