<?php
	require("conexao.php");
	$cat = $_GET["categoria"];//categoria
	if(!($cat == "pedido"))
		$id  = $_GET["id"];

	if($cat == "pedido") {
		apagarPedido($_GET["idCliente"], $_GET["idProduto"]);
	} elseif($cat == "cliente") {
		apagarDados($cat,"idCliente",$id);
	} elseif($cat == "produto") {
		apagarDados($cat,"idProduto",$id);
	} elseif($cat == "administrador") {
		apagarDados($cat,"idAdmin",$id);
	} elseif($cat == "contacto") {
		apagarDados($cat,"idContacto",$id);
	} 
	
	function apagarDados($tabela, $coluna, $id) {
		$sql = "DELETE FROM $tabela WHERE $coluna = $id";
		$query = mysql_query($sql);
		/*if($query) {
			header("Location: index.html");
		}*/
	}
	
	function apagarPedido($idCliente, $idProduto) {
		$sql = "DELETE FROM pedido WHERE idCliente = $idCliente, idProduto = $idProduto";
		$query = mysql_query($sql);
	}
?>