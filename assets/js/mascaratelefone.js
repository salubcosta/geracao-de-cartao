/* MASCARA */
function mascara(o, f){
	obj = o
	fun = f
	setTimeout("executarMascara()", 1)
}

function executarMascara(){
	obj.value = fun(obj.value)
}

function mascaratelefone(v){
	v = v.replace(/\D/g,""); // Remove dígitos
	v = v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Parênteses nos dois primeiros dígitos
	v = v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre quarto e quinto dígito
	return v;
}

function id(elemento){
	return document.getElementById(elemento);
}

