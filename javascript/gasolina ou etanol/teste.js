function calcularImc(){
	var peso = parseFloat(document.getElementById("peso").value);
	var altura = parseFloat(document.getElementById("altura").value);	
	var imc = peso/(altura * altura);  			
	if (imc < 17) {
    	alert('Muito abaixo do peso');
	} else if (imc > 17 && imc <= 18.49) {
		alert('Abaixo do peso');
	} else if (imc >= 18.5 && imc <= 24.99) {
		alert('Peso normal');
	} else if (imc >= 25 && imc <= 29.99) {
		alert('Acima do peso');
	} else if (imc >= 30 && imc <= 34.99) {
		alert('Obesidade I');
	} else {
		alert('Obesidade II');
	}
}






function qualCombustivelCompensa(){
	var etanol = parseFloat(document.getElementById("etanol").value);
	var gasolina = parseFloat(document.getElementById("gasolina").value);


	if(etanol == ""){
		alert("O campo etanol é obrigatório");
		return false;
	}

	if(gasolina.length == 0){
		alert("O campo gasolina é obrigatório");
		return false;
	}


	var resultado = etanol / gasolina;
	if(resultado <= 0.7){
		alert(resultado + ": Compensa abastecer com etanol");
	}else{
		alert(resultado + ": Compensa abastecer com gasolina");
	}
}


function validarEmail(){	
	var regex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i;
	var email = document.getElementById("email").value;	
	if(regex.test(email)){
		alert("email válido");
		return false;
	}else{
		alert("email inválido");
		return false;
	}
}


function testeCep(){
	var cep = document.getElementById("cep").value;
	cep = cep.replace(/\D/g,"");
	alert(cep);
}