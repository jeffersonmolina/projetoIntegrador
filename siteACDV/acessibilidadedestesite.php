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
    <!-- MASCARA TELEFONE -->
    <script type="text/javascript">
        /* Máscaras ER */
        function mascara(o, f) {
            v_obj = o
            v_fun = f
            setTimeout("execmascara()", 1)
        }

        function execmascara() {
            v_obj.value = v_fun(v_obj.value)
        }

        function mtel(v) {
            v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }

        function id(el) {
            return document.getElementById(el);
        }
        window.onload = function() {
            id('telefone').onkeyup = function() {
                mascara(this, mtel);
            }
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
                    <span class="breadcrumb"><span class="negrito">Você está em: &nbsp;</span> <a href="index.php">
                            Página Inicial</a> &nbsp; &gt; &nbsp; Acessibilidade deste Site</span>
                </div><!-- Fecha Col -->
                <!-- INTRODUÇÃO -->
                <div class="section group">
                    <div class="col span_1_of_2">
                        <h2>Acessibilidade deste site</h2>

                    </div><!-- Fecha Col -->
                </div>

                <div class="container">
                    <p><br></p>
                    <div class="titulo">
                        <h3>Ferramentas de Acessibilidade</h3>
                        <hr>
                    </div>
                    <!-- Start Audima Widget Injection -->
                    <div id="audimaWidget"></div>
                    <script src="//audio.audima.co/audima-widget.js"></script>
                    <!-- End Audima Widget Injection -->


                    A <span class="negrito"> ACDV,</span> além de seguir os melhores princípios e regras de design para manter sua funcionalidade simples e intuitiva e sua aparência <span class="italico">clean</span> e atraente, foi desenvolvido de forma a atender diferentes tipos de deficiências como baixa visão, daltonismo e mobilidade reduzida, a partir de ferramentas que permitem:
                    <p>
                        <div class="qdroacesso" style="padding-top: 15px; padding-bottom: 15px;">
                            <article>
                                <ul>
                                    <li>Aumentar e diminuir o tamanho das fontes;</li>
                                    <li>Alterar o contraste de cores das páginas;</li>
                                    <li>Acessar links de atalho ao conteúdo principal; e</li>
                                    <li>Navegar via teclado.</li>
                                </ul>
                            </article>
                        </div><!-- Fecha Quadro serv -->

                        <div style="clear:both;"></div>
                        <p></p>

                        Em qualquer página do site é possível acessar os conteúdos pelas teclas de atalho citadas abaixo:
                        <p>
                            <div class="qdroacesso" style="padding-top: 15px; padding-bottom: 15px;">
                                <span class="negrito">Teclando-se ALT + 1</span>, chega-se diretamente ao começo do conteúdo principal da página;<br>
                                <span class="negrito">Teclando-se ALT + 2</span>, chega-se ao início do menu principal do site, que leva a todas as páginas internas;<br>
                                <span class="negrito">Teclando-se ALT + 3</span>, chega-se a esta página (Acessibilidade deste site), que possui a explicação destas funções;<br>
                                <span class="negrito">Teclando-se ALT + 4</span>, chega-se a página de contato do site, onde você poderá tirar dúvidas ou deixar suas sugestões.<br>
                                <span class="negrito">Teclando-se ALT + 5</span>, chega-se a página de mapa do site, onde você poderá acessar toda a estrutura de links do site.<br>
                            </div>

                            <div style="clear:both;"></div>
                            <p>
                                Estes atalhos podem ser utilizados nos navegadores <span class="negrito">Internet Explorer e Chrome.</span><br>
                                No <span class="negrito">Firefox</span>, no lugar de Alt + número, deve-se teclar simultaneamente Alt + Shift + número.<br>
                                No <span class="negrito">Opera</span>, deve-se teclar Shift + Escape + número.
                            </p>

                </div>
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

</body>

</html>