<?php
include_once('funcoes.php');
s($_REQUEST);
s(session_id());
#=======================================================================================================
#mostra o que esta chegando na pagina
$arr = array();
//   if (isset($entrar)) {
    $conexao = conexao_bd('mysql');
    $sql = 'SELECT usuario,senha FROM usuarios WHERE usuario =\''.$_REQUEST["usuario"].'\' AND senha = \''.$_REQUEST["senha"].'\'';
	$resposta = $conexao->query($sql) or die("erro ao selecionar");

	while($consulta = $resposta->fetch_array()){
		$arr[sizeof($arr)] = $consulta; //linhas
	}

	if(sizeof($arr)){
	  $usuario = $arr[0];
	  	$_SESSION['usuario'] = $usuario;
		$_SESSION["session_id"] = session_id();
		
        setcookie("usuario",$usuario);
        header("Location:home.php");
		exit;
			
	  	#inserir sessio id no banco
	  //s($usuario);
	}else{
		echo 'falhou';
		echo"<script language='javascript' type='text/javascript'>
                alert('Login e/ou senha incorretos');
				// comenta aqui em baixo pra poder ver os scripts executando em cadatro
                window.location.href='login.php';
        </script>";
	}


        
   
      
// 	}else{
       
//         exit;
//         setcookie("usuario",$usuario);
//         header("Location:home.html");
//       }
//   }

?>
