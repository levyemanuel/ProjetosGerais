<!DOCTYPE HTML>
<HTMl>
    <head>
        <meta charset="UTF-8">
        <title>Vagas IO</title>
    </head>
    <body>
    <?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'vagas');
    echo 'Página Inicial';
    ?>
    <h2><?php echo $_SESSION['Email']; ?></h2> <br>
    <h2><?php echo $_SESSION['Nome']; ?></h2> <br>
    <h5><?php echo $_SESSION['Formacao']; ?></h5> <br>

    <a href="cadastroxp.php"> Atualizar lista de experiência</a> <br>
    <a href = "projeto vagas io.php"> Sair </a>

    </body>
</HTMl>