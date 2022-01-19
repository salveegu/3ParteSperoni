<?php
header('Content-Type: application/json');
include('../dados.php');

if(isset($_GET['id'])){
    echo json_encode(getProfessor($_GET['id']));
}else{
    echo "id não definido";
}