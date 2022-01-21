<?php
header('Content-Type: application/json');
//include('../dados.php');// remover
include('conexao.php');//incluir

if(isset($_GET['id'])){
    echo json_encode(getProfessor($_GET['id']));
}else{
    echo "id não definido";
}
