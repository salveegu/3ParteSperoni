<?php
  header('Content-Type: application/json');
  //include_once('../dados.php'); //removemos a inclusão do arquivo que continha os arrays e as funções de acesso aos dados
  include_once('conexao.php'); //incluímos o arquivo com a conexão e a função de busca do BD

  if(isset($_GET['id'])){
    echo json_encode(getCursoPorId($_GET['id']));
  }else{
    echo json_encode(getCursos());
  }
