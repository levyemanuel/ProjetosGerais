<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
    
    <?php
$nomeFunc = $_POST['nomeFunc'];

include 'db.php';

$sqlBuscaFunc = "SELECT nome, idSetor FROM funcionario WHERE nome LIKE '%$nomeFunc%'";

$resultNomeFunc = mysqli_query($con, $sqlBuscaFunc) or die(mysqli_error('Erro na Conexão com o banco'));
if(mysqli_num_rows($resultNomeFunc) != 0){
    while($rowBuscaFunc = mysqli_fetch_assoc($resultNomeFunc)){
        echo '<li>'.$rowBuscaFunc['nome'].'</li>';
    }
}else{
    echo "Funcionário não Encontrado";
}
?>

    </ul>
</body>
</html>