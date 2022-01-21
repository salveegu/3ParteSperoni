<?php
$conexao = new PDO('sqlite:../db/curso.db'); //arquivo .db está na pasta um nível acima, por isso o ../
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function getCursos(){
        global $conexao; //é uma variavel de fora da função
        
        //usando a conexao, fazer uma consulta SQL
        $resultado = $conexao->query('select id, nome, semestres, id_coordenador as coordenador from curso order by nome');

        //transformar o resultado da consulta em um array associativo
        $cursos = $resultado->fetchAll(PDO::FETCH_ASSOC);
            
        //percorre cada posição do array
        for($i=0; $i<sizeof($cursos); $i++){
            //busca o professor correspondente, recebe o Array
            $coordenador = getProfessor($cursos[$i]['coordenador']);
            //substitui o valor da posição coordenador pelo Array
            $cursos[$i]['coordenador'] = $coordenador;
        }    
        
        //retorna o array contendo todos os cursos
        return $cursos;    
}

function getProfessor($id_professor){
        global $conexao; 
            
        //prepara a consulta com parametro :id
        $resultado = $conexao->prepare("select * from professor where id=:id"); 
        //vinculo valor ao id - o valor q chega de entrada na fcao
        $resultado->bindParam(':id', $id_professor);
        //executar uma consulta
        $resultado->execute();
    
        //transformar o resultado em array
        $professor = $resultado->fetch(PDO::FETCH_ASSOC);
        //retorna o Array
        return $professor;
    }

    function getCursoPorId($id_curso){
        global $conexao; 
        
        //prepara a consulta com parametro :id
        $resultado = $conexao->prepare("select id, nome, semestres, id_coordenador as coordenador from curso where id=:id"); 
        //vinculo valor ao id - o valor q chega de entrada na fcao
        $resultado->bindParam(':id', $id_curso);
        //executar uma consulta
        $resultado->execute();
    
        //transformar o resultado em array
        $curso = $resultado->fetch(PDO::FETCH_ASSOC);
        //recupera os dados do coordenador e guarda no array
        $curso['coordenador'] = getProfessor($curso['coordenador']);
        //retorna o array com os dados do curso
        return $curso;
    }

    function getDisciplinas($id_curso, $semestre){
        global $conexao; 
        if ($semestre == 0){ //não filtrar por semestre
            //prepara a consulta com parametro :id_curso e :semestre
            $resultado = $conexao->prepare("select * from disciplina where id_curso=:id_curso"); 
        }else{ //filtrar tambem por semestre
            //prepara a consulta com parametro :id_curso e :semestre
            $resultado = $conexao->prepare("select * from disciplina where id_curso=:id_curso and semestre=:semestre"); 
    
            //vinculo valor ao semestre - o valor q chega de entrada na fcao
            $resultado->bindParam(':semestre', $semestre);
        }    
        //vinculo valor ao id - o valor q chega de entrada na fcao
        $resultado->bindParam(':id_curso', $id_curso);
        //executar uma consulta
        $resultado->execute();
    
        //transformar o resultado em array
        $disciplinas = $resultado->fetchAll(PDO::FETCH_ASSOC);
        //recupera os dados do coordenador e guarda no array
        return $disciplinas;
    }