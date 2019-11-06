<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="description" content="Associação de Cegos e Deficientes Visuais ACDV." />

    <meta charset="UTF-8">
    <title>ACDV - Associação de Cegos e Deficientes Visuais</title>

    <link rel="icon" href="../imagens/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="../imagens/fiveicon.ico">
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/botaobootstrap.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/bootstrap-colunas.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/fontenormal.css" type="text/css" media="screen">

    <!-- Contraste -->
    <link rel="alternate stylesheet" type="text/css" href="../css/css_contraste.css" title="altocontraste" id="altocontraste" />
    <link rel="alternate stylesheet" type="text/css" href="../css/fontegrande.css" title="fontegrande" id="fontegrande" />
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
                            <img src="../imagens/alto_contraste.png" alt="Alto Contraste" title="Selecionar alto contraste" style="margin-right: 5px; border:none; vertical-align:middle;" /></a>
                        <a href="#" tabindex="6" onclick="setActiveStyleSheet('style','altocontraste'); return false;">
                            <img src="../imagens/contraste_normal.png" alt="Contraste Normal" title="Selecionar contraste normal" style="margin-right: 5px; vertical-align:middle; border:none;" /></a>
                    </div>
                    <div class="right">
                        <span style="margin-left: 10px; display:inline;"><a href="../acessibilidadedestesite.php" class="cz" accesskey="3" tabindex="7">Acessibilidade deste site (ALT + 3)</a></span>
                        <span style="margin-left: 30px; display:inline;"><a href="../mapadosite.php" class="cz" accesskey="5" tabindex="8">Mapa do site (ALT + 5)</a></span></div>
                </div><!-- Fecha Max Width -->
            </div><!-- Fecha Acessibilidade -->
            <div id="menu">
                <ul>
                    <li><a href="../index.php" tabindex="9">PÁGINA INICIAL</a></li>
                    <li><a href="../quemsomos.php" tabindex="10">QUEM SOMOS</a></li>
                    <li><a href="../noticias.php" tabindex="11">NOTÍCIAS</a></li>
                    <li><a href="../atividades.php" tabindex="12">ATIVIDADES</a></li>
                    <li><a href="../doar.php" tabindex="13">DOAR</a></li>
                    <li><a href="../contato.php" accesskey="4" tabindex="14">CONTATO <span style="font-size: 0.8em">(ALT + 4)</span></a></li>
                </ul>
            </div><!-- Fecha Menu -->
        </div><!-- Fecha Top -->
        <div class="maxwidth">
            <!--============================== header =================================-->
            <header>
                <div class="divimg">
                    <div class="textotop">"O poder da web est&aacute; em sua universalidade. <br />Acesso para todos, independente de defici&ecirc;ncia, &eacute; um aspecto essencial."<br />
                        <span class="destaque">Tim Berners-Lee, inventor da World Wide Web</span></div>
                    <h1><img src="../imagens/faixatop2.png" width="1440" height="344" class="faixavisual" alt="Logo do projeto sobre um fundo azul com pontos ligados em rede." /></h1>
                </div>
            </header>
            <!--============================== content =================================-->
            <div id="conteudopag">
                <div class="col span_2_of_3">
                    <span class="breadcrumb"><span class="negrito">Você está em: &nbsp;</span>
                        <a href="../index.php">Página Inicial</a> &nbsp; &gt; &nbsp; Notícias</span>
                </div><!-- Fecha Col -->
                <!-- INTRODUÇÃO -->
                <div class="section group">
                    <div class="col span_1_of_2">
                        <h2>Notícias</h2>
                    </div><!-- Fecha Col -->
                    <div class="jobs">
                        <img src="../imagens/noticia3.jpg" alt="Menino usando um óculos de realidade virtual" width="500" height="386" class="fotonoticias" />
                        <a href="" class="noticia">
                            <h3 class="jobs1">Conheça ideias incríveis de startups que ajudam pessoas com deficiência</h3>
                            <p>
                            Segundo dados do Instituto Brasileiro de Geografia e Estatística (IBGE), 45 milhões de 
                            brasileiros possuem algum tipo de deficiência, o que corresponde a quase 25% da população 
                            total do país. Cabe à tecnologia, que tem facilitado a vida das pessoas em geral, trazer
                            inovações para tornar a vida das pessoas com deficiência a melhor possível. E temos boas 
                            novas: a inclusão digital desse público tem se mostrado cada vez mais ampla.
                            No Brasil, ainda há muito caminho a percorrer para ajudar nichos específicos, como os de 
                            quem aprendeu sem escutar, sem enxergar, com autismo, déficit de atenção etc. “Mesmo assim 
                            temos tentado. Batemos na porta de vários desenvolvedores explicando a necessidade, mas 
                            ainda não houve interesse real. Talvez porque os produtos já existentes no mercado já 
                            atendem a uma massa significativa e vendem muito a ponto de não despertar interesse nessa 
                            extensão do benefício para atender a uma fatia menor que é a população com deficiência. 
                            Eles não se negam a fazer de cara, mas na prática não nos atendem”.                            
                            <br/>                            
                            </p>                            
                            <p><strong>
                            Leitor digital
                            </p></strong>
                            <img src="../imagens/noticia33.webp" alt="Menino usando um óculos de realidade virtual" width="500" height="386" class="fotonoticias" />
                            <p>
                            Neste ano, alunos do sétimo ano, Matheus Sousa, Rafael Gomes e Lucas Yamada criaram um 
                            leitor digital para dar autonomia a pessoas com deficiência visual na leitura de textos 
                            digitais que não foram escritos em Braille. Por meio de um circuito de arduíno, o leitor 
                            digital recebe comandos utilizando o código Morse que transforma o alfabeto português 
                            em Braille. A partir dessa base, a codificação das palavras é registrada por pinos que 
                            se levantam simultaneamente para quem é cego poder tocá-los e fazer a leitura do texto. 
                            Os mesmos pinos emitem sons em uma determinada sequência, representando cada letra do 
                            Braille, criando assim, a opção de ouvir a descrição do documento.<br/>
                            “O nosso projeto quer mostrar que uma pessoa com deficiência visual ou cega pode ser 
                            autônoma se tiver acesso a recursos mais diversificados, e não ficar restrita apenas 
                            com obras públicas em Braille", diz Matheus, um dos alunos, que deseja aplicar o 
                            projeto em bibliotecas públicas de São Paulo.
                            </p>
                            <p><strong>
                            Reservador de vagas
                            </p></strong>
                            <img src="../imagens/noticia34.webp" alt="Menino usando um óculos de realidade virtual" width="500" height="386" class="fotonoticias" />
                            <p>
                            Um grande problema no cotidiano de pessoas com dificuldade de locomoção é chegar em shoppings, 
                            bancos ou supermercados e não encontrar as vagas prioritárias, pois, em várias ocasiões, já 
                            foram ocupadas por quem não precisa. Para ajudar na solução deste problema recorrente, a Came 
                            do Brasil, uma empresa de produtos para automação de acesso, trouxe para o país o Unipark, 
                            uma barreira eletrônica instalada dentro da vaga e, por controle remoto, pode ser acionado 
                            para levantar e impedir que um veículo não autorizado estacione no local.<br/>
                            “O Unipark é ideal para reservar o estacionamento e impedir que a pessoa que realmente necessite 
                            da vaga não tenha nenhuma à disposição. Atualmente até os shoppings estão multando quem para em 
                            vaga prioritária. Este sistema evita isso. O carro com o cartão para vagas de deficientes ou de 
                            idosos pode ser identificado por um guarda ou mesmo pelo sistema de câmera. Quando o veículo 
                            chegar próximo da vaga, o sistema é acionado e abaixa a cancela”, explica o Marco Barbosa, 
                            diretor da empresa.
                            </p>
                            <p><strong>
                            Rastreador de obstáculos
                            </p></strong>
                            <img src="../imagens/noticia35.webp" alt="Menino usando um óculos de realidade virtual" width="500" height="386" class="fotonoticias" />
                            <p>
                            O dispositivo VibSense, que está em fase de desenvolvimento pela startup VibEye, funciona como 
                            um complemento para a tradicional bengala guia, ao avisar uma pessoa com deficiência visual da 
                            existência de obstáculos aéreos. O equipamento é formado por um cilindro fino de aproximadamente 
                            dez centímetros, com um clip, que permite que seja colocado no bolso de uma camisa, pendurado 
                            em um colar ou, até mesmo, acoplado a um boné. A proximidade de obstáculos aéreos é detectada 
                            por um sensor, que envia um sinal a uma pulseira vibratória, no braço do usuário. Assim, ele 
                            é avisado da ocorrência de uma situação potencialmente perigosa no seu caminho e pode evitá-la. 
                            A guia consegue identificar o que está no chão, como um poste ou uma placa, mas o VibSense é 
                            que possui a capacidade de avisar sobre obstáculos que estão suspensos, que não têm um vínculo 
                            com o solo. O dispositivo não substitui a bengala, mas se torna um complemento bastante eficiente, 
                            que visa melhorar muito a mobilidade de pessoas cegas ou com baixa visão pela cidade.
                            </p>
                            <br/><p><a href="https://canaltech.com.br/inovacao/conheca-ideias-incriveis-de-startups-que-ajudam-pessoas-com-deficiencia-152965/" target="_blank">
                            Fonte: Canaltech</p></a>

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
                                    <li><b><a href="../quemsomos.php" class="mapa">Quem Somos</b></a></li>
                                    <li><b><a href="../noticias.php" class="mapa">Notícias</b></a></li>
                                    <li><b><a href="../atividades.php" class="mapa">Atividades</b></a></li>
                                    <li><b><a href="../doar.php" class="mapa">Doar</b></a></li>
                                    <li><b><a href="../contato.php" class="mapa">Contato</b></a></li>
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