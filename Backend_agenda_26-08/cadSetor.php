<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionário</title>
</head>
<body>
    <?php
 //   $nomeFunc = $POST['nomeFunc'];
    $nomeSetor = $_POST['nomeSetor'];
    $setorPai = $_POST['setorPai'];
    include 'db.php';

    $sql = "INSERT INTO setor (nomeSetor, setorPai)
    VALUES ('$nomeSetor', '$setorPai')";

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
