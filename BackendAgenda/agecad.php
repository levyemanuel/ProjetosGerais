<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="agn.css">
    <title>Agenda Telefônica</title>
</head>
<body>
        <div class="conteudo">
        <div class="img">
        <img class="log" src="logo.png" width="110px">

        <h2>Agenda Telefônica</h2>
        </div>
             <br>
        <form action="cadFuncionario.php" method="POST">

            <input type="text"
            name="nome"
            class="aaaa"
          placeholder="Nome Completo:"
            required>
     <br>     
     <br>

         Informe seu Setor:
         <!-- <input type="list" name="setor" placeholder="Setores..." class="sel"> -->
         <select id="setor" name="idSetor">
            
            <?php
                        
                        include 'db.php';
                          $sql = "SELECT idSetor, nomeSetor FROM setor ORDER BY nomeSetor ASC;";
                          $setores = mysqli_query($con, $sql) or die('error');

                         while($row = mysqli_fetch_assoc($setores)){
                             echo '<option value="'.$row['idSetor'].'">'.($row['nomeSetor']).'</option>';
                       }
            ?> 
         </select>
        

     <br> 
     <br>
     <div class="ramal">
         <input type="tel"
                class="rm1"
                name="ramal"
                maxlength="5"
                placeholder="Informe o seu Ramal:"
                required>
     
 </div>
        
     <br> <br>

 <div class="tel"> 

         <input type="tel"
                class="tl1"
                name="cel1" 
                maxlength="11"
                placeholder="Informe seu número Celular:"
                required>
     
 </div>
 <p class="h10">Este é o mesmo número do WhatsApp?</p> <br>

     <input type="radio" name="opcao" value="sim"> Sim
     <input type="radio" name="opcao" value="nao"> Não

 <br>
  <p class="p1">Caso não seja:</p>
  <div class="tel2">
     <input type="tel"
             class="tl2"
            name="cel2"
            value=""
            maxlength="11"
            placeholder="Informe seu número WhatsApp (Opcional):">

     </div>
 <br>
     <div class="btn">
         <input type="submit"
                name="enviar"
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
     </div>

        </form>
       </div>
       
</body>
</html>