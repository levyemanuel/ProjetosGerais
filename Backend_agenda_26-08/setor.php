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
               <!-- <input list="setorPai" name="setorPai" placeholder="Setor Pai:" class="sel" required>
               <datalist id="setorPai" > --> <div style="float: left"><b>Setor Pai:</b>
               <select id="setorPai" name="setorPai"> 

                        <?php
                        
                          include 'db.php';
                            $sql = "SELECT nomeSetor FROM setor ORDER BY nomeSetor ASC;";
                            $setores = mysqli_query($con, $sql) or die(mysqli_error());

                           while($row = mysqli_fetch_assoc($setores)){
                               echo '<option value="'.$row['nomeSetor'].'">'.($row['nomeSetor']).'</option>';
                         }
                        ?>    
               

               </select></div> <br>  
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