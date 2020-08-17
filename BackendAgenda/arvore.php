<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="arv.css">
    <title>Agenda Telefônica</title>
    <script>

    function mostra(id) {
    if (document.getElementById(id).style.display == 'none') {
    document.getElementById(id).style.display = 'block'; }
    else {document.getElementById(id).style.display = 'none';}
    }

  </script>

   
</head>
<body>
    <a href="agecad.php">Fazer Cadastro de Funcionário</a> <br>
    <a href="setor.php">Fazer Cadastro de Setor</a> <br>

    <!-- <form action="busca.php" method="POST">

        Pesquisar Funcionário <br>
        <input type="text" name="nomeFunc" id="buscaFunc" placeholder="Pesquisar por Nome" style="color: black;">
         <input type="text" name="buscaSetor" placeholder="Pesquisar por Setor" style="color: black;">
        <input type="submit" name="buscar" value="Buscar" style="color: black">
    
    </form> -->
   

    <div id="1" class="content">
 
<!-- CONEXÃO COM SETORES -->
    
        <?php
       include 'db.php';
        $sql = "SELECT idSetor, nomeSetor FROM setor ORDER BY nomeSetor ASC";
        $setores = mysqli_query($con, $sql) or die(mysqli_error());


       while($row = mysqli_fetch_assoc($setores)){
           echo '<div onclick="modal(this)" id="2" class="primaria"><p>'.$row['nomeSetor'].'</p> </div>';
       }

    ?>
    <br> <br>


    <!-- <div onclick="modal(this)" id="3" class="primaria">
        
    </div> <br> <br>


    <div id="4" class="primaria">
        
    </div> <br> <br>


    <div id="5" class="primaria">
       
    </div> <br> <br>


    <div onclick="modal(this)" id="6" class="secundariacfo">
       
    </div> <br> <br>


    <div onclick="modal(this)" id="7" class="secundariacfo">
        
    </div> <br> <br>


    <div onclick="modal(this)" id="8" class="secundariacfo">
       
    </div> <br> <br>
  
    
    <div onclick="modal(this)" id="9" class="secundariacfo">
  
    </div> <br> <br>
        

    <div onclick="modal(this)" id="10" class="secundariacfo">
       
    </div> <br> <br>


    <div onclick="modal(this)" id="11" class="secundariacfo">
       
    </div> <br> <br>


    <div onclick="modal(this)" id="12" class="secundariacfo">
      
    </div> <br> <br>


    <div onclick="modal(this)" id="13" class="secundariacfo">
        
    </div> <br> <br>


    <div onclick="modal(this)" id="14" class="secundariacfo">
    </div> <br> <br>


    <div onclick="modal(this)" id="15" class="secundariacfo">
        
    </div> <br> <br>


    <div onclick="modal(this)" id="16" class="secundariacfo">
       
    </div> <br> <br>


    </div> -->

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

    <button type="button" class="fechar" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()"><span aria-hidden="true">×</span></button> 

    <h3 class="h3">Funcionarios deste setor:</h3>

    <table>
       
                <tr>
                    <th>Nome:</th>
                    <th>Setor:</th>
                    <th>Ramal:</th>
                    <th>Celular:</th>
                    <th>Celular 2:</th>
                </tr>

               <!-- CONEXÃO COM FUNCIONÁRIOS (TABELA MODAL) -->

                 <?php
                 include 'db.php';
        $sql1 = "SELECT nome, setor.nomeSetor, ramal, cel1, cel2 FROM funcionario
                    INNER JOIN setor ON funcionario.idsetor = setor.idSetor";
        $funcionario =  mysqli_query($con, $sql1) or die(mysqli_error());

        while($row1 = mysqli_fetch_assoc($funcionario)){
        echo '<tr><td>'.$row1['nome'].'</td><td>'.$row1['nomeSetor'].'</td><td>'.$row1['ramal'].'</td><td>'.$row1['cel1'].'</td><td>'.$row1['cel2'].'</td></tr>';
       }

        ?>
        
            </table>

    </div>

    </div>

    <script>

            function modal(event) {
                event.classList.add("mostrar");
                document.querySelector(".modal-cont").classList.add("mostrar");}

    </script>

</body>
</html>  