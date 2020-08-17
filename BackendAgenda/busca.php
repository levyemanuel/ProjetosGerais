<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
      
    <?php
$nomeFunc = $_POST['nomeFunc'];

include 'db.php';

$sqlBuscaFunc = "SELECT nome, setor.nomeSetor, ramal, cel1, cel2 FROM funcionario INNER JOIN setor ON funcionario.idSetor = setor.idSetor WHERE nome LIKE '%$nomeFunc%'";

$resultNomeFunc = mysqli_query($con, $sqlBuscaFunc) or die(mysqli_error('Erro na Conexão com o banco'));
if(mysqli_num_rows($resultNomeFunc) != 0){
    echo'<tr>
    <th>Nome:</th>
    <th>Setor:</th>
    <th>Ramal:</th>
    <th>Celular 1:</th>
    <th>Celular 2:</th>
</tr>';
    while($rowBuscaFunc = mysqli_fetch_assoc($resultNomeFunc)){
        echo '
        <tr>
            <td>'.$rowBuscaFunc['nome'].'</td>
            <td>'.$rowBuscaFunc['nomeSetor'].'</td>
            <td>'.$rowBuscaFunc['ramal'].'</td>
            <td>'.$rowBuscaFunc['cel1'].'</td>
            <td>'.$rowBuscaFunc['cel2'].'</td>
        </tr>';
    }
}else{
    echo "Funcionário não Encontrado";
}
?>

    </table>
</body>
</html>