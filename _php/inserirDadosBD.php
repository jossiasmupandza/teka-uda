<?php
require("conexao.php");

$acao = $_GET["acao"];

if($acao == "cadCliente") {
	$nome = $_POST["tNomeCad"];
	$email = $_POST["tMailCad"];
	$telefone = $_POST["tTelF"];
	$genero = $_POST["tGenero"];
	$senha = $_POST["tSenhaCad"];
	$novidades = $_POST["tNovidadesF"];
	$inserirBD = mysql_query("INSERT INTO cliente VALUES ('','$nome','$telefone','$email','$genero','$senha','$novidades')");
	session_start();
		$_SESSION['tNomeCad'] = $nome;
	header("Location: ../entrar.html");
	
} elseif($acao == "contacto"){
	$nome = $_POST["tNomeC"];
	$telefone = $_POST["tTelC"];
	$email = $_POST["tMailC"];
	$assunto = $_POST["tAssC"];
	$texto = $_POST["tMensagem"];
	$data = date("Y-m-d");
	$hora = date("H:i:s");
	$inserirBD = mysql_query("INSERT INTO contacto VALUES ('','$nome','$telefone','$email','$assunto','$texto','$data','$hora')");
	session_start();
		$_SESSION['tNomeC'] = $nome;
	header("Location: ../contacto.html");
		
} elseif($acao == "cadAdmin") {
	$nome = $_POST["NomeCad"];
	$usuario = $_POST["usuario"];
	$email = $_POST["MailCad"];
	$senha = $_POST["SenhaCad"];
	$inserirBD = mysql_query("INSERT INTO administrador VALUES ('','$nome','$usuario','$senha','$email')");
	session_start();
		$_SESSION['NomeCad'] = $nome;
	header("Location: ../_admin/usuarios.html");
	
} elseif($acao == "cadProduto") {
	$nome = $_POST["NomeCad"];
	$descricao = $_POST["descricao"];
	$preco = $_POST["preco"];
	$inserirBD = mysql_query("INSERT INTO produto VALUES ('','$nome','$descricao','$preco')");
	session_start();
		$_SESSION['NomeCad'] = $nome;
	header("Location: ../_admin/produtos.html");
	
} elseif ($acao == "pedido") {
	$data = date("Y-m-d");
	$hora = date("H:i:s");
	//?
	//armazenar a data e hora
}
	
?>