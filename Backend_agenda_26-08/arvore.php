<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="arv.css">
    <title>Agenda Telefônica</title>
    
     <script>

    function mostra(id) {
    if (document.getElementById(id).style.display == 'none') {
    document.getElementById(id).style.display = 'block'; }
    else {document.getElementById(id).style.display = 'none';}
    }

  </script>

            <!-- DATATABLE -->

   
   
</head>
<body>
    <a href="agecad.php">Fazer Cadastro de Funcionário</a> <br>
    <a href="setor.php">Fazer Cadastro de Setor</a> <br>

  
   

    <div id="1" class="content">
 
<!-- CONEXÃO COM SETORES -->
    
        <?php
       include 'db.php';
        $sql = "SELECT idSetor, nomeSetor FROM setor ORDER BY nomeSetor ASC";
        $setores = mysqli_query($con, $sql) or die(mysqli_error());


       while($row = mysqli_fetch_assoc($setores)){
           echo '<div onclick="modal(this)" id="'.$row['idSetor'].'" class="primaria"><p>'.$row['nomeSetor'].'</p> </div>';
       }

    ?>
    <br> <br>

    </div>

    <style>

         th {color: black; text-align: center;}
        .h3 {text-align: center; color: black;}

        .modal-cont {width: 100vw; height: 100vh; background: rgba(0,0,0,.5); position: fixed; top: 0px; left: 0px;
                     z-index: 2000; display: none; justify-content: center; align-items: center;}

        .modal-cont.mostrar {display: flex;}

        .modal {background: white; width: 60%; min-width: 300px; padding: 5px; border: 5px solid orange; border-radius: 4px;}

        @keyframes modal {
            from {
                opacity: 0;
                transform: translate3d(0, -60px, 0);
            }

         to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
         }
        }

        .mostrar .modal {animation: modal .3s;}

        .fechar {position: absolute; width: 65px; height: 50px; border-radius: 4px; color: black; 
                 border: 4px solid red; background: red; cursor: pointer; font-size: 1.2em;}

    </style>

    <div id="modal-promocao" class="modal-cont">

    <div class="modal">

    <button type="button" class="fechar" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()"><span style="color: white;" aria-hidden="true">×</span></button> <br> <br>
 

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
               <!-- CONEXÃO COM FUNCIONÁRIOS (TABELA MODAL) -->

                 <?php
                 include 'db.php';
        $sql1 = "SELECT nome, setor.nomeSetor, ramal, cel1, cel2 FROM funcionario
                    INNER JOIN setor ON funcionario.idsetor = setor.idSetor";
        $funcionario =  mysqli_query($con, $sql1) or die(mysqli_error());

        while($row1 = mysqli_fetch_assoc($funcionario)){
        echo '<tr>
                <td>'.$row1['nome'].'</td>
                <td>'.$row1['nomeSetor'].'</td>
                <td>'.$row1['ramal'].'</td>
                <td>'.$row1['cel1'].'</td>
                <td>'.$row1['cel2'].'</td>
            </tr>';
       }

        ?>
        </tbody>
            </table>

    </div>

    </div>

    <script>

            function modal(event) {
                event.classList.add("mostrar");
                document.querySelector(".modal-cont").classList.add("mostrar");}

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
</body>
</html>  