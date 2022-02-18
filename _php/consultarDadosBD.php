<?php
require("conexao.php");
$acao = $_GET["acao"];

if($acao == "clientes") {
	tabClientes();
} elseif($acao == "contacto"){
	tabContacto();
} elseif($acao == "produto"){
	tabProduto();
} elseif($acao == "usuario"){
	tabUsuario();
} elseif($acao == "pedido"){
	tabPedido();
} elseif($acao == "totClientes") {
	total("cliente");
} elseif($acao == "totMen") {
	total("contacto");
} elseif($acao == "totPedidos") {
	total("pedido");
} elseif($acao == "valTot") {
	valTot();
} elseif($acao == "secCliente") {
	secCliente();
}

global $clOnline;
$clOnline = 0;
?>

<script type="text/javascript" src="../_javascript/jquery-3.2.1.js"></script>
<script type="text/javascript" src="../_javascript/apagarDados.js"></script>

<?php 
function tabClientes() { 
?>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr>
			<th>N<sup>o</sup></th>
			<th>Cliente</th>
			<th>Telefone</th>
			<th>Email</th>
			<th>Genero</th>
			<th>Senha</th>
			<th>Enviar Notificações</th>
			<th>Ação</th>
		</tr>
	<?php
		$consulta = mysql_query("SELECT * FROM cliente") or die("Erro ao consultar tebela cliente");
		if(mysql_num_rows($consulta)>0) {
				$cont = 1;
			while($linha = mysql_fetch_object($consulta)) {
				$nov = ($linha->novidades == "on")?"Habilitado":"Desabilitado";
	?>
				<tr>
					<td><?php echo $cont++; ?></td>
					<td><?php echo $linha->nome; ?></td>
					<td><?php echo $linha->telefone; ?></td>
					<td><?php echo $linha->email; ?></td>
					<td><?php echo $linha->genero; ?></td>
					<td><?php echo $linha->senha; ?></td>
					<td><?php echo $nov ?></td>
					<td>
						<a href="javascript:apagarDadosJs();" class="apagar" id="deletarDadosBD.php?categoria=cliente&&id="<?php echo $linha->idCliente; ?> >Eliminar </a>|
						
						<a href="index.html"> Enviar E-mail</a>
					</td>
				</tr>			
	<?php
			}
		}	
	?>
	</table>
						
<?php
}

function tabContacto() {
?>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr>
			<th>N<sup>o</sup></th>
			<th>Nome</th>
			<th>Telefone</th>
			<th>Email</th>
			<th>Assunto</th>
			<th>Mensagem</th>
			<th>Data</th>
			<th>Hora</th>
			<th>Ação</th>
		</tr>
	<?php
		$consulta = mysql_query("SELECT * FROM contacto") or die("Erro ao consultar tebela contacto");
		if(mysql_num_rows($consulta)>0) {
				$cont = 1;
			while($linha = mysql_fetch_object($consulta)) {
	?>
				<tr>
					<td><?php echo $cont++; ?></td>
					<td><?php echo $linha->nome; ?></td>
					<td><?php echo $linha->telefone; ?></td>
					<td><?php echo $linha->email; ?></td>
					<td><?php echo $linha->assunto; ?></td>
					<td><?php echo $linha->mensagem; ?></td>
					<td><?php echo $linha->data; ?></td>
					<td><?php echo $linha->hora; ?></td>
					<td>
						<a href="">Eliminar </a>|
						<a href=""> Enviar E-mail</a>
					</td>
				</tr>
	<?php
			}
		}	
	?>
	</table>
<?php
}

function tabProduto() { 
?>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr>
			<th>N<sup>o</sup></th>
			<th>Produto</th>
			<th>Descrição</th>
			<th>Preço</th>
			<th>Ação</th>
		</tr>
	<?php
		$consulta = mysql_query("SELECT * FROM produto") or die("Erro ao consultar tebela produto");
		if(mysql_num_rows($consulta)>0) {
				$cont = 1;
			while($linha = mysql_fetch_object($consulta)) {
	?>
				<tr>
					<td><?php echo $cont++; ?></td>
					<td><?php echo $linha->nomeProduto; ?></td>
					<td><?php echo $linha->descricao; ?></td>
					<td><?php echo $linha->preco; ?></td>
					<td>
						<a href="">Eliminar </a>|
						<a href=""> Editar</a>
					</td>
				</tr>			
	<?php
			}
		}	
	?>
	</table>
<?php
}

function tabUsuario() { 
?>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr>
			<th>N<sup>o</sup></th>
			<th>Nome Completo</th>
			<th>Usuário</th>
			<th>Email</th>
			<th>Senha</th>
			<th>Ação</th>
		</tr>
	<?php
		$consulta = mysql_query("SELECT * FROM administrador") or die("Erro ao consultar tebela administrador");
		if(mysql_num_rows($consulta)>0) {
				$cont = 1;
			while($linha = mysql_fetch_object($consulta)) {
				
	?>
				<tr>
					<td><?php echo $cont++; ?></td>
					<td><?php echo $linha->nomeAdmin; ?></td>
					<td><?php echo $linha->usuario; ?></td>
					<td><?php echo $linha->emailAdmin; ?></td>
					<td><?php echo $linha->senhaAdmin; ?></td>
					<td>
						<a href="">Eliminar </a>|
						<a href=""> Enviar E-mail</a>
					</td>
				</tr>			
	<?php
			}
		}	
	?>
	</table>
<?php
}

function tabPedido() {
?>
	<table cellpadding="5" cellspacing="0" border="1 solid orange">
		<tr>
			<th>N<sup>o</sup></th>
			<th>Pedido</th>
			<th>Quantidade</th>
			<th>Total a pagar</th>
			<th>Cliente</th>
			<th>Contacto</th>
			<th>Endereço</th>
			<th>Data</th>
			<th>Hora</th>
			<th>Ação</th>
		</tr>
	<?php
		$consultaPed = mysql_query("SELECT * FROM pedido") or die("Erro ao consultar tebela pedido");
		
		$consultaProd = mysql_query("SELECT * FROM pedido,produto WHERE pedido.idProduto = produto.idProduto") or die("Erro ao consultar tabela Produto");
		
		$consultaCl = mysql_query("SELECT * FROM pedido,cliente WHERE pedido.idCliente = cliente.idCliente") or die("Erro ao consultar tebela administrador");
		
		if((mysql_num_rows($consultaPed)>0) && (mysql_num_rows($consultaProd)>0) && (mysql_num_rows($consultaCl)>0)) {
				$cont = 1;
			while($linhaPed = mysql_fetch_object($consultaPed)) {
				$idProdPed = $linhaPed->idProduto;
				$idClPed = $linhaPed->idCliente;
				
				for($i=0; $i<mysql_num_rows($consultaProd); $i++) {
					$linhaProd = mysql_fetch_object($consultaProd);
					if($idProdPed == $linhaProd->idProduto) {
						$nomeProd = $linhaProd->nomeProduto;
						$preco = $linhaProd->preco; 
					}
				}
				
				for($i=0; $i<mysql_num_rows($consultaCl); $i++) {
					$linhaCl = mysql_fetch_object($consultaCl);
					if($idClPed == $linhaCl->idCliente) {
						$nomeCliente = $linhaCl->nome;
						$contacto = $linhaCl->telefone;
					}
				}			
	?>
				<tr>
					<td><?php echo $cont++; ?></td>
					<td><?php echo $nomeProd; ?></td>
					<td><?php echo $linhaPed->quantidade; ?></td>
					<td><?php echo $preco * $linhaPed->quantidade; ?></td>
					<td><?php echo $nomeCliente; ?></td>
					<td><?php echo $contacto; ?></td>
					<td><?php echo $linhaPed->endereco; ?></td>
					<td><?php echo $linhaPed->data; ?></td>
					<td><?php echo $linhaPed->hora; ?></td>
					<td>
						<a href="">Cancelar </a>|
						<a href="">Editar </a>|
						<a href="">Confirmar </a>
					</td>
				</tr>			
	<?php
			}
		}	
	?>
	</table>
<?php
}

function total($tab) {
	$consulta = mysql_query("SELECT * FROM $tab") or die("Erro ao consultar tebela $tab");
	$tot = mysql_num_rows($consulta);
	echo"<h1 style='color:orange;'>$tot</h1>";
}

function valTot(){
	$val = 0;
	$consultaPed = mysql_query("SELECT * FROM pedido") or die("Erro ao consultar tebela pedido");
	$consultaProd = mysql_query("SELECT * FROM pedido,produto WHERE pedido.idProduto = produto.idProduto") or die("Erro ao consultar tabela Produto");
	if((mysql_num_rows($consultaPed)>0) && (mysql_num_rows($consultaProd)>0)) {
		while($linhaPed = mysql_fetch_object($consultaPed)) {
			$idProdPed = $linhaPed->idProduto;
			
			for($i=0; $i<mysql_num_rows($consultaProd); $i++) {
				$linhaProd = mysql_fetch_object($consultaProd);
				if($idProdPed == $linhaProd->idProduto) {
					$nomeProd = $linhaProd->nomeProduto;
					$preco = $linhaProd->preco; 
				}
			}
			
			$val += $preco * $linhaPed->quantidade;
			
		}
				
	}
	echo"<h1 style='color:orange;'> $val Mt</h1>";
}

function secCliente() {
	$consulta = mysql_query("SELECT email,senha FROM cliente") or die("Erro ao iniciar a secssão!");
	if(mysql_num_rows($consulta) > 0) {
		$email = $_POST["tMailEnt"];
		$senha = $_POST["tSenhaEnt"];
		$t = 0;
		while($linha = mysql_fetch_object($consulta)) {
			if($email == $linha->email && $senha == $linha->senha)
				$t = 1;
		}
		$clOnline++;
			session_start();
			$_SESSION["tSenhaEnt"] = $senha;
			header("Location: entrar.php?estado=$t");	
	} else 
		echo"<script>alert('Você não esta cadastrado no sistema!');</script>";
}
?>