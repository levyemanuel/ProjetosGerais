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

<?php
    $gestao = 'Conselho de Gestão';
    $ceo = 'CEO';
    $secExec = 'Secretaria Executiva';
    $cso = 'CSO';
    $cfo = 'CFO';
    $gestMaq = 'Gestor Máquinas';
    $gestCam = 'Gestor Caminhões';
    $gestEngeLog = 'Gestor EngeLog';
    $gestSup = 'Gestor Suprimentos';
    $assJu = 'Assessor Jurídico';
    $assMa = 'Assessor Máquinas';
    $gestfin = 'Gestor Financeiro';
    $gestdh = 'Gestor de Desenvolvimento Humano';
    $gestqsma = 'Gestor de QSMA';
    $gesttic ='Gestor de TIC';
    $gestfac = 'Gestor de Facilities';
?>

</head>
<body>

    <div id="1" class="content">
 

    <div onclick="modal(this)" id="2" class="primaria">
        <?php echo $gestao; ?>
    </div> <br> <br>


    <div onclick="modal(this)" id="3" class="primaria">
        <?php echo $ceo ?>      
        <?php echo $secExec; ?>
    </div> <br> <br>


    <div id="4" class="primaria">
        <?php echo $cso; ?>
    </div> <br> <br>


    <div id="5" class="primaria">
        <?php echo $cfo; ?>
    </div> <br> <br>


    <div onclick="modal(this)" id="6" class="secundariacfo">
        <?php echo $gestMaq; ?>
    </div> <br> <br>


    <div onclick="modal(this)" id="7" class="secundariacfo">
        <?php echo $gestCam; ?>
    </div> <br> <br>


    <div onclick="modal(this)" id="8" class="secundariacfo">
        <?php echo $gestEngeLog; ?>
    </div> <br> <br>
  
    
    <div onclick="modal(this)" id="9" class="secundariacfo">
        <?php echo $gestSup; ?>
    </div> <br> <br>
        

    <div onclick="modal(this)" id="10" class="secundariacfo">
        <?php echo $assJu; ?>
    </div> <br> <br>


    <div onclick="modal(this)" id="11" class="secundariacfo">
        <?php echo $assMa; ?>
    </div> <br> <br>


    <div onclick="modal(this)" id="12" class="secundariacfo">
        <?php echo $gestfin; ?>
    </div> <br> <br>


    <div onclick="modal(this)" id="13" class="secundariacfo">
        <?php echo $gestdh; ?>
    </div> <br> <br>


    <div onclick="modal(this)" id="14" class="secundariacfo">
        <?php echo $gestqsma; ?>
    </div> <br> <br>


    <div onclick="modal(this)" id="15" class="secundariacfo">
        <?php echo $gesttic; ?>
    </div> <br> <br>


    <div onclick="modal(this)" id="16" class="secundariacfo">
        <?php echo $gestfac; ?>
    </div> <br> <br>


    </div>

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