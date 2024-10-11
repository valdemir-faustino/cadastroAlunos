<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Alunos</h1>
    <form action="salvarAluno.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <input type="submit" value="Inserir Aluno">
</form>

</body>
</html>
