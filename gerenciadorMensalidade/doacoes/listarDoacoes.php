<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gerenciador Mensalidades - ACDV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/fiveicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="body-bg">
    <div class="horizontal-main-wrapper">
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="../index.php"><img src="../assets/images/icon/logoMenu.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-9 clearfix text-right">
                        <div class="d-md-inline-block d-block mr-md-4">
                            <ul class="notification-area">
                                <li id="full-view"><i class="ti-fullscreen"></i></li>
                                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            </ul>
                        </div>
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="../assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Administrador<i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Sair &nbsp<i class="fa fa-sign-out" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="../index.php" tabindex="1" class="horizontal-menu"><i class="fa fa-tv"></i><span>Início</span></a>
                                    </li>
                                    <li>
                                        <a href="../associados/associado.php" tabindex="2"><i class="fa fa-group"></i><span>Associados</span></a>
                                    </li>
                                    <li>
                                        <a href="mensalidade.php" tabindex="3"><i class="fa fa-credit-card"></i><span>Mensalidades</span></a>
                                    </li>
                                    <li class="mega-menu">
                                        <a href="../doacoes/doacoes.php" tabindex="4"><i class="fa fa-money"></i><span>Doações</span></a>
                                    </li>
                                    <li class="mega-menu">
                                        <a href="../funcionario/funcionario.php" tabindex="5"><i class="ti-user"></i> <span>Funcionários</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-inner">
            <div class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th tabindex="1">Nome</th>
                                            <th tabindex="3">Data de pagamento</th>
                                            <th tabindex="5">Tipo de pagamento</th>
                                            <th tabindex="7">Valor de pagamento</th>
                                            <th tabindex="9">Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th tabindex="2">Supermercado da Ana</th>
                                            <th tabindex="4">05/10/2019</th>
                                            <th tabindex="6">Cartão</th>
                                            <th tabindex="8">R$ 600,00</th>
                                            <th tabindex="10">
                                                <a class="btn btn-warning" href="#" role="button">Editar <i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger" href="#" role="button">Excluir <i class="fa fa-trash"></i></a>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Anônimo</th>
                                            <th>14/10/2019</th>
                                            <th>Dinheiro</th>
                                            <th>R$ 250,00</th>
                                            <td>
                                                <a class="btn btn-warning" href="#" role="button">Editar <i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger" href="#" role="button">Excluir <i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Loja da Maria</th>
                                            <th>27/11/2019</th>
                                            <th>Dinheiro</th>
                                            <th>R$ 50,00</th>
                                            <td>
                                                <a class="btn btn-warning" href="#" role="button">Editar <i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger" href="#" role="button">Excluir <i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Padaria do João</th>
                                            <th>25/10/2019</th>
                                            <th>Dinheiro</th>
                                            <th>R$ 80,00</th>
                                            <td>
                                                <a class="btn btn-warning" href="#" role="button">Editar <i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger" href="#" role="button">Excluir <i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Anônimo</th>
                                            <th>08/11/2019</th>
                                            <th>Cartão</th>
                                            <th>R$ 4000,00</th>
                                            <td>
                                                <a class="btn btn-warning" href="#" role="button">Editar <i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger" href="#" role="button">Excluir <i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-area">
            <p>© ACDV 2019. Sistema gerenciador de mensalidades.</p>
        </div>
    </footer>
    </div>
    <!-- jquery  -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <!--Estilo dropdown-->
    <script src="../assets/js/metisMenu.min.js"></script>
    <!--Transforma DIV em barra de rolagem-->
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <!--MENU MOBILE-->
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>