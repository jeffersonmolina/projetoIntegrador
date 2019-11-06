<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta name="description" content="Projeto de criação de websites acessíveis Acesso para Todos, uma parceria entre as empresas ADEVA (Associação de Deficientes Visuais e Amigos), o escritório de design E-Hipermídia e a empresa de sistemas Web2Business." />

  <meta charset="UTF-8">
  <title>ACDV - Associado de Cegos e Deficientes Visuais</title>

  <link rel="icon" href="imagens/favicon.ico" />
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
    // 
    -->
  </script>

</head>

<body>
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <div id="container">

    <div id="top">
      <div id="acessibilidade" style="padding-bottom:0;">
        <div style="max-width:1440px; margin: 0 auto;">
          <div class="left"><a href="#conteudopag" class="cz" accesskey="1">Ir para o conte&uacute;do (ALT + 1)</a><a href="#menu" style="margin-left:30px;" class="cz" accesskey="2">Ir para o menu (ALT + 2)</a></div>

          <div class="center">
            <a href="#" class="tamfonte" onclick="setActiveStyleSheet('fontegrande','fontegrande'); return false;" id="aumentar" title="Aumentar Tamanho do Texto">A+</a>
            <a href="#" class="tamfonte" onclick="setActiveStyleSheet('fontenormal','fontegrande'); return false;" id="voltar" title="Tamanho do Texto Normal"> A-</a>
            <span style="margin-left: 30px; margin-right: 10px; display:inline;">Contraste</span><a href="#" onclick="setActiveStyleSheet('altocontraste','altocontraste'); return false;"><img src="imagens/alto_contraste.png" alt="Alto Contraste" title="Selecionar alto contraste" style="margin-right: 5px; border:none; vertical-align:middle;" /></a>
            <a href="#" onclick="setActiveStyleSheet('style','altocontraste'); return false;"><img src="imagens/contraste_normal.png" alt="Contraste Normal" title="Selecionar contraste normal" style="margin-right: 5px; vertical-align:middle; border:none;" /></a>
          </div>

          <div class="right">
            <span style="margin-left: 10px; display:inline;"><a href="acessibilidadedestesite.php" class="cz" accesskey="3">Acessibilidade deste site (ALT + 3)</a></span>
            <span style="margin-left: 30px; display:inline;"><a href="mapadosite.php" class="cz" accesskey="5">Mapa do site (ALT + 5)</a></span></div>
        </div><!-- Fecha Max Width -->
      </div><!-- Fecha Acessibilidade -->


      <div id="menu">
        <ul>
          <li><a href="index.php">PÁGINA INICIAL</a></li>
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

        <div id="conteudo">

          <!-- BREAD CRUMB -->
          <div class="section group">
            <div class="col span_2_of_3">
              <span class="breadcrumb"><span class="negrito">Você está em: &nbsp;</span> <a href="index.php">Página Inicial</a> &nbsp; &gt; &nbsp; Doar</span>
            </div><!-- Fecha Col -->
            <!-- INTRODUÇÃO -->
            <div class="section group">
              <div class="col span_1_of_2">
                <h2>Doação</h2>

              </div><!-- Fecha Col -->

              <!-- CONTEÚDO -->
              <div class="conteudopag">
                <div class="section group">
                  <div class="col span_2of_2">
                    <div class="section group">
                      <h3 class="pb-3">Por que ajudar a ACDV?</h3>
                      <div class="section group">
                        <div class="col span_1_of_2">
                          <div class="pr-2">
                            A <strong>ACDV</strong> oferece atividades artísticas e culturais gratuitas para crianças, jovens,
                            adultos e idosos com deficiência promovendo a sua efetiva participação na sociedade.
                            <p>
                              Nossas ações buscam priorizar as artes com e para todos, mantendo programas voltados à cultura
                              da infância e ao brincar inclusivo, assim como oferecendo formação artística e cultural para pessoas
                              com diferentes tipos de deficiência.
                            </p>
                          </div>
                        </div>
                        <div class="col span_1_of_2">
                          <div class="pl-2">
                            Trabalhamos de forma cooperativa e precisamos de pessoas que acreditam que os direitos humanos e os princípios universais como dignidade, igualdade e fraternidade são para todos.
                            <p align="center"><strong>Nos ajude a promover transformações!!</strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <img src="imagens/doar.jpg" alt="Doação" width="200" height="100" class="esquerda" />
                          </div>
                          <div class="col-6">
                            <h3>Doação em dinheiro</h3>
                            <p> Você pode fazer uma doação pontual ou doações mensais através de nossa conta bancária. </p>
                            <div class="col span_1_of_2">
                              <div class="doacao">
                                <strong>Banco Sicredi</strong><br />
                                <strong>Agência:</strong> 434<br />
                                <strong>Conta Poupança:</strong> 08878-1
                              </div>
                            </div>
                            <div class="col span_2_of_2">
                              <strong>Favorecido:</strong> Associação dos Cegos e Deficientes Visuais <br />
                              <strong>CNPJ: </strong>11.111.111/0001-01
                              <p>Caso necessite de recibo, por favor, encaminhe o comprovante da transação para o e-mail
                                <a href="mailto:acdvsm@yahoo.com.br">acdvsm@yahoo.com.br</a> que enviaremos o recibo para você.</p>
                            </div>
                          </div>
                        </div>
                        <h3 class="centro"> Faça a sua doação via Paypal clicando no botão abaixo: </h3>
                        <form action="https://www.paypal.com" method="post" target="_blank" class="centro">
                          <input type="hidden" name="cmd" value="" />
                          <input type="hidden" name="hosted_button_id" value="" />
                          <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" class="btn-doar" name="submit" title="Faça doações com o botão do PayPal" alt="Faça doações com o botão do PayPal" />
                          <img alt="" border="0" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1" height="1" />
                        </form>
                        <p class="centro">
                          <strong>
                            Contamos com a sua contribuição para promovermos as mudanças que queremos ver no mundo!!
                          </strong><br />
                        </p>
                      </div>
                    </div>
                  </div><!-- Fecha Col -->
                </div><!-- Fecha Section -->
              </div><!-- Fecha Conteúdo pag -->
            </div>
          </div>
        </div>
      </div><!-- Fecha Conteudo -->
      <!-- Fecha Conteúdo P&aacute;gina -->
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
      <!-- Fecha Max Width -->
      <!-- Fecha Container -->

</body>

</html>