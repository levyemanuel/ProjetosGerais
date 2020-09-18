<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página Teste</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="teste.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
</head>

<body>
<?php
    include 'db.php';
    $sql1 = "SELECT s1.idSetor, s1.nomeSetor, s2.idSetorPai, s2.nomeSetor nomeSet2, func.idFuncionario, func.nome FROM setor s1
    INNER JOIN setor s2 ON s2.idSetor = s1.idSetorPai
    INNER JOIN funcionario func ON s1.idFuncionario = func.idFuncionario ORDER BY s1.idSetor";

    $Func = mysqli_query($con, $sql1) or die(mysqli_error());

    while($rowFunc = mysqli_fetch_assoc($Func)){

        echo '<div class="btn'.$rowFunc['idSetorPai'].'">
                <p class='.$rowFunc['idSetorPai'].'>'.$rowFunc['nomeSet2'].'</p>
                <p style="position:relative; left:20%; bottom:35px; display: none;"
                id="resp" class="p'.$rowFunc['idSetor'].'"><span>Responsável pelo setor:</span>'.$rowFunc['nome'].'</p>
            </div>';

        echo '<p onclick="modal(this)" style="display:none;
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

<div id="modal-promocao" class="modal-cont" styles="visibility:hidden">

<div class="modal">

<button type="button" class="fechar" onclick="removeModal()">X</button> 

<h3 class="h3">Funcionarios deste setor:</h3>

<table id="tabela">
    <thead>
       <tr>
           <th>Nome:</th>
           <th>Setor:</th>
           <th>Ramal:</th>
           <th>Celular:</th>
           <th>Celular 2:</th>
       </tr>
    </thead>
    <tbody>
       <tr>
           <th>Nome Sobrenome da Silva</th>
           <th>Setor Escolhido</th>
           <th>12345</th>
           <th>85996619913</th>
           <th>88998050756</th>
       </tr>
       <tr>
           <th>Nome Sobrenome da Silva</th>
           <th>Setor Escolhido</th>
           <th>12345</th>
           <th>85996619913</th>
           <th>88998050756</th>
       </tr>
       <tr>
           <th>Nome Sobrenome da Silva</th>
           <th>Setor Escolhido</th>
           <th>12345</th>
           <th>85996619913</th>
           <th>88998050756</th>
       </tr>
       <tr>
           <th>Nome Sobrenome da Silva</th>
           <th>Setor Escolhido</th>
           <th>12345</th>
           <th>85996619913</th>
           <th>88998050756</th>
       </tr>
    <tbody>

   </table>

</div>

</div>

<script>

function modal(event) {
document.getElementById("modal-promocao").style.display = 'flex';
}
function removeModal() {
document.getElementById("modal-promocao").style.display = 'none';
}

</script>

<script>
         $(document).ready(function(){
            $('#tabela').dataTable( {
            "language": {
            "lengthMenu": "Exibindo _MENU_ dados por página",
            "zeroRecords": "Dados não encontrados",
            "info": "Exibindo páginas _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro encontrado",
            "infoFiltered": "(filtrado de _MAX_ registros no total)",
            "infoPostFix": "",
            "sSearch": "Pesquisar:",
            "sUrl": "",
            "oPaginate":{
            "sFirst": "Primeiro",
            "sPrevious": "Anterior",
            "sNext": "Próximo",
            "sLast": "Último"
            }
        }
    });
        });

</script>