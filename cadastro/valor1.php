<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        $valor=$_GET["name"];
        echo"O nome inserido foi $valor";
        $valor=$_GET["email"];
        echo" </br> O e-mail cadastrado foi $valor";
        $valor=$_GET["senha"];
        echo"</br> A senha cadastrada foi $valor";
        $valor=$_GET["estado"];
        echo"</br> Voce foi cadastrado com sucesso como um $valor";
        ?>
    </div>
</body>
</html>