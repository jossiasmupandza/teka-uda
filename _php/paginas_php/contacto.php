<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Contacto | TekaUda</title>
	<link rel="shortcut icon" href="_imagens/favcon-tekauda.png" type="image/x-png"/>
	<link type="text/css" rel="stylesheet" href="_css/estilo.css">
	<link type="text/css" rel="stylesheet" href="_css/form.css">
	<link type="text/css" rel="stylesheet" href="_css/web-fonts-with-css/css/fontawesome-all.min.css">
	<script type="text/javascript" src="_javascript/validacoes.js"></script>
</head>
<body>

	<div class="barra_nav">
		<div class="cont_barra_nav">
			<nav>
				<p><a href="index.html">TekaUda</a></p>
				<ul>
					<li><a href="index.html">Inicio</a></li>
					<li><a href="cardapio.html">Cardápio</a></li>
					<li><a href="quemsomos.html">TekaUda</a></li>
					<li><a href="contacto.html">Contacto</a></li>
					<li><a href="entrar.html">Entrar ou Cadastrar</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="cabecalho">
		<div class="cont_cabecalho">
			<h1>Contacto</h1>
		</div>
	</div>
	
	<div class="container">
	
		<div class="directorio">
			<div class="cont_directorio">
				<p><a href="index.html" title="voltar para pagina principal">Home</a> / <span class="dir">Contacto</span></p>
			</div>
		</div>

		<div class="conteudo">
			<p>Entre em contato pelo formulário abaixo ou ligue para:
			<ul>
				<li>82-200-4000</li>
				<li>84-300-4000</li>
				<li>86-400-5000</li>
			</ul>
			Ou pelo nosso <b>e-mail</b>: tekauda@gmail.com
			</P>
			<div class="form_contacto">
			<?php 
				session_start();
				if(isset($_SESSION['tNomeC'])) {
					echo"<script>alert('Mensagem enviada, aguarde resposta por email!');</script>";
				}
			?>
			<form name="tContacto" id="cContacto" method="POST" action="_php/inserirDadosBD.php?acao=contacto" onsubmit="return validarFormContacto()">
				<fieldset>
					<legend><p>Formulário de Contacto</p></legend>
					<hr>
					<p>
						<label for="cNomeC">Nome</label><br>
						<input type="text" name="tNomeC" id="cNomeC" size="60" maxlength="50" placeholder="Seu nome">
					</p>
					<p>
						<label for="cMailC">E-mail<label><br>
						<input type="email" name="tMailC" id="cMailC" size="60" maxlength="50" placeholder="Seu email">
					</p>
						<label for="cTelC">Telefone</label><br>
						<input type="number" name="tTelC" id="cTelC" size="60" maxlength="9" min="820000000" max="879999999" placeholder="Seu numero de telefone">
					<p>
					<p>
						<label for="cAssC">Assunto</label><br>
						<select name="tAssC" id="cAssC">
							<option value="Sugestão">Sugestão</option>
							<option value="Comentário">Comentário</option>
							<option value="Reclamação">Reclamação</option>
							<option value="Outro">Outro</option>
						</select>
					</p>
					<p>
						<label for="cMensagem">Mensagem</label><br>
						<textarea name="tMensagem" id="cMensagem" cols="128" rows="15" placeholder="Escreva auqi a sua Mensagem"></textarea>
					</p>
					<p>
						<input type="submit" name="tEnviarC" id="cEnviarC" value="Enviar"> <input type="reset" name="tCancelarC" id="cCancelarC" value="Cancelar">
					</p>
				</fieldset>
			</form>
			</div>
		</div>
	</div>
	<div class="rodape">
		<div class="cont_rodape">
			<div class="nav_site">
				<div class="cont_nav_site">
					<h3>Navegue Pelo Site</h3>
					<hr>
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li><a href="cardapio.html">Cardápio</a></li>
						<li><a href="quemsomos.html">TekaUda</a></li>
						<li><a href="contacto.html">Contacto</a></li>
						<li><a href="entrar.html">Entrar ou Cadastrar</a></li>
					</ul>
				</div>
			</div>
			<div class="cardapio_rodape">
				<div class="cont_cardapio_rodape">
					<h3>Nosso Cardápio</h3>
					<hr>
					<ul class="listaCardapio2">
						<li><a href="cardapio.html#p1">Sanduíche Mix </a></li>
						<li><a href="cardapio.html#p2">Sanduíche Big Duplo</a></li>
						<li><a href="cardapio.html#p3">Sanduíche Filé Mignon</a></li>
						<li><a href="cardapio.html#p4">Onion Melt Burguer </a></li>
						<li><a href="cardapio.html#p5">Picanha Onion Rings </a></li>
						<li><a href="cardapio.html#p6">Monstro Burguer </a></li>
						<li><a href="cardapio.html#p7">Mac & Cheese Frango </a></li>
						<li><a href="cardapio.html#p8">Alla Norma </a></li>			
						<li><a href="cardapio.html#p17">Salada Caesar</a></li>
						<li><a href="cardapio.html#p18">Salada da Casa</a></li>
						<li><a href="cardapio.html#p19">Salada Carpaccio</a></li>
						<li><a href="cardapio.html#p20">Salada Frango</a></li>
						<li><a href="cardapio.html#p21">Salada Mega Light</a></li>
					</ul>
					<ul class="listaCardapio1">
						<li><a href="cardapio.html#p11">Matapa</a></li>
						<li><a href="cardapio.html#p12">frango com amendoim</a></li>
						<li><a href="cardapio.html#p13">Galinhada Moçambicana</a></li>
						<li><a href="cardapio.html#p15">Feijoada à Moda Do Ibo</a></li>
						<li><a href="cardapio.html#p14">Camarões com Leite de Côco</a></li>
						<li><a href="cardapio.html#p9">Pesto com Peito de Frango</a></li>
						<li><a href="cardapio.html#p10">Ao gorgonzola com tiras de alcatra </a></li>
						<li><a href="cardapio.html#p16">Camarão Gratinado com Leite de coco</a></li>
					</ul>
				</div>
			</div>
			<div class="entre_contacto">
				<div class="cont_entre_contacto">
					<h3>Entre em Contacto/Siga-nos</h3>
					<hr>
					<ul>
						<li><a href="http://facebook.com" target="blank"><i class="fab fa-facebook-square"></i></a></li>
						<li><a href="http://" target="blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="contacto.html"><i class="far fa-envelope"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="barra_rodape">
				<div class="cont_barra_rodape">
					<p> &copy; Copyright - 2018 - TekaUda - Todos direitos reservados</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>