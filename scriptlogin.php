<?php

// conectando ao banco

$GLOBALS['db_host'] = "localhost";
$GLOBALS['bd_usuario'] = "root";
$GLOBALS['bd_senha'] = "";
$GLOBALS['bd'] = "test";
$conexao= mysqli_connect("localhost","root","","test") or die("não deu");

function conexao_bd($tipo_bd){

	if($tipo_bd == 'mysql'){
		$mysqli = new mysqli($GLOBALS['db_host'], $GLOBALS['bd_usuario'], $GLOBALS['bd_senha']);
		// $mysqli = new mysqli('www.wodbrasil.com', $GLOBALS['bd_usuario'], $GLOBALS['bd_senha']);
	
		     if($mysqli->select_db($GLOBALS['bd'])){
       			// echo 'O banco dedaos '.$GLOBALS['bd'].' existe!<br>';
           }else{        
		        echo '<script type="text/javascript">
		               form_cria_bd();
		               $("#myModal").modal();
		               function form_cria_bd(){
			                $.ajax({
			                      url: "mvc/view/padrao/bd/form_criar_bd.php",
			                      cache: false
			                }).done(function( html ) {
			                    $( "#div_editar" ).empty();
			                    $( "#div_editar" ).append( html );
			                });
			            }
		              </script>';
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

$usuario = $_POST['usuario'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
 


  if (isset($entrar)) {
	$verifica = $conexao->query("SELECT usuario,senha FROM test.usuario WHERE usuario =
    '$usuario' AND senha = '$senha'") or die("erro ao selecionar");
	  
	  if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      
	}else{
        setcookie("usuario",$usuario);
        header("Location:index.php");
      }
  }

?>
