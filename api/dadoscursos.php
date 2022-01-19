<?php
//este script busca os dados de um curso ou de todos
//inclui o arquivo que contém os dados e as funções getCursos() e getCursoById()
  include_once('../dados.php');

//caso o Query String traga um parâmetro id
if(isset($_GET['id'])){
    //busca o Array com os dados de um curso específico, e codifica em JSON e escreve
    echo json_encode(getCursoPorId($_GET['id']));
}else{ // caso não traga id
    //busca o Array com os dados de todos os cursos, e codifica em JSON e escreve
    echo json_encode(getCursos());
  }
?>
