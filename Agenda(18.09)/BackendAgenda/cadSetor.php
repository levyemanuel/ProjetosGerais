<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionário</title>
</head>
<body>
    <?php
    $nomeSetor = $_POST['nomeSetor'];
    $idSetorPai = $_POST['idSetorPai'];
    $resp = $_POST['resp'];
    include 'db.php';

    $sql = "INSERT INTO setor (nomeSetor, idSetorPai, idFuncionario)
    VALUES ('$nomeSetor', '$idSetorPai', '$resp')";

    if (mysqli_query($con, $sql)) {
        echo "Cadastro efetuado com sucesso! <br>";
    }else{
        echo "Falha no cadastro" . $sql . "<br>" . mysqli_error($con);
    }
       
     mysqli_close($con);

?>
<a href="arvore.php">Ir para Setores</a> <br>
<a href="setor.php">Fazer Novo Cadastro de Setor</a> <br>
</body>
</html>