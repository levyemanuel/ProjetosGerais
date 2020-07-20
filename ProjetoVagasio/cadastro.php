   <html>
         <head>
               <body>
                     <?php
                     session_start();
                      $Nome = $_POST['Nome'];
   $Email = $_POST['Email'];
   $Senha = $_POST['Senha'];
   $Telefone = $_POST['Telefone'];
   $CPF = $_POST['CPF'];
   $Data_Nasc = $_POST['Data_Nasc'];
   $Sexo = $_POST['Sexo'];
   $con = mysqli_connect('localhost', 'root', '', 'vagas'); 
   
    $sql = "INSERT INTO teste (Nome, Email, Senha, Telefone, CPF, Data_Nasc, Sexo)
      VALUES ('$Nome','$Email', '$Senha', '$Telefone', '$CPF', '$Data_Nasc', '$Sexo')";
      
if (mysqli_query($con, $sql)) {
      echo "Cadastro efetuado com sucesso";
} else {
      echo "Falha no cadastro" . $sql . "<br>". mysqli_error($con);
}
mysqli_close($con);

?>
<a href="projeto vagas io.php"> Voltar</a>
               </body>
         </head>
   </html>