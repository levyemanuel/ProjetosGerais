<?php
    header('Content-Type: text/html; charset=utf-8');
    
    $con = mysqli_connect('localhost', 'root', '', 'agenda');

    if (!$con){
        die('Erro na conexao'.mysqli_error());
}