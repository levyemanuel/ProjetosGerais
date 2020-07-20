<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Atualização de dados</title>
</head>
<body>
      <?php
session_start();
                     $Formacao = $_POST['Formacao'];
                     $TipoCurso = $_POST['Tipo_Curso'];
                     $Cargo = $_POST['Cargo'];   
                     $Exp = $_POST['Exp']; 
                     
      $con = mysqli_connect('localhost', 'root', '', 'vagas'); 
      
       $sql = "INSERT INTO experiencia (Formacao, Tipo_Curso, Cargo, Exp)
               VALUES ('$Formacao', '$TipoCurso', '$Cargo', '$Exp')";
         
   if (mysqli_query($con, $sql)) {
         echo "Perfil Atualizado!";
   } else {
         echo "Falha no Atualização" . $sql . "<br>". mysqli_error($con);
   }
   mysqli_close($con);
   
   ?>
   <a href="inicio.php"> Voltar</a>
</body>
</html>