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

    //GESTOR CAMINHÕES//
    $gestCam = 'Gestor Caminhões';
    $gerenvenca = 'Gerente de Vendas Caminhões';
    $convencam = 'Consultor de Vendas Caminhões';
    $gerenpovenca = 'Gerente de Pós Vendas Caminhões';
    $coopovenca = 'Coordenador de Pós Vendas Caminhões';
    $convenpese = 'Consultor de Vendas de Peças e Serviços';

    //GESTOR FINANCEIRO//
    $gestfin = 'Gestor Financeiro';
    $coofinan = 'Coordenador Financeiro';
    $supconapa = 'Supervisor de Contas a Pagar';
    $anacontap = 'Analista de Contas a Pagar';
    $asscontap = 'Assistente de Contas a Pagar';
    $supcontarec = 'Supervisor de Contas a Receber';
    $anacontrece = 'Analista de Contas a Pagar';
    $asscontrece = 'Assistente de Contas a Pagar';
    $supteso = 'Supervisor de Tesouraria';
    $anateso = 'Analista de Tesouraria';
    $assteso = 'Assistente de Tesouraria';

    $coocont = 'Coordenador Contábil';
    $anacont = 'Analista Contábil';
    $anafisc = 'Analista Fiscal';
    $asscont = 'Assistente Contábil';
    $auxfisc = 'Auxiliar Fiscal';
    $auxcont = 'Auxiliar Contábil';

    $coocontr = 'Coordenador de Controladoria';
    $anacontr = 'Analista de Controladoria';
    $asscontr = 'Assistente de Controladoria';

    //GESTOR SUPRIMENTOS//
    $gestSup = 'Gestor Suprimentos';
    $supsupba = 'Supervisor de Suprimentos (Bandeira)';
    $anacomp = 'Analista de Compras';
    $supsupco = 'Supervisor de Suprimentos (Consumo)';
    $asscomp = 'Assistente de Compras';
    $almo = 'Almoxarife';
    $auxalmo = 'Auxiliar de Almoxarifado';

    //GESTOR MAQUINAS//
    $gestMaq = 'Gestor Máquinas';
    $gerevm = 'Gerente de Vendas de Máquinas';
    $consutec = 'Consultor Técnico';
    $asscoma = 'Assistente Comercial Máquinas';
    $coovema = 'Coordenador de Vendas Máquinas (Linha Construção/Industria)';
    $consvema = 'Consultor de Vendas Máquinas (Linha Construção/Industria)';
    $coovemaag = 'Coordenador de Vendas Máquinas (Linha Agrícola)';
    $consvemaag = 'Consultor de Vendas Máquinas (Linha Agrícola)';
    $supvu = 'Supervisor de Vendas de Usados';
    $mec = 'Mecânico';
    $amec = 'Auxiliar de Mecânico';
    $gerenpova = 'Gerente de Pós Vendas Máquinas';
    $coovp = 'Coordenador de Venda de Peças';
    $convp = 'Consultor de Vendas de Peças';
    $cooos = 'Coordenador de Oficina e Serviços';
    $coovs = 'Coordenador de Oficina e Serviços';
    $convs = 'Consultor de Vendas de Serviços';

    //GESTOR DO QSMA//
    $gestqsma = 'Gestor de QSMA';
    $anama = 'Analista de Meio Ambiente';
    $anaqa = 'Analista de Qualidade';
    $ts ='Técnico de Segurança';

    //GESTOR ENGELOG//
    $gestEngeLog = 'Gestor EngeLog';
    $gereop = 'Gerente de Operações';
    $supop = 'Supervisor de Operações';
    $supfr = 'Supervisor de Frotas';
    $gereneg = 'Gerente de Negócios';
    $cvs = 'Consultor de Vendas Serviços';
    $supme = 'Supervisor de Medição';
    $tcme = 'Técnico de Medição';
    $gerenmanu = 'Gerente de Manutenção';
    $assadmma = 'Assistente Administrativo da Manutenção';
    $cootec = 'Coordenador Técnico';
    $supman = 'Supervisor de Manutenção';
    $pcm = 'Supervisor de Planejamento e Controle de Manutenção (PCM)';
    $asspcm = 'Assistente de PCM';
    $consma = 'Consultor de Manutenção';

    //GESTOR TIC//
    $gesttic ='Gestor de TIC';
    $anasi = 'Analista de Sistemas e Infraestrutura';
    $anabi = 'Analista de BI';
    $tecsup = 'Técnico de Suporte';
    $prog = 'Programador';

    //CFO//
    $assJu = 'Assessor Jurídico';
    $assMa = 'Assessor Máquinas';

    //GESTOR DE DESENVOLVIMENTO HUMANO//
    $gestdh = 'Gestor de Desenvolvimento Humano';
    $supdp = 'Supervisor de DP';
    $anadp = 'Analista de DP';
    $assdp = 'Assistente de DP';
    $supdh = 'Supervisor de Desenvolvimento Humano';
    $anadh = 'Analista de Desenvolvimento Humano';
    $assdh = 'Assistente de Desenvolvimento Humano';

    //GESTOR DE FACILITIES//
    $gestfac = 'Gestor de Facilities';
    $supaps = 'Supervisor de Apoio e Serviços';
    $recep = 'Recepcionista';
    $asstp = 'Assistente de Transportes';
    $auxisg = 'Auxiliar de Serviços Gerais';
    $officeb = 'Officeboy';
    $supmp = 'Supervisor de Manutenção e Patrimônio';
    $asspa = 'Assistente de Patrimônio';
    $auxmapr = 'Auxiliar de Manutenção Predial';
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




    <!--INICIO DO CSO-->
    <div id="4" class="primaria">
        <?php echo '<label for="toggle-2">'.$cso.'</label>'; ?>
    </div> <br>
    
    <input type="checkbox" id="toggle-2">
        <div id="hm">




    <!--GESTOR MAQUINAS-->
    <div class="gestor">
        <?php echo '<label for="toggle-12">'.$gestMaq.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-12">
        <div id="gestma">
            
    <div class="gestorma">
        <?php echo '<label for="toggle-13">'.$gerevm.'</label>' ?>
    </div> <br>

    <input type="checkbox" id="toggle-13">
        <div id="gestma1">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $consutec ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $asscoma ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $coovema ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $consvema ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $coovemaag ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $consvemaag ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $supvu ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $mec ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $amec ?>
    </div> <br>

    </div>

    <div class="gestorma">
        <?php echo '<label for="toggle-14">'.$gerenpova.'</label>' ?>
    </div> <br>

    <input type="checkbox" id="toggle-14">
        <div id="gestma2">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $coovp; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $convp; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $cooos; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $coovs; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $convs; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $mec; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $amec; ?>
    </div> <br>
    </div>
    </div>
    <!--FINAL DO GESTOR MAQUINAS-->




    <!-- GESTOR CAMINHÕES -->
    <div class="gestor">
        <?php echo '<label for="toggle-cam">'.$gestCam.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-cam">
        <div id="cami">

    <div class="gestorma">
        <?php echo '<label for="toggle-cam1">'.$gerenvenca.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-cam1">
        <div id="cami1">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $convencam; ?>
    </div> <br>

    </div>

    <div class="gestorma">
        <?php echo '<label for="toggle-cam2">'.$gerenpovenca.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-cam2">
        <div id="cami2">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $coopovenca; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $mec; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $amec; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $convenpese; ?>
    </div> <br>
    
    </div>

    </div>
    <!-- FIM DO GESTOR CAMINHÕES -->





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
        <?php echo $supop; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $supfr; ?>
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

    <div class="gesteng1">
        <?php echo '<label for="toggle-15">'.$gerenmanu.'</label>' ?>
    </div> <br>

    <input type="checkbox" id="toggle-15">
        <div id="englog3">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $assadmma ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $cootec ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $supman ?>
    </div> <br> 

    <div onclick="modal(this)" class="gesteng">
        <?php echo $pcm ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $asspcm ?>
    </div> <br>
    
    <div onclick="modal(this)" class="gesteng">
        <?php echo $consma ?>
    </div> <br>

    </div>
    </div>
    <!-- FINAL DO GESTOR ENGELOG -->

    


    <!-- GESTOR SUPRIMENTOS -->
    <div class="gestor">
        <?php echo '<label for="toggle-sup">'.$gestSup.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-sup">
        <div id="supp">

    <div class="gestorma">
        <?php echo '<label for="toggle-sup1">'.$supsupba.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-sup1">
        <div id="supp1">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $anacomp; ?>
    </div> <br>

    </div>

    <div class="gestorma">
        <?php echo '<label for="toggle-sup2">'.$supsupco.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-sup2">
        <div id="supp2">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $anacomp; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $asscomp; ?>
    </div> <br>

    </div>

    <div class="gestorma">
        <?php echo '<label for="toggle-sup3">'.$almo.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-sup3">
        <div id="supp3">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $auxalmo; ?>
    </div> <br>

    </div>

    </div>
    <!-- FIM DO GESTOR SUPRIMENTOS -->

    <!-- FIM DO CSO -->

    </div>

    <!-- INICIO DO CFO-->
    <div class="primaria">
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



    <!-- GESTOR FINANCEIRO -->
    <div class="gestor">
        <?php echo '<label for="toggle-finan">'.$gestfin.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-finan">
        <div id="fina">

    <div class="gestorma">
        <?php echo '<label for="toggle-finan1">'.$coofinan.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-finan1">
        <div id="fina1">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $supconapa; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $anacontap; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $asscontap; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $supcontarec; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $anacontrece; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $asscontrece; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $supteso; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $anateso; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $assteso; ?>
    </div> <br>

    </div>

    <div class="gestorma">
        <?php echo '<label for="toggle-finan2">'.$coocont.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-finan2">
        <div id="fina2">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $anacont; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $anafisc; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $asscont; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $auxfisc; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $auxcont; ?>
    </div> <br>

    </div>

    <div class="gestorma">
        <?php echo '<label for="toggle-finan3">'.$coocontr.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-finan3">
        <div id="fina3">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $anacontr; ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $asscontr; ?>
    </div> <br>

    </div>
    </div>
    <!-- FIM DO GESTOR FINANCEIRO -->




    <!-- GESTOR DESENVOLVIMENTO HUMANO -->
    <div class="gestor">
        <?php echo '<label for="toggle-300">'.$gestdh.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-300">
        <div id="gestdh5">
        
    <div class="gestorma">
        <?php echo '<label for="toggle-315">'.$supdp.'</label>' ?>
    </div> <br>

    <input type="checkbox" id="toggle-315">
        <div id="gestdh10">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $anadp ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $assdp ?>
    </div> <br>

    </div>

    <div class="gestorma">  
        <?php echo '<label for="toggle-320">'.$supdh.'</label>' ?>
    </div> <br>

    <input type="checkbox" id="toggle-320">
        <div id="gestdh29">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $anadh ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $assdh ?>
    </div> <br>

    </div>
    </div>
    <!-- FIM DO GESTOR DESENVOLVIMENTO HUMANO --> 




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




    <!-- GESTOR FACILITIES -->
    <div class="gestor">
        <?php echo '<label for="toggle-20">'.$gestfac.'</label>'; ?>
    </div> <br>

    <input type="checkbox" id="toggle-20">
        <div id="gestfaci">
    
    <div class="gestorma">
        <?php echo '<label for="toggle-21">'.$supaps.'</label>' ?>
    </div> <br>

    <input type="checkbox" id="toggle-21">
        <div id="gestfaci1">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $recep ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $asstp ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $auxisg ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $officeb ?>
    </div> <br>

    </div>

    <div class="gestorma">
        <?php echo '<label for="toggle-22">'.$supmp.'</label>' ?>
    </div> <br>

    <input type="checkbox" id="toggle-22">
        <div id="gestfaci2">

    <div onclick="modal(this)" class="gesteng">
        <?php echo $asspa ?>
    </div> <br>

    <div onclick="modal(this)" class="gesteng">
        <?php echo $auxmapr ?>
    </div> <br>

    </div>

    </div>
    <!--FINAL DO GESTOR FACILITIES -->

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

    <div id="modal-promocao" class="modal-cont" styles="visibility:hidden">

    <div class="modal">

    <button type="button" class="fechar" data-dismiss="modal" aria-label="Close" onclick="removeModal()"><span aria-hidden="true">×</span></button> 

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
        document.getElementById("modal-promocao").style.display = 'flex';
    }

    function removeModal() {
        document.getElementById("modal-promocao").style.display = 'none';
    }

    </script>

</body>
</html>