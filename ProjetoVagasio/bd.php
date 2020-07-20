<?php
    $con = mysqli_connect('localhost', 'root', '', 'vagas');

    if (!$con){
        die('erro na con com o banco'.mysqli_error());
    }else{
        echo 'Conexao efetuada com sucesso';
        mysqli_close($con);
    }
?>