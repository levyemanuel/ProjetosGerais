<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vagas io</title>
</head>
<body>

    <h2>Atualização de Dados</h2> <br>
        <form action="cadxp.php" method="POST">
                    <select name="Formacao" required>

                        <option disabled selected>Formação</option>
                        <option value="Fund C">Ensino Fundamental Completo</option>
                        <option value="Medio I">Ensino Médio Incompleto</option>
                        <option value="Medio C">Ensino Médio Completo</option>
                        <option value="Graduacao">Graduação</option>
                        <option value="Pos Graduacao">Pós-Graduação</option>

                    </select>

                    <select name="Tipo_Curso" required>

                        <option disabled selected>Tipo de Curso (Opcional)</option>
                        <option value="Curso Bas">Curso Básico</option>
                        <option value="Curso Tec">Curso Técnico</option>
                        <option value="Curso Pro">Curso Profissionalizante</option>

                    </select> <br>

                    <input type="text" name="Cargo" placeholder="Cargo Desejado">
                    <input type="text" name="Exp" placeholder="Experiência de Trabalho"> <br>

    <br>
        <input type="submit" name="Enviarxp" value="Atualizar dados">
    
    </form>
</body>
</html>