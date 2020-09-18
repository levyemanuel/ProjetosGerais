<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Setores</title>
    <link rel="stylesheet" href="set.css">
</head>
<body>

    <div class="conteudo">
    <form action="cadSetor.php" method="POST">


        <h2>Setores</h2>

<!-- <input type="text"
               name="nomeFunc"
               class="Nome"
               placeholder="Informe seu Nome Completo:"> <br> <br> -->
               
               <input type="text" name="nomeSetor" placeholder="Nome do Novo Setor:" class="sel" required> <br> <br>
               
               <div style="margin-right: 325px"><b style="float:left; margin-left: 5px">Setor Pai:</b>
               <select id="idSetorPai" name="idSetorPai" class="sel"> 

                        <?php
                        
                          include 'db.php';
                            $sql = "SELECT idSetor, nomeSetor FROM setor ORDER BY nomeSetor ASC;";
                            $setores = mysqli_query($con, $sql) or die(mysqli_error());

                           while($row = mysqli_fetch_assoc($setores)){
                               echo '<option value="'.$row['idSetor'].'">'.($row['nomeSetor']).'</option>';
                         }
                        ?>    
                </select>
                </div>
                <div style="margin-right: 325px; position: relative; left: 325px; bottom: 55px;">
                <b style="float: left; margin-left: 5px">Responsável pelo setor:</b>
                <select id="resp" name="resp" class="sel"> 

                        <?php

                                $sql1 = "SELECT idFuncionario, nome FROM funcionario ORDER BY nome ASC;";
                                $resp = mysqli_query($con, $sql1) or die(mysqli_error());

                                while($row1 = mysqli_fetch_assoc($resp)){
                                    echo '<option value="'.$row1['idFuncionario'].'">'.($row1['nome']).'</option>';
                                    }
                        ?>    

               

               </select></div>
                            <input type="submit"
                            name="enviarSetor"
                            value="Finalizar"
                            style="padding-top: 10px;
                            padding-bottom: 10px;
                            padding-left: 30px;
                            padding-right: 30px;
                            background-color: #4169E1;
                            color: white;
                            font-size: small;
                            border-radius: 4px;
                            border-style: solid;
                            border-width: 0px;">
    </form>
                     </div>
</body>
</html>