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
 //   $sqlSet = "SELECT idSetorPai, s2.nomeSetor nomeSetPai FROM setor s1 INNER JOIN setor s2 ON S2.I";
    $sql1 = "SELECT s1.idSetor, s1.nomeSetor, s2.idSetorPai, s2.nomeSetor nomeSetPai, func.idFuncionario, func.nome FROM setor s1
    INNER JOIN setor s2 ON s2.idSetor = s1.idSetorPai
    INNER JOIN funcionario func ON s1.idFuncionario = func.idFuncionario ORDER BY s1.idSetor ASC";

    $set = mysqli_query($con, $sql1) or die(mysqli_error());

    while($rowSet = mysqli_fetch_assoc($set)){

        echo '<div class="btn'.$rowSet['idSetorPai'].'">
                <p class='.$rowSet['idSetorPai'].'>'.$rowSet['nomeSetPai'].'</p>';

        echo '<p id="resp" class="p'.$rowSet['idSetor'].'"><span>Responsável pelo setor:<br></span>'.$rowSet['nome'].'</p>';

        while ($rowSet = mysqli_fetch_assoc($set)){

            echo "<p style='display:block;
                    margin-left: 90px; 
                    margin-right: 75%; 
                    background-color: gray;' 
                    class=p".$rowSet['idSetor'].">".$rowSet['nomeSetor']."</p><br></div>"; 
        

        //     echo "<p style='display:block;
        //     margin-left: 90px; 
        //     margin-right: 75%; 
        //     background-color: black;' 
        //     class=p".$rowSet['idSetor'].">".$rowSet['nomeSetor']."</p><br></div>"; 

         }

        echo "<script>
            $(document).ready(function(){
            var p".$rowSet['idSetor']." = $('.p".$rowSet['idSetor']."');
            $('.".$rowSet['idSetorPai']."').click(function(){
            p".$rowSet['idSetor'].".toggle(50);

            });
            });
             </script>";

    }

?>
</body>
</html>