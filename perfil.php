<?php
    session_start()
?>
<!DOCTYPE html>

<html lang="en">
    <meta charset="UTF-8">
    <title>perfil</title>
    <link rel="stylesheet" href="style/perfila.css" type="text/css" >
<head>
</head>
<body background="background.jpg">
    <div class="barra"></div>
    <a href="home.html"><button class="linkhome">Home</button></a>
    <a href="atividades.html"><button class="linkatividades">Atividades</button></a>
    <a href="notas.html"><button class="linknotas">Notas</button></a>
    <a href="perfil.html"><button class="linkperfil">Perfil</button></a>
    <a href="calendario.html"><button class="linkcalendario">Calendario Acadêmico</button></a>
    <a href="horario.html"><button class="linkhorario">Horário de Aula</button></a>
    <a href="manual.html"><button class="linkmanual">Manual do Aluno</button></a>
    <div class="cabecalho"></div>
    <h1 class="titulo2">Perfil do Aluno</h1>
    <h1 class="nomealuno"><?=$_SESSION['usuario'][0] ?></h1>
    <img class="imgperfil" src="user.png"><img> 
    <h1 class="registro">Numero de sessão</h1>
    <h1 class="numregistro"><?=$_SESSION['session_id'] ?> </h1>
    <h1 class="dados">Dados Pessoais</h1>
    <h1 class="nomedados"><br><br></h1>
    <h1 class="email"></h1>
    <!-- <div class="fundoemail"></div> -->
    <h1 class="cep"></h1>
    <h1 class="numcep"></h1>
    <h1 class="nomeender"></h1>
    <!-- <div class="fundoender"></div> -->
    <h1 class="numender"></h1>
    <h1 class="num"></h1>
    <!-- <div class="fundonumero"></div> -->
    <h1 class="numnumero"></h1>
    <div class="backconq"></div>
    <h1 class="conquistas">Quadro de Conquistas</h1>
    <img class="ouro" src="ouro.png"><img>
    <img class="bronze" src="bronze.png"><img>
    <img class="bronze2" src="bronze.png"><img>
    <img class="ouro2" src="ouro.png"><img>
    <img class="bronze3" src="bronze.png"><img>
    <img class="prata" src="prata.png"><img>
    <img class="prata2" src="prata.png"><img>
    <img class="ouro3" src="ouro.png"><img>
    <img class="ouro4" src="ouro.png"><img>
    <img class="prata3" src="prata.png"><img>
</body>
</html>
