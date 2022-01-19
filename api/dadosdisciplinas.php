<?php

include_once('../dados.php');

if(isset($_GET['id_curso'])){
    $id_curso = $_GET['id_curso'];
    if(isset($_GET['semestre'])){
        $semestre = $_GET['semestre'];
    }else{
        $semestre = 0;
    }
    $disciplinas = getDisciplinas($id_curso, $semestre);
    echo json_encode($disciplinas);
}else{//caso não venha o parâmetro id_curso
    $msg = array("erro" => "Não é possível acessar");
    echo json_encode($msg);
}