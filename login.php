<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logar</title>
    <link rel="stylesheet" href="style/login.css"
</head>
<body>
    <div class= "form"  >
        <form action= "scriptcadastro.php" method="POST" name="login">
            <h2 class="title"> Logar </h2>
            
            <div class="usuario">
            <label for="username">
                <input id="username" name="usuário" placeholder="usuário" type="text" >
            </label>
            </div>
            
            <div class="senha">
            <label for="password">
                <input id="password" name="senha" placeholder ="senha" type="password" >   
            </label>
            </div> 
        
            <div class= "buttonmaster">
                <button class="button" value="entrar" id="entrar" href= home.php type="submit" onclick="alert('Bem-vindo')">Logar</button>
            </div>
        </form>
    </div>
</body>
</html>