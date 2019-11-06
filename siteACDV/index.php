<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta name="description" content="Associação de Cegos e Deficientes Visuais ACDV." />
	<meta charset="UTF-8">
	<title>ACDV - Associação de Cegos e Deficientes Visuais</title>
	<link rel="icon" href="imagens/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="imagens/fiveicon.ico">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/bootstrap-colunas.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/fontenormal.css" type="text/css" media="screen">
	<!-- Contraste -->
	<link rel="alternate stylesheet" type="text/css" href="css/css_contraste.css" title="altocontraste" id="altocontraste" />
	<link rel="alternate stylesheet" type="text/css" href="css/fontegrande.css" title="fontegrande" id="fontegrande" />
	<script type="text/javascript" src="scripts/styleswitcher.js"></script>	
	<script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
	<!-- limpa input -->
	<script type="text/javascript">
		<!--
		function clearDefault(el) {
			if (el.defaultValue == el.value) el.value = ""
		}
	</script>
</head>
<body>
	<div id="container">
		<div id="top">
			<div id="acessibilidade" style="padding-bottom:0;">
				<div style="max-width:1440px; margin: 0 auto;">
					<div class="left">
						<a href="#conteudopag" class="cz" accesskey="1" tabindex="1">Ir para o conte&uacute;do (ALT + 1)</a>
						<a href="#menu" style="margin-left:30px;" class="cz" accesskey="2" tabindex="2">Ir para o menu (ALT + 2)</a></div>

					<div class="center">
						<a href="#" class="tamfonte" onclick="setActiveStyleSheet('fontegrande','fontegrande'); return false;" id="aumentar" title="Aumentar Tamanho do Texto" tabindex="3">A+</a>
						<a href="#" class="tamfonte" onclick="setActiveStyleSheet('fontenormal','fontegrande'); return false;" id="voltar" title="Tamanho do Texto Normal" tabindex="4"> A-</a>
						<span style="margin-left: 30px; margin-right: 10px; display:inline;">Contraste</span>
						<a href="#" onclick="setActiveStyleSheet('altocontraste','altocontraste'); return false;">
							<img src="imagens/alto_contraste.png" alt="Alto Contraste" title="Selecionar alto contraste" style="margin-right: 5px; border:none; vertical-align:middle;" /></a>
						<a href="#" onclick="setActiveStyleSheet('style','altocontraste'); return false;">
							<img src="imagens/contraste_normal.png" alt="Contraste Normal" title="Selecionar contraste normal" style="margin-right: 5px; vertical-align:middle; border:none;" /></a>
					</div>
					<div class="right">
						<span style="margin-left: 10px; display:inline;"><a href="acessibilidadedestesite.php" class="cz" accesskey="3">Acessibilidade deste site (ALT + 3)</a></span>
						<span style="margin-left: 30px; display:inline;"><a href="mapadosite.php" class="cz" accesskey="5">Mapa do site (ALT + 5)</a></span></div>
				</div><!-- Fecha Max Width -->
			</div><!-- Fecha Acessibilidade -->
			<div id="menu">
				<ul>
					<li><a href="quemsomos.php">QUEM SOMOS</a></li>
					<li><a href="noticias.php">NOTÍCIAS</a></li>
					<li><a href="atividades.php">ATIVIDADES</a></li>
					<li><a href="doar.php">DOAR</a></li>
					<li><a href="contato.php" accesskey="4">CONTATO <span style="font-size: 0.8em">(ALT + 4)</span></a></li>
				</ul>
			</div><!-- Fecha Menu -->
		</div><!-- Fecha Top -->
		<div class="maxwidth">
			<!--============================== header =================================-->
			<header>
				<div class="divimg">
					<div class="textotop">"O poder da web est&aacute; em sua universalidade. <br />Acesso para todos, independente de defici&ecirc;ncia, &eacute; um aspecto essencial."<br />
						<span class="destaque">Tim Berners-Lee, inventor da World Wide Web</span></div>

					<h1><img src="imagens/faixatop2.png" width="1440" height="344" class="faixavisual" alt="Logo do projeto sobre um fundo azul com pontos ligados em rede." /></h1>
				</div>
			</header>
			<!--============================== content =================================-->
			<div id="conteudopag">
				<!--==== Notícias ====-->
				<div class="titulo">
					<h2><a href="#" class="menu">NOTÍCIAS</a></h2>
				</div>
				<div class="noticiashome">
					<a href="noticias/noticia1.php" class="azesc">
						<img src="imagens/noticia1.jpg" alt="Clodoaldo Silva - Blog Parapan de Lima 2019" width="500" height="386" class="fotoportfoliohome" />
						Microsoft cria ferramenta de realidade virtual para deficientes visuais<br /></a>
						<a href="oticias/noticia1.php" class="noticia">
						<p>A realidade virtual (RV) tem sido usada para diversos objetivos, como para o desenvolvimento de videogames mais imersivos. 
						Porém, a Microsoft resolveu explorar outras possibilidades que essa tecnologia tem a oferecer, por meio do Canetroller.</p></a>
				</div>
				<div class="noticiashome">
					<a href="noticias/noticia2.php" class="azesc">
						<img src="imagens/noticia2.jpg" alt="Clodoaldo Silva - Blog Parapan de Lima 2019" width="500" height="386" class="fotoportfoliohome" />
						Conheça funcionalidades para pessoas com deficiência visual<br /></a>
						<a href="noticias/noticia2.php" class="noticia">
						<p>A Microsoft anunciou melhorias e novos recursos para pessoas com deficiência visual ou cegueira completa, 
							dentro do Windows 10. As ferramentas do sistema permitem, por exemplo, que o usuário utilize comandos de 
							voz para manusear o PC.</p></a>
				</div>
				<p>
					<div style="clear:both;"></div>
					<p>
						<p>

							<!--==== Atividades ====-->
							<p><br /></p>
							<p></p>

							<div class="titulo">
								<h2 class="text-uppercase">
									<a href="" class="menu">
										Atividades
									</a>
								</h2>
							</div>

							<div class="row" id="atividade">

								<div class="col-xs-12 col-sm-6 col-md-2">
									<div class="img-container">
										<a href="atividades.php" class="atividade">
											<img src="imagens/pcDeficienteVisual.png" width="350" height="223" class="img-responsive" alt="Amazon Brasil" />
											<p class="text-center">Informática</p>
										</a>
									</div>
								</div>


								<div class="col-xs-12 col-sm-6 col-md-2">
									<div class="img-container">
										<a href="atividades.php" class="atividade">
											<img src="imagens/braile.jpg" width="350" height="223" class="img-responsive" alt="Associação Paulista dos Amigos da Arte por meio da Secretaria da Cultura, Governo do Estado de São Paulo" />
											<p class="text-center">Braile</p>
										</a>
									</div>
								</div>


								<div class="col-xs-12 col-sm-6 col-md-2">
									<div class="img-container">
										<a href="atividades.php" class="atividade">
											<img src="imagens/artesanato.jpg" width="350" height="223" class="img-responsive" alt="Clodoaldo Silva - Tubarão Paralímpico" />
											<p class="text-center">Artesanato</p>
										</a>
									</div>
								</div>



								<div class="col-xs-12 col-sm-6 col-md-2">
									<div class="img-container">
										<a href="atividades.php" class="atividade">
											<img src="imagens/culinaria.jpg" width="350" height="223" class="img-responsive" alt="Favily Produtos Médico-Hospitalares" />
											<p class="text-center">Culinária</p>
										</a>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-md-2">
									<div class="img-container">
										<a href="atividades.php" class="atividade">
											<img src="imagens/crianca.png" width="350" height="223" class="img-responsive" alt="Fundação 1º de Maio" />
											<p class="text-center">Crianças</p>
										</a>
									</div>
								</div>
							</div>
							<p><br /></p>
							<p></p>
							<div style="clear:both;"></div>
							<p><br /></p>

			</div><!-- Fecha Conteúdo P&aacute;gina -->
			<!--============================== footer =================================-->
			<footer>
				<div class="bg-info text-dark">
					<div class="container">
						<div class="row">
							<div class="col-md-3 p-3">
								<h1 class="mb-4"><b>Sobre</b></h1>
								<p><b>Entidade sem fins lucrativos, que atende pessoas com deficiência visual e baixa visão,
										realizando atividades de caráter assistencial, educacional e cultural.</b></p>
							</div>
							<div class="col-md-3 p-3">
								<h1 class="mb-4"><b>Mapa do Site</b></h1>
								<ul class="footer">
									<li><b><a href="quemsomos.php" class="mapa">Quem Somos</b></a></li>
									<li><b><a href="noticias.php" class="mapa">Notícias</b></a></li>
									<li><b><a href="atividades.php" class="mapa">Atividades</b></a></li>
									<li><b><a href="#" class="mapa">Doar</b></a></li>
									<li><b><a href="contato.php" class="mapa">Contato</b></a></li>
								</ul>
							</div>
							<div class="col-md-3 p-3">
								<h1 class="mb-4"><b>Fale Conosco</b></h1><br />
								<b>(55)&nbsp;3307-8804</b><br />
								<b>acdvsm@yahoo.com.br</b><br />
								<b>Rua Manoel Ribas, 1924</b><br />
								<b>Santa Maria / RS</b><br />
							</div>
							<div class="col-md-3 p-3">
								<h1 class="mb-4"><b>Redes Sociais</b></h1>
								<p>
									<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Facdvsmrs%2F&amp;tabs=header&amp;width=340&amp;height=154&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="340" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mt-3">
								<p class="text-center">© Copyright 2019 - All rights reserved. </p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- Fecha Max Width -->
	</div><!-- Fecha Container -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>