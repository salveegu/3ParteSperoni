<?php
$professores = array(
    array("id" => 1, "nome" => "André Moraes", "email" =>"andreMoraes@gmail.com", "tel" => "1111-1111"),
    array("id" => 2, "nome" => "Ângelo Frozza", "email" =>"angeloFrozza@gmail.com", "tel" => "2222-2222"),
    array("id" => 3, "nome" => "Daniel Anderle","email" =>"danielAnderle@gmail.com", "tel" => "3333-3333"),
    array("id" => 4, "nome" => "Daniel Varela", "email" =>"danielVarela@gmail.com", "tel" => "4444-4444"),
    array("id" => 5, "nome" => "Rafael Speroni", "email" =>"rafaelSperoni@gmail.com", "tel" => "5555-5555"),
    array("id" => 6, "nome" => "Lidiane Visintin", "email" =>"lidianeVisintin@gmail.com", "tel" => "6666-6666")
);

$cursos = array(
    array(
        "id" => 1,
        "nome" => "Tecnologia em Sistemas para Internet",
        "semestres" => 6,
        "coordenador" => 5
    ),
    array(
        "id" => 2,
        "nome" => "Bacharelado em Sistemas de Informação",
        "semestres" => 8,
        "coordenador" => 3
    ),
    array(
        "id" => 3,
        "nome" => "Técnico em Informática Integrado",
        "semestres" => 6,
        "coordenador" => 2
    ),
    array(
        "id" => 4,
        "nome" => "Bacharelado em Agronomia",
        "semestres" => 8,
        "coordenador" => 6
    ),
    
    array(
        "id" => 5,
        "nome" => "Desenvolvimento de Jogos",
        "semestres" => 8,
        "coordenador" => 6
    ),

    array(

        "id" =>6,
        "nome"=> "Segurança da informação",
        "semestres" =>5,
        "coordenador" =>1
    )
);

$disciplinas = array(
    array(
        "id" => 1,
        "codigo" => "STB0301",
        "nome" => "Matemática Elementar",
        "carga" => 60,
        "ementa" => "Conjuntos Numéricos:  Conjunto dos números Naturais; Conjunto dos números Inteiros; Conjunto dos números Racionais: Frações e operações com frações.",
        "semestre" => 1,
        "id_curso" => 1
    ),
    array(
        "id" => 2,
        "codigo" => "STB0302",
        "nome" => "Inglês Instrumental",
        "carga" => 60,
        "ementa" => "Conscientização do processo de leitura. Estratégias de leitura. Gramática aplicada da língua inglesa. Reconhecimento de gêneros textuais e aquisição de vocabulário. Análise textual de um gênero. Leitura intensiva de diversos gêneros textuais da área de Informática. Redação acadêmica.",
        "semestre" => 1,
        "id_curso" => 1
    ),
    array(
        "id" => 3,
        "codigo" => "STB0303",
        "nome" => "Introdução à Computação",
        "carga" => 30,
        "ementa" => "Evolução da computação (tecnologias e usos). Modelos funcionais dos computadores. Sistemas de códigos e codecs. Sistemas operacionais. Linguagens de programação. Sistemas de rede e Internet. Open Source/Free Software. O estado da arte. TI x Sustentabilidade.",
        "semestre" => 1,
        "id_curso" => 1
    ),
    array(
        "id" => 4,
        "codigo" => "STB0304",
        "nome" => "Introdução à Programação Web",
        "carga" => 60,
        "ementa" => "Infraestrutura do Ambiente Web; Páginas Estáticas e Páginas Dinâmicas; Introdução a Linguagem de Marcação HTML e suas evoluções; Folhas de Estilos (CSS); Introdução a Programação Client-Side (JavaScript); Princípios para Web Design Responsivo.",
        "semestre" => 1,
        "id_curso" => 1
    ),
    array(
        "id" => 5,
        "codigo" => "STB0305",
        "nome" => "Algoritmos e Técnicas de Programação",
        "carga" => 90,
        "ementa" => "Introdução à lógica de programação. Conceitos básicos sobre  algoritmos.  Algoritmos  Estruturados: conceitos, estruturas de controle (seqüência, seleção e repetição)entrada  e  saída,  atribuição; Operadores Básicos (Aritméticos, Relacionais e Lógicos);  Resolução  de problemas usando algoritmos; Verificação e correção de algoritmos através de testes de mesa; Implementações de algoritmos  em  uma  linguagem  de  programação.Procedimentos  e  Funções.",
        "semestre" => 1,
        "id_curso" => 1            
    ),

    array(
        "id" => 6,
        "codigo" => "STB0306",
        "nome" => "Estrutura de Dados",
        "carga" => 60,
        "ementa" => "Conjuntos Numéricos:  Conjunto dos números Naturais; Conjunto dos números Inteiros; Conjunto dos números Racionais: Frações e operações com frações.",
        "semestre" => 2,
        "id_curso" => 1
    ),
    array(
        "id" => 7,
        "codigo" => "STB0307",
        "nome" => "Banco de Dados I",
        "carga" => 60,
        "ementa" => "Conscientização do processo de leitura. Estratégias de leitura. Gramática aplicada da língua inglesa. Reconhecimento de gêneros textuais e aquisição de vocabulário. Análise textual de um gênero. Leitura intensiva de diversos gêneros textuais da área de Informática. Redação acadêmica.",
        "semestre" => 2,
        "id_curso" => 1
    ),
    array(
        "id" => 8,
        "codigo" => "STB0308",
        "nome" => "Sistemas Operacionais",
        "carga" => 60,
        "ementa" => "Evolução da computação (tecnologias e usos). Modelos funcionais dos computadores. Sistemas de códigos e codecs. Sistemas operacionais. Linguagens de programação. Sistemas de rede e Internet. Open Source/Free Software. O estado da arte. TI x Sustentabilidade.",
        "semestre" => 2,
        "id_curso" => 1
    ),
    array(
        "id" => 9,
        "codigo" => "STB0309",
        "nome" => "Engenharia de Software I",
        "carga" => 60,
        "ementa" => "Infraestrutura do Ambiente Web; Páginas Estáticas e Páginas Dinâmicas; Introdução a Linguagem de Marcação HTML e suas evoluções; Folhas de Estilos (CSS); Introdução a Programação Client-Side (JavaScript); Princípios para Web Design Responsivo.",
        "semestre" => 2,
        "id_curso" => 1
    ),
    array(
        "id" => 10,
        "codigo" => "STB0305",
        "nome" => "Programação Web",
        "carga" => 60,
        "ementa" => "Introdução à lógica de programação. Conceitos básicos sobre  algoritmos.  Algoritmos  Estruturados: conceitos, estruturas de controle (seqüência, seleção e repetição)entrada  e  saída,  atribuição; Operadores Básicos (Aritméticos, Relacionais e Lógicos);  Resolução  de problemas usando algoritmos; Verificação e correção de algoritmos através de testes de mesa; Implementações de algoritmos  em  uma  linguagem  de  programação.Procedimentos  e  Funções.",
        "semestre" => 2,
        "id_curso" => 1            
    ),
    array(
        "id" => 11,
        "codigo" => "SIB0312",
        "nome" => "Desenvolvimento Web I",
        "carga" => "60",
        "ementa" => "Introdução à lógica de programação. Conceitos básicos sobre  algoritmos.  Algoritmos  Estruturados: conceitos, estruturas de controle (seqüência, seleção e repetição)entrada  e  saída,  atribuição; Operadores Básicos (Aritméticos, Relacionais e Lógicos);  Resolução  de problemas usando algoritmos; Verificação e correção de algoritmos através de testes de mesa; Implementações de algoritmos  em  uma  linguagem  de  programação.Procedimentos  e  Funções.",
        "semestre" => 5,
        "id_curso" => 2            
    ),
    array(
        "id" => 11,
        "codigo" => "SIB0313",
        "nome" => "Desenvolvimento Web II",
        "carga" => "60",
        "ementa" => "Introdução à lógica de programação. Conceitos básicos sobre  algoritmos.  Algoritmos  Estruturados: conceitos, estruturas de controle (seqüência, seleção e repetição)entrada  e  saída,  atribuição; Operadores Básicos (Aritméticos, Relacionais e Lógicos);  Resolução  de problemas usando algoritmos; Verificação e correção de algoritmos através de testes de mesa; Implementações de algoritmos  em  uma  linguagem  de  programação.Procedimentos  e  Funções.",
        "semestre" => 6,
        "id_curso" => 2            

    )    
);

// GetDsciplinas--------------------------------
//função recebe o id do curso e o semestre

//caso seja passado o semestre 0, mostrar disciplinas de todos os semestres

function getDisciplinas($id_curso, $semestre){
    global $disciplinas;
    //cria um array para as disciplinas selecionadas
    $discSelecionadas = array();
    foreach($disciplinas as $disciplina){
        //testa se é disciplina do curso
        if ($disciplina['id_curso'] == $id_curso){
            //se for o semestre informado, ou se informar zero
            if (($disciplina['semestre'] == $semestre) ||
                ($semestre == 0)){
                    //adiciona esta disciplina ao array das selecionadas
                    array_push($discSelecionadas, $disciplina);
                }
        }
    }
    //retorna o array criado, contendo as selecionadas
    return $discSelecionadas;
}



// GetDsciplinas--------------------------------

                       //--------/




// GET CURSOS -------------------------------------------


function getCursos(){
    global $cursos; //a funcao passa a "conhecer" a variavel definida fora
    //percorre cada posição do array
    for($i=0; $i<sizeof($cursos); $i++){
        //busca o professor correspondente, recebe o Array
        $coordenador = getProfessor($cursos[$i]['coordenador']);
        //substitui o valor da posição coordenador pelo Array
        $cursos[$i]['coordenador'] = $coordenador;
    }    
    return $cursos;
}
//GET CURSOS ------------------------------------------------

                     //------//


//recebe um id, e retorna um Array com os dados do professor correspondente
function getCurso($id){
    //usa a variável $professores (que é global)
    global $cursos;
    //percorre o array
    foreach($cursos as $curso){
        //testa se o valor contido na posição id é o mesmo passado por parâmetro
        if($curso['id'] == $id){
            //se for, retorna o Array $professor (que contem id e nome do professor)
            return $curso;
        }
    }

}

// GET CURSOS POR ID------------------------------------------

function getCursoPorId($id_curso){
    global $cursos;

    $cursoRetorno = array();

    foreach($cursos as $curso){ //para cada 
        if($curso['id'] == $id_curso){
            $curso['coordenador'] = getProfessor($curso['coordenador']);
            $cursoRetorno = $curso;
        
        
        }
    }
        
    
    //retorna o array de curso 
    return $cursoRetorno;
}

//GET CURSOS POR ID------------------------------------------

       //--------//

//recebe um id, e retorna um Array com os dados do professor correspondente
function getProfessor($id){
    //usa a variável $professores (que é global)
    global $professores;
    //percorre o array
    foreach($professores as $professor){
        //testa se o valor contido na posição id é o mesmo passado por parâmetro
        if($professor['id'] == $id){
            //se for, retorna o Array $professor (que contem id e nome do professor)
            return $professor;
        }
    }
}




