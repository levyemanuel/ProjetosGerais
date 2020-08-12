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

    //PAI//
    $gestao = 'Conselho de Gestão';
    $ceo = 'CEO';
    $secExec = 'Secretaria Executiva';
    $cso = 'CSO';
    $cfo = 'CFO';


    //CSO//
    $gestCam = 'Gestor Caminhões';
    $gestEngeLog = 'Gestor EngeLog';
    $gestSup = 'Gestor Suprimentos';

    //GESTOR MAQUINAS//
    $gestMaq = 'Gestor Máquinas';
    $gerevm = 'Gerente de Vendas de Máquinas';
    $consutec = 'Consultor Técnico';
    $asscoma = 'Assistente Comercial Máquinas';
    $coovema = 'Coordenador de Vendas Máquinas (Linha Construção/Industria)';
    $consvema = 'Consultor de Vendas Máquinas (Linha Construção/Industria';
    $coovemaag = 'Coordenador de Vendas Máquinas (Linha Agrícola)';
    $consvemaag = 'Consultor de Vendas Máquinas (Linha Agrícola)';
    $supvu = 'Supervisor de Vendas de Usados';
    $mec = 'Mecânico';
    $amec = 'Auxiliar de Mecânico';

    //GESTOR DO QSMA//
    $gestqsma = 'Gestor de QSMA';
    $anama = 'Analista de Meio Ambiente';
    $anaqa = 'Analista de Qualidade';
    $ts ='Técnico de Segurança';

    //GESTOR ENGELOG//
    $gereop = 'Gerente de Operações';
    $supop = 'Supervisor de Operações';
    $supfr = 'Supervisor de Frotas';

    $gereneg = 'Gerente de Negócios';
    $cvs = 'Consultor de Vendas Serviços';
    $supme = 'Supervisor de Medição';
    $tcme = 'Técnico de Medição';

    //GESTOR TIC//
    $anasi = 'Analista de Sistemas e Infraestrutura';
    $anabi = 'Analista de BI';
    $tecsup = 'Técnico de Suporte';
    $prog = 'Programador';

    //CFO//

    $assJu = 'Assessor Jurídico';
    $assMa = 'Assessor Máquinas';
    $gestfin = 'Gestor Financeiro';
    $gestdh = 'Gestor de Desenvolvimento Humano';
    $gesttic ='Gestor de TIC';
    $gestfac = 'Gestor de Facilities';
?>

</head>
<body>

    <div id="1" class="content">



 
    <!--PAI-->
    <div onclick="modal(this)" id="2" class="primaria">
        <?php echo $gestao; ?>
    </div> <br> <br>

    <div onclick="modal(this)" id="3" class="primaria">
        <?php echo $ceo ?>      
        <?php echo $secExec; ?>
    </div> <br> <br>







    <!--CSO-->
    <div id="4" class="primaria">
        <?php echo '<label for="toggle-2">'.$cso.'</label>'; ?>
    </div> <br>
    

    <input type="checkbox" id="toggle-2">
        <div id="hm">





    <!--GESTOR MAQUINAS-->
    <div id="6" class="gestor">
        <?php echo $gestMaq; ?>
    </div> <br>

    <!--FINAL DO GESTOR MAQUINAS-->




    
    <div id="7" class="gestor">
        <?php echo $gestCam; ?>
    </div> <br>






    <!-- GESTOR ENGELOG -->
    <div class="gestor">
        <?php echo '<label for="toggle-4">'.$gestEngeLog.'</label>'; ?>
    </div> <br>


    <input type="checkbox" id="toggle-4">
        <div id="englog">


    <div class="gesteng1">
        <?php echo '<label for="toggle-8">'.$gereop.'</label>'; ?>
    </div> <br>


    <input type="checkbox" id="toggle-8">
        <div id="englog1">


    <div onclick="modal(this)" class="gesteng">
        <?php echo $supop ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $supfr ?>
    </div> <br>
    </div>

    <div class="gesteng1">
        <?php echo '<label for="toggle-10">'.$gereneg.'</label>' ?>
    </div> <br>


    <input type="checkbox" id="toggle-10">
        <div id="englog2">


    <div onclick="modal(this)" class="gesteng">
        <?php echo $cvs ?>
    </div> <br>
    
    <div onclick="modal(this)" class="gesteng">
        <?php echo $supme ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $tcme ?>
    </div> <br>

    </div>

    </div>
    <!-- FINAL DO GESTOR ENGELOG -->

    



    <div id="9" class="gestor">
        <?php echo $gestSup; ?>
    </div> <br>

    </div>





    <!--CFO-->
    <div id="5" class="primaria">
        <?php echo '<label for="toggle-1">'.$cfo.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-1">
        <div id="mostra">

    <div onclick="modal(this)" id="10" class="secundariacfo">
        <?php echo $assJu; ?>
    </div> <br>
 
    <div onclick="modal(this)" id="11" class="secundariacfo">
        <?php echo $assMa; ?>
    </div> <br> 

    <div id="12" class="gestor">
        <?php echo $gestfin; ?>
    </div> <br>

    <div id="13" class="gestor">
        <?php echo $gestdh; ?>
    </div> <br>





    <!-- GESTOR QSMA-->
    <div id="14" class="gestor">
        <?php echo '<label for="toggle-5">'.$gestqsma.'</label>'; ?>
    </div> <br>


    <input type="checkbox" id="toggle-5">
        <div id="dez">

        <div onclick="modal(this)" id="6" class="gestorqsma">
        <?php echo $anama; ?>
    </div> <br>

    <div onclick="modal(this)" id="6" class="gestorqsma">
        <?php echo $anaqa; ?>
    </div> <br>

    <div onclick="modal(this)" id="6" class="gestorqsma">
        <?php echo $ts; ?>
    </div> <br>

    </div>
    <!--FINAL DO GESTOR QSMA-->





    <!-- GESTOR TIC -->
    <div id="15" class="gestor">
        <?php echo '<label for="toggle-7">'.$gesttic.'</label>'; ?>
    </div> <br>


    <input type="checkbox" id="toggle-7">
        <div id="tic">

    
    <div onclick="modal(this)" class="gestortic">
        <?php echo $anasi; ?>
    </div> <br>

    <div onclick="modal(this)" class="gestortic">
        <?php echo $anabi; ?>
    </div> <br>

    <div onclick="modal(this)" class="gestortic">
        <?php echo $tecsup; ?>
    </div> <br>

    <div onclick="modal(this)" class="gestortic">
        <?php echo $prog; ?>
    </div> <br>

    </div>
    <!-- FINAL GESTOR TIC -->



        
    <div id="16" class="gestor">
        <?php echo $gestfac; ?>
    </div> <br>

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