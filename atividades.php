<?php
    session_start()
?>
<!DOCTYPE html>

<html lang="en">
    <meta charset="UTF-8">
    <title>Atividades</title>
    <link rel="stylesheet" href="style/atividades.css" type="text/css" >
    
    <head>
</head>
<body class="fundo" background="background.jpg">
    <div class="background"></div>
    <title>Atividades</title>
    <div class="barra"></div>
    <a href="home.html"><button class="linkhome">Home</button></a>
    <a href="atividades.php"><button class="linkatividades">Atividades</button></a>
    <a href="notas.php"><button class="linknotas">Notas</button></a>
    <a href="perfil.php"><button class="linkperfil">Perfil</button></a>
    <a href="calendario.html"><button class="linkcalendario">Calendario Acadêmico</button></a>
    <a href="horario.html"><button class="linkhorario">Horário de Aula</button></a>
    <a href="manual.html"><button class="linkmanual">Manual do Aluno</button></a>
    <div class="cabecalho"></div>
    <h1 class="titulo2">Atividades</h1>
    <h1 class="nomealuno"><?=$_SESSION['usuario'][0]?></h1>

</body>