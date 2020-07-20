<?php
session_start();
$Email = $_POST['Email'];
$Senha = $_POST['Senha'];
$Entrar = $_POST['Entrar'];
$con = mysqli_connect('localhost', 'root', '');

$bd = mysqli_select_db($con, 'vagas');

$sql = "SELECT Id, Nome, Email FROM teste WHERE Email = '$Email' AND Senha = '$Senha'";

$result = mysqli_query($con, $sql) or die ($sql);

$row = mysqli_num_rows($result);
if($row == 1){
    $_SESSION['Email'] = $Email;
    $_SESSION['Nome'] = $Nome;
    $_SESSION['Formacao'] = $Formacao;

    //echo 'Chegou Aqui';
    header('Location: inicio.php');
    exit;
}else{
    header('Location: teladerro.html');
}







  /*  if (isset($Entrar)) {

    
    if (mysqli_num_rows($sql)<=0){

        echo "Login e/ou Senha Incorretos";
        die();

    }else{

        setcookie("Email", $Email);
        header("locaton:index.php");
    }
}
*/
?>