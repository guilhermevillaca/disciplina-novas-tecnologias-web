
function validar(){  
  var nome = document.getElementById("nome");
  if(nome.value == '') {
    alert('nome é obrigatório');
  }
  return false;
}


function buscaCep(){  
  const baseurl = 'https://viacep.com.br/ws/';
  var cepJSON = '85806264';

  var cepInput = document.getElementById("cepInput");
  if(cepInput.value != '') {
      cepJSON = cepInput.value;
  }

fetch(`${baseurl}/${cepJSON}/json/`)
  .then((response) => response.json())
  .then((data) => {        
    document.getElementById('bairro').innerHTML = data.bairro;
    document.getElementById('cep').innerHTML = data.cep;
    document.getElementById('ddd').innerHTML = data.ddd;
    document.getElementById('localidade').innerHTML = data.localidade;
    document.getElementById('uf').innerHTML = data.uf;
    document.getElementById('logradouro').innerHTML = data.logradouro;

    document.getElementById("dadosCEP").style.display = "block";
  })
  .catch((error) => console.error('Whoops! Erro:', error.message || error))

}
