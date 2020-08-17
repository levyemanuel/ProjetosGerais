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

               <input list="setor" name="nomeSetor" placeholder="Nome do Novo Setor:" class="sel">
               <datalist id="setor">

                        <?php
                        
                          include 'db.php';
                            $sql = "SELECT idSetor, nomeSetor FROM setor ORDER BY nomeSetor ASC;";
                            $setores = mysqli_query($con, $sql) or die(mysqli_error());

                           while($row = mysqli_fetch_assoc($setores)){
                               echo '<option value="'.$row['idSetores'].'">'.($row['nomeSetor']).'</option>';
                         }
                        ?>    
               

               </datalist>

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