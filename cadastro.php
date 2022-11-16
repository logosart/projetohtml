<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href= "style/cadastro.css" type="text/css">
</head>
</head>

<body>
    <div id="form">
        <form action="scriptcadastro.php" method="post" name="form_cadastro">
            <h2 class="title">Cadastro</h2>
            <label for="username"></label>
            <div class= "input">
                <input id="username" name="usuario" placeholder= "usuario" type="text">
            </div>
            <label for="email" </label>
            <div class="input">
                 <input id="email" name="email" placeholder="email" type="text">
            <label for="senha"></label>
            <div class="input">
                 <input id ="senha" name="senha" placeholder="senha" type="password">
            </div>
            <div class="input">
                <input id ="confirmar-senha" name="confirmar-senha" placeholder= "confirmar-senha" type="password">
            <label for="confirmar-senha"></label>
            </div>
            <div id="button">
                <button type="submit">Cadastrar</button>
            </div>
        </form>

</body>

</html>

