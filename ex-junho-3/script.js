

function buscaCep(){  
    const baseurl = 'https://viacep.com.br/ws/';
    var cepJSON = '85806264';
  
    var cepInput = document.querySelector("#cep");
    if(cepInput.value != '') {
        cepJSON = cepInput.value;
    }
  
  fetch(`${baseurl}/${cepJSON}/json/`)
    .then((response) => response.json())
    .then((data) => {                
        document.querySelector('#cep').value = data.cep;
        document.querySelector('#logradouro').value = data.logradouro;
        document.querySelector('#bairro').value = data.bairro;        
        document.querySelector('#localidade').value = data.localidade;
        document.querySelector('#uf').value = data.uf;
        document.querySelector('#ibge').value = data.ibge;
        document.querySelector('#ddd').value = data.ddd;      
    })
    .catch((error) => console.error('Whoops! Erro:', error.message || error))
  
  }