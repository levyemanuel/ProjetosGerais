<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionário</title>
</head>
<body>
    <?php
    $nome = $_POST['nome'];
    $setor = $_POST['idSetor'];
    $ramal = $_POST['ramal'];
    $cel1 = $_POST['cel1'];
    $opcao = $_POST['opcao'];
    $cel2 = $_POST['cel2'];

    include 'db.php';

    $sql = "INSERT INTO funcionario (nome, idSetor, ramal, cel1, opcao, cel2)
     VALUES ('$nome', '$setor', '$ramal', '$cel1', '$opcao', '$cel2')";  

         if (mysqli_query($con, $sql)) {
         echo "Cadastro efetuado com sucesso! <br>";
     }else{
         echo "Falha no cadastro" . $sql . "<br>" . mysqli_error($con);
     }
    
     mysqli_close($con);

     
?>
<a href="arvore.php">Ir para Setores</a> <br>
<a href="agecad.php">Fazer Novo Cadastro</a> <br>
</body>
</html>
