<!DOCKTYPR html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Clientes | TekaUda</title>
	<link rel="shortcut icon" href="../_imagens/favcon-tekauda.png" type="image/x-png"/>
	<link type="text/css" rel="stylesheet" href="_css/estilo-admin.css">
	<script type="text/javascript" src="../_javascript/ajax.js"></script>
</head>
<body>
	<div class="container">
		<header class="cabecalho">
			<div class="cabecalho-logo">
				<h1><a href="../index.html" title="ir para loja">TekaUda</a></h1>
			</div>
			<div class="perfil">
				<select class="cContaUsuario">
					<option><h3>Nome do usuario</h3></option>
					<option><a href="">Meu perfil</a></option>
					<option><a href="">Sair</a></option>
				</select>
			</div>
		</header>
		<nav class="coluna-nav">
			<h2>Navegação</h2>
			<ul>
				<li><a href="painel-de-controle.html" >Painel de Controle</a></li>
				<li><a href="pedidos.html">Pedidos</a></li>
				<li><a href="clientes.html" class="selecionado">Clientes</a></li>
				<li><a href="produtos.html">Produtos</a></li>
				<li><a href="usuarios.html">Gerênciar Usuários</a></li>
				<li><a href="estatisticas.html">Estatísticas</a></li>
			</ul>
		</nav>
		<div class="conteudo">
			<div class="directorio">
				<div class="dir">
					<h2>Clientes</h2>
					<p><span><a href="painel-de-controle.html" title="ir ao painel de controle">Principal</a></span> / <a href="clientes.html">Clientes</a></p>
				</div>
			</div>
			<div id="listaClientes">
				<div class="cabecalho-tabForm"><legend>Lista de Clientes</legend></div> 
				<div id="lista-Clientes" class="corpo-tabForm">
					
				</div>
			</div>
			<div id="canalCom">
				<div class="cabecalho-tabForm"><legend>Canal de Comunicação / Mensagens</legend></div> 
				<div class="corpo-tabForm"></div>
			</div>
		</div>
		<footer class="rodape">
			<p>&copy; Copyright - 2018 - <a href="../quemsomos.html" title="Quem Somos">TekaUda</a> - Todos direitos reservados</p>
		</footer>
	</div>
</body>
</html>