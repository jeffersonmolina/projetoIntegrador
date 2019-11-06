<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="description" content="Associação de Cegos e Deficientes Visuais ACDV." />

    <meta charset="UTF-8">
    <title>ACDV - Associação de Cegos e Deficientes Visuais</title>

    <link rel="icon" href="imagens/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="imagens/fiveicon.ico">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/botaobootstrap.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/bootstrap-colunas.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/fontenormal.css" type="text/css" media="screen">
    

    <!-- Contraste -->
    <link rel="alternate stylesheet" type="text/css" href="css/css_contraste.css" title="altocontraste" id="altocontraste" />
    <link rel="alternate stylesheet" type="text/css" href="css/fontegrande.css" title="fontegrande" id="fontegrande" />
    <script type="text/javascript" src="scripts/styleswitcher.js"></script>
    <script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
    <script type="text/javascript">
        function setActiveStyleSheet(title, id) {
            var i, a, main;
            for (i = 0;
                (a = document.getElementsByTagName("link")[i]); i++) {
                if (a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && a.getAttribute("id") == id) {
                    a.disabled = true;
                    if (a.getAttribute("title") == title)
                        a.disabled = false;
                }
            }
        }
    </script>
    <!-- limpa input -->
    <script type="text/javascript">
        <!--
        function clearDefault(el) {
            if (el.defaultValue == el.value) el.value = ""
        }
        // 
        -->
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
                        <a href="#" tabindex="5" onclick="setActiveStyleSheet('altocontraste','altocontraste'); return false;">
                            <img src="imagens/alto_contraste.png" alt="Alto Contraste" title="Selecionar alto contraste" style="margin-right: 5px; border:none; vertical-align:middle;" /></a>
                        <a href="#" tabindex="6" onclick="setActiveStyleSheet('style','altocontraste'); return false;">
                            <img src="imagens/contraste_normal.png" alt="Contraste Normal" title="Selecionar contraste normal" style="margin-right: 5px; vertical-align:middle; border:none;" /></a>
                    </div>
                    <div class="right">
                        <span style="margin-left: 10px; display:inline;"><a href="acessibilidadedestesite.php" class="cz" accesskey="3" tabindex="7">Acessibilidade deste site (ALT + 3)</a></span>
                        <span style="margin-left: 30px; display:inline;"><a href="mapadosite.php" class="cz" accesskey="5" tabindex="8">Mapa do site (ALT + 5)</a></span></div>
                </div><!-- Fecha Max Width -->
            </div><!-- Fecha Acessibilidade -->
            <div id="menu">
                <ul>
                    <li><a href="index.php" tabindex="9">PÁGINA INICIAL</a></li>
                    <li><a href="quemsomos.php" tabindex="10">QUEM SOMOS</a></li>
                    <li><a href="noticias.php" tabindex="11">NOTÍCIAS</a></li>
                    <li><a href="atividades.php" tabindex="12">ATIVIDADES</a></li>
                    <li><a href="doar.php" tabindex="13">DOAR</a></li>
                    <li><a href="contato.php" accesskey="4" tabindex="14">CONTATO <span style="font-size: 0.8em">(ALT + 4)</span></a></li>
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
                <div class="col span_2_of_3">
                    <span class="breadcrumb"><span class="negrito">Você está em: &nbsp;</span>
                        <a href="index.php">Página Inicial</a> &nbsp; &gt; &nbsp; Notícias</span>
                </div><!-- Fecha Col -->
                <!-- INTRODUÇÃO -->
                <div class="section group">
                    <div class="col span_1_of_2">
                        <h2>Notícias</h2>
                    </div><!-- Fecha Col -->
                    <div class="jobs">
                        <a href="noticias/noticia1.php" alt="Menino usando um óculos de realidade virtual" title="Menino usando um óculos de realidade virtual">
                            <img src="imagens/noticia1.jpg" alt="Clodoaldo Silva - Blog Parapan de Lima 2019" width="500" height="386" class="fotonoticias" />
                        </a>
                        <a href="noticias/noticia1.php" class="noticia">
                            <h3 class="jobs1">Microsoft cria ferramenta de realidade virtual para deficientes visuais</h3>
                            <p>
                                A realidade virtual (RV) tem sido usada para diversos objetivos, como para o desenvolvimento de
                                videogames mais imersivos. Porém, a Microsoft resolveu explorar outras possibilidades que essa
                                tecnologia tem a oferecer, por meio do Canetroller. A ferramenta foi criada especialmente para
                                deficientes visuais, funcionando como uma espécie de bengala branca tátil adaptada para RV.

                                Esse último objeto é usado a fim de facilitar a mobilidade desse público em áreas internas e
                                externas.
                            </p>
                        </a>
                    </div><!-- Fecha Jobs -->

                    <!--==== Noticia 2 ====-->
                    <div class="jobs">
                        <a href="noticias/noticia2.php" alt="Testando o alt" title="Testando o title">
                            <img src="imagens/noticia2.jpg" alt="Logo da Microsoft com um fundo azul" width="500" height="386" class="fotonoticias" />
                        </a>
                        <a href="#" class="noticia">
                            <h3 class="jobs1">Conheça funcionalidades para pessoas com deficiência visual</h3>
                            <p>
                                A Microsoft anunciou melhorias e novos recursos para pessoas com deficiência visual
                                ou cegueira completa, dentro do Windows 10. As ferramentas do sistema permitem, por
                                exemplo, que o usuário utilize comandos de voz para manusear o PC, tenham textos lidos
                                em voz alta e, também, uma super lupa para pessoas que possuem bem pouca visão.
                            </p>
                        </a>
                    </div><!-- Fecha Jobs -->

                    <div class="jobs">
                        <a href="noticias/noticia3.php" alt="Testando o alt" title="Testando o title">
                            <img src="imagens/noticia3.jpg" alt="Testando o alt" width="500" height="386" class="fotonoticias" />
                        </a>
                        <a href="noticias/noticia3.php" class="noticia">
                            <h3 class="jobs1">Conheça ideias incríveis de startups que ajudam pessoas com deficiência</h3>
                            <p>
                            Segundo dados do Instituto Brasileiro de Geografia e Estatística (IBGE), 45 milhões de brasileiros 
                            possuem algum tipo de deficiência, o que corresponde a quase 25% da população total do país. Cabe 
                            à tecnologia, que tem facilitado a vida das pessoas em geral, trazer inovações para tornar a vida 
                            das pessoas com deficiência a melhor possível. E temos boas novas: a inclusão digital desse público 
                            tem se mostrado cada vez mais ampla.
                            </p>
                        </a>
                    </div><!-- Fecha Jobs -->

                    <!--==== Noticia 4 ====-->
                    <div class="jobs">
                        <a href="noticias/noticia4.php" alt="Testando o alt" title="Testando o title">
                            <img src="imagens/noticia4.jpg" alt="Clodoaldo Silva - Blog Parapan de Lima 2019" width="500" height="386" class="fotonoticias" />
                        </a>
                        <a href="noticias/noticia4.php" class="noticia">
                            <h3 class="jobs1">Cão-guia representa inclusão social de pessoa com deficiência visual</h3>
                            <p>
                            Eles são os olhos daqueles que não podem enxergar. Dão segurança, autonomia e promovem a 
                            inclusão social das pessoas que apresentam algum tipo de deficiência visual. Embora a 
                            história do cão-guia do Brasil tenha um início recente, hoje existem aproximadamente 
                            200 cães-guia em atividade no país. O número é ainda muito baixo, diante da necessidade 
                            das mais de 6,5 milhões de pessoas com deficiência. Entretanto, existem algumas entidades 
                            que tem trabalhado para que essas demandas sejam, aos poucos, atendidas.
                            </p>
                        </a>
                    </div><!-- Fecha Jobs -->

                    <div class="jobs">
                        <a href="noticias/noticia5.php" alt="Testando o alt" title="Testando o title">
                            <img src="imagens/noticia5.jpg" alt="Clodoaldo Silva - Blog Parapan de Lima 2019" width="500" height="386" class="fotonoticias" />
                        </a>
                        <a href="noticias/noticia5.php" class="noticia">
                            <h3 class="jobs1">Servidor com deficiência visual deverá ser movido para local próximo à residência</h3>
                            <p>
                            Isso sempre deverá acontecer quando demonstrada a existência de vaga e não houver prejuízo para a Administração Pública.
                            Servidor público do Distrito Federal com deficiência visual terá que ser movido para local próximo à residência. Isso 
                            sempre deverá acontecer quando demonstrada a existência de vaga e não houver prejuízo para a Administração Pública. 
                            Segundo o Tribunal de Justiça do Distrito Federal e Territórios o entendimento foi firmado pela 6ª Turma Cível do TJDFT.
                            </p>
                        </a>
                    </div><!-- Fecha Jobs -->
                    <div class="jobs">
                        <a href="noticias/noticia6.php" alt="Testando o alt" title="Testando o title">
                            <img src="imagens/noticia6.jpg" alt="Clodoaldo Silva - Blog Parapan de Lima 2019" width="500" height="386" class="fotonoticias" />
                        </a>
                        <a href="noticias/noticia6.php" class="noticia">
                            <h3 class="jobs1">Com audiodescrição, fãs com deficiência visual curtem o dia do metal no Rock in Rio</h3>
                            <p>
                            Eles podem não enxergar o que acontece no palco como a maioria das pessoas. Mas a emoção e o palpitar 
                            do coração com os riffs de guitarras vindas do Palco Mundo provocam a mesma euforia de outros fãs. 
                            É assim que deficientes visuais — e portadores de outras deficiências — aproveitam o dia do metal 
                            no Rock in Rio. Dois deles, ambos oriundos do estado do Piauí, se destacavam pela animação: com 
                            fones de ouvidos, eles gesticulavam e balançavam as cabeças durante a apresentação potente do 
                            Sepultura, primeira banda a se apresentar no palco principal da Cidade do Rock, na sexta-feira.
                            </p>
                        </a>
                    </div><!-- Fecha Jobs -->                    
                </div>
                <div style="clear:both;"></div>
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
                                    <li><b><a href="doar.php" class="mapa">Doar</b></a></li>
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

</body>

</html>