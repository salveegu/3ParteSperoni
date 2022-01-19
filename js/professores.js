//estas duas linhas fazem com que recuperemos os parâmetros enviados na queryString
const urlSearchParams = new URLSearchParams(window.location.search);
const params = Object.fromEntries(urlSearchParams.entries()); //params será um objeto javascript, contendo todos os parâmetros enviados na quueryString

//a função que recebe um id, faz a requisição ao endpoint PHP, recebe o JSON e exibe os dados na página
function buscaProfessor(idProfessor){
    var nomeprofessor = document.querySelector("#nomeprofessor");
    var descrprofessor = document.querySelector("#descrprofessor");
    fetch('api/dadosprofessores.php?id='+idProfessor)
        .then(response => {
            return response.json();
        })
        .then(dados => {
            console.log(dados); //apenas para controle
            nomeprofessor.innerHTML = dados.nome; //insere conteúdo no elemento
            descrprofessor.innerHTML = "Para contactar o professor, envie e-mail para "+dados.email; //insere conteúdo no elemento
        });
}

//execução principal - ao carregar a página
window.onload = function(){
    console.log(params); //exibe os parâmetros no console (apenas para entendimento)
    buscaProfessor(params.id); //invoca a função, com o id do professor que veio na queryString
  }
