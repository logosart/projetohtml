<?php

// conectando ao banco

$GLOBALS['db_host'] = "localhost";
$GLOBALS['bd_usuario'] = "root";
$GLOBALS['bd_senha'] = "";
$GLOBALS['bd'] = "test";
$GLOBALS['bd_senha'] = "luquetes10";
$GLOBALS['bd'] = "sys";

function conexao_bd($tipo_bd){

	if($tipo_bd == 'mysql'){
		$mysqli = new mysqli($GLOBALS['db_host'], $GLOBALS['bd_usuario'], $GLOBALS['bd_senha']);
		// $mysqli = new mysqli('www.wodbrasil.com', $GLOBALS['bd_usuario'], $GLOBALS['bd_senha']);
	
		     if($mysqli->select_db($GLOBALS['bd'])){
       			// echo 'O banco dedaos '.$GLOBALS['bd'].' existe!<br>';
           }else{        
		        echo 'erro ao conectar no bd...';
           }


		// Caso algo tenha dado errado, exibe uma mensagem de erro
		if (mysqli_connect_errno()){
				trigger_error(mysqli_connect_error());
	   	}
	   	
		# Aqui está o segredo
		$mysqli->query("SET NAMES 'utf8'");
		$mysqli->query('SET character_set_connection=utf8');
		$mysqli->query('SET character_set_client=utf8');
		$mysqli->query('SET character_set_results=utf8');
		
		return $mysqli;
	}elseif ('postgres') {
			$con = pg_connect("host=".$GLOBALS['host']." port=".$GLOBALS['porta']." dbname=".$GLOBALS['bd']." user=".$GLOBALS['bd_usuario']." password=".$GLOBALS['bd_senha']);
		
			return $con;
	}
}

#mostra o que esta chegando na pagina
echo '<pre>';
print_r($_REQUEST);

//   if (isset($entrar)) {
    $conexao = conexao_bd('mysql');
    $sql = 'SELECT usuario,senha FROM usuarios WHERE usuario =\''.$_REQUEST["usuario"].'\' AND senha = \''.$_REQUEST["senha"].'\'';

    echo $sql;
	$verifica = $conexao->query($sql) or die("erro ao selecionar");

    while($row =  $conexao->fetch_array($verifica)) {
        echo print_r($row);       // Print the entire row data
    }



	  if (mysqli_num_rows($verifica)<=0){
        echo 'funcionou';
        // echo"<script language='javascript' type='text/javascript'>
        //         alert('Login e/ou senha incorretos');
        //         window.location.href='login.html';
        // </script>";
        die();
      
	}else{
        echo 'falhou';
        exit;
        setcookie("usuario",$usuario);
        header("Location:index.php");
      }
//   }

?>
