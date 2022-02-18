<!DOCKTYPR html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Longin | TekaUda</title>
	<link rel="shortcut icon" href="_imagens/favcon-tekauda.png" type="image/x-png"/>
	<link type="text/css" rel="stylesheet" href="_css/estilo.css">
	<link type="text/css" rel="stylesheet" href="_css/form.css">
	<link type="text/css" rel="stylesheet" href="_css/web-fonts-with-css/css/fontawesome-all.min.css">
	<script type="text/javascript" src="_javascript/validacoes.js"></script>
	<script type="text/javascript" src="_javascript/ajax.js"></script>
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
					<li id="entrarCad"><a href="entrar.html" >Entrar ou Cadastrar</a></li>
				</ul>
			</nav>
		</div>
	</div>
	
	<div class="cabecalho">
		<div class="cont_cabecalho">
			<h1>Entrar ou Cadastrar</h1>
		</div>
	</div>
	
	<div class="container">
	
		<div class="directorio">
			<div class="cont_directorio">
				<p><a href="index.html" title="voltar para pagina principal">Home</a> / <span class="dir">Login</span></p>
			</div>
		</div>
		
		<div class="cadastrar">
			<div id="cont_cadastrar">
				<h1>Quero me Cadastrar!</h1>
								
				<form name="tCadastroE" id="cCadastroE" method="POST" action="_php/inserirDadosBD.php?acao=cadCliente" onsubmit="return validarFormCadastro()">
					<fieldset id="cadEmail">
						<legend>
							<button name="tButCadE" id="cButCadE">
								<p class="msgBut">Cadastr-me</p>
							</button>
						</legend>
						<p>
							<label for="cNomeCad">Nome</label><br>
							<input type="text" name="tNomeCad" id="cNomeCad" size="30" maxlength="40" placeholder="Seu nome">
						</p>
						<p>
							<label for="cMailCad">E-mail</label><br>
							<input type="email" name="tMailCad" id="cMailCad" size="30" maxlength="40" placeholder="Seu e-mail">
						</p>
						<p>
							<label for="cTelF">Telefone</label><br>
							<input type="number" name="tTelF" id="cTelF" size="30" min="820000000" max="879999999" placeholder="Seu contacto">
						</p>
						<p>
							<label for="cGenero">Género</label><br>
							<select name="tGenero" id="cGenero" value="Genero">
								<option value="M">Masculino</option>
								<option value="F">Femenino</option>
								<option value="O">Outro</option>
							</select>
						</p>
						<p>
							<label for="cSenhaCad">Senha</label><br>
							<input type="password" name="tSenhaCad" id="cSenhaCad" size="30" maxlength="10" placeholder="Sua senha">
						</p>
						<p>
							<label for="cConSenha">Confirmar Senha</label><br>
							<input type="password" name="tConSenha" id="cConSenha" size="30" placeholder="Confirme sua senha">
						</p>
						
						<fieldset name="tNovTerm" class="cNovTerm">
							<p>
								<input type="checkbox" name="tNovidadesF" id="cNovidadesF"> <label for="cNovidadesF">Desejo receber todas as novidades do site no meu e-mail.</label><br>
								<input type="checkbox" name="tTermosF" id="cTermosF"> <label for="cTermos"> <label for="cTermosF">Aceito os <a href="termos_de_uso.html">termos de uso</a> do TekaUda.</label>
							</p>
						</fieldset>
						
						<p><input type="submit" name="tCadastrar" id="cCadastrarE" value="Cadastrar"></p> 
						</fieldset>
			
				</form>	
			</div>
		</div>
		<div id="linha_vertival"></div>
		<div class="entrar">
			<div id="cont_entrar">
				<h1>já sou Cadastrado!</h1>
				<?php
					session_start();
					if(isset($_SESSION["tSenhaEnt"])) {
						$t = $_GET["estado"];
						if($t==1)
							echo"<script>alert('Longin efectuado com sucesso!');</script>";
						else
							echo"<script>alert('Os dados de acesso não são validos!');</script>";			
					}
				?>
				<form name="tAcessarE" id="cAcessarE" method="POST" action="_php/consultarDadosBD.php?acao=secCliente" onsubmit="return validarAcesso()">	
					<fieldset id="acEmail">
						<legend>
							<button name="tButAcesE" id="cButAcesE" >
								<p class="msgBut">Acessar</p>
							</button>
						</legend>
						<p>
							<label for="cMailEnt">E-mail<label><br>
							<input type="text" name="tMailEnt" id="cMailEnt" size="30" maxlength="40" placeholder="Seu e-mail">
						</p>
						<p>
							<label for="cSenhaEnt">Senha</label><br>
							<input type="password" name="tSenhaEnt" id="cSenhaEnt" size="30" maxlength="10" placeholder="Sua senha">
						</p>
						<p>Esqueceu a senha, clique em <a href="recuperar_senha.html">recuperar Senha</a>!</p> 
						<input type="submit" name="tEntrarE" id="cEntrarE" size="30 maxlength="10 value="Entrar">
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