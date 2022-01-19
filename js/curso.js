const urlSearchParams = new URLSearchParams(window.location.search);
const params = Object.fromEntries(urlSearchParams.entries());



//A função Javascript que faz a requisição dos dados de disciplina

function listaDisciplinas(id_curso, semestre){
    //seleciona a div e limpa o seu conteúdo
    let divDisciplinas = document.querySelector("#disciplinas");
    divDisciplinas.innerHTML = "";
    //requisição AJAX
    fetch("api/dadosdisciplinas.php?id_curso="+id_curso+"&semestre="+semestre)
    .then(response => {
        //pega a resposta como json
        return response.json();
    })
    .then(disciplinas => {
        //exibe no console os dados retornados 
        console.log(disciplinas);

         //percorre o array de disciplinas retornado
        disciplinas.forEach(disciplina => {
            //cria uma linha de tabela
            let tr = document.createElement("tr");
            //cria uma coluna de tabela
            let td = document.createElement("td");
            //cria um nó de texto
            let txn = document.createTextNode(disciplina.nome);
            //adiciona o nó de texto na coluna
            td.appendChild(txn);
            //adiciona a coluna na linha
            tr.appendChild(td);
        
          /////coluna para a ementa////
            //cria uma coluna de tabela
            let tdementa = document.createElement("td");
            //cria um nó de texto
            let txnementa = document.createTextNode(disciplina.ementa);
            //adiciona o nó de texto na coluna
            tdementa.appendChild(txnementa);
            //adiciona a coluna na linha
            tr.appendChild(tdementa);
        /////////////////////////////
            //adiciona a linha à div
            divDisciplinas.appendChild(tr);
            
        });


    })
}


//função que cria um conjunto de links dos semestres para filtrar disciplinas


//função que cria um conjunto de links dos semestres para filtrar disciplinas
function linksSemestres(id_curso, semestres){
    //encontra a div onde será escrita a lista
    let links = document.querySelector("#links");
  //criaçao da aba "Todos"  
    //cria o elemento <ul>
    let ul = document.createElement("ul");
    //cria o elemento <li>
    let li = document.createElement("li");
    //cria o link <a>
    let a = document.createElement("a");
    //acrescenta um atributo class em ul: <ul class="nav nav-tabs>" - são classes do Bootstrap
    ul.setAttribute('class', 'nav nav-tabs')
    //acrescenta um atributo data-bs-toggle em <li>: <li data-bs-toggle="tab"> - para o comportamento de alterar a aba selecionada
    li.setAttribute("data-bs-toggle", "tab")
    //acrescenta um atributo class em <a>: <a class="nav-link active"> - são classes do Bootstrap (active indica que essa aba vem selecionada)
    a.setAttribute("class", "nav-link active");
    //cria um atributo onclick, para invocar a função que busca as disciplinas
    li.setAttribute("onclick", "listaDisciplinas("+id_curso+", 0)")
    //cria um nó de texto, contento a palavra "Todos"
    let txt = document.createTextNode("Todos");
    //acrescenta o nó de texto ao link <a>
    a.appendChild(txt);
    //acrescente o link ao <li>
    li.appendChild(a);
    //acrescenta o <li> ao <ul>
    ul.appendChild(li);
    //Gera os <li> com 1, 2, 3... semestre
    //faz a geração dos elementos e estilos tal qual fizemos para "Todos"
    for (let i = 1; i <= semestres; i++) {
        let li = document.createElement("li");
        let a = document.createElement("a");
        let txt = document.createTextNode(i + "o. Semestre");
        li.setAttribute('class', 'nav-item');
        a.setAttribute("class", "nav-link")
        a.setAttribute("data-bs-toggle", "tab")
        //adiciona o atributo onclick, para invocar a função que busca as disciplinas
        li.setAttribute("onclick", "listaDisciplinas("+id_curso+", "+ i +")");
        a.appendChild(txt); 
        li.appendChild(a);
        ul.appendChild(li);           
    }
    //adiciona a lista <ul> à div selecionada
    links.appendChild(ul);
}

function buscaCurso(idCurso){
    var nomeCurso = document.querySelector("#nomecurso");
    var semCurso = document.querySelector("#semcurso");
    var coordCurso = document.querySelector("#coordcurso");
    fetch('api/dadoscursos.php?id='+idCurso)
        .then(response => {
            return response.json();
        })
        .then(dados => {
            console.log(dados);
            nomeCurso.innerHTML = dados.nome;
            semCurso.innerHTML = "Duração: " + dados.semestres + " semestres";
            coordCurso.innerHTML = "Coordenador: " + dados.coordenador.nome;
            linksSemestres(dados.semestres);

            //invoca a função que cria os links de semestres
            linksSemestres(dados.id, dados.semestres);
            //invoca a função que faz requisição das disciplinas
            //usa o id do curso, e semestre 0 (todos)
            listaDisciplinas(dados.id, 0);

        });
}

window.onload = function(){
    console.log(params);
    buscaCurso(params.id);

  }