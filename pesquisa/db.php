<?php
    header('Content-Type: text/html; charset=utf-8');
    
    $con = mysqli_connect('localhost', 'root', '123456', 'agenda');

    if (!$con){
        die('Erro na conexao'.mysqli_error());
    }