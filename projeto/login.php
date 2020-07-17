<?php
$Email = $_POST['Email'];
$Senha = $_POST['Senha'];
$Entrar = $_POST['Entrar'];
$con = mysqli_connect('localhost', 'root', '');

$bd = mysqli_select_db($con, 'vagas');
    if (isset($Entrar)) {

    $sql = "SELECT * FROM teste WHERE Email = '$Email' AND Senha = '$Senha'"; 
    
   $dados = mysqli_query($con, $sql) or die ($sql);
   $row = mysqli_num_rows($dados);
     if ($row == 1) {

        header('Location:testedtest.html');
        echo "Login efetuado com sucesso";
        die();

    }else{
        
        setcookie("Email", $Email);
        header('Location:teladerro.html');

    }
}

?>