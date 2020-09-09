<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="teste.css">
    <title>PÁGINA TESTE</title>
</head>
<body>
<br><br>
<?php
    include 'db.php';
    $sql1 = "SELECT s1.idSetor, s1.nomeSetor, s2.idSetorPai, s2.nomeSetor nomeSet2, func.idFuncionario, func.nome FROM setor s1
    INNER JOIN setor s2 ON s2.idSetor = s1.idSetorPai
    INNER JOIN funcionario func ON s1.idFuncionario = func.idFuncionario ORDER BY s1.idSetor ASC";

    $func = mysqli_query($con, $sql1) or die(mysqli_error());

    while($rowFunc = mysqli_fetch_assoc($func)){

        echo '<div class="btn'.$rowFunc['idSetorPai'].'">
                <p class='.$rowFunc['idSetorPai'].'>'.$rowFunc['nomeSet2'].'</p>

                <p id="resp" class="p'.$rowFunc['idSetor'].'"><span>Responsável pelo setor:<br></span>'.$rowFunc['nome'].'</p>
            </div>';

        echo '<p style="display:none;
                        margin-left: 90px; 
                        margin-right: 75%; 
                        background-color: gray;"
                class="'.$rowFunc['idSetor'].'">'.$rowFunc['nomeSetor'].'</p><br>';

        echo "<script>
                    $(document).ready(function(){
                        var p".$rowFunc['idSetor']." = $('.".$rowFunc['idSetor']."');
                            $('.".$rowFunc['idSetorPai']."').click(function(){
                                p".$rowFunc['idSetor'].".toggle(50);

                            });
                    });
             </script>";

    }

?>
</body>
</html>