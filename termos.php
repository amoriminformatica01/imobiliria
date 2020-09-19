<?php
include_once("conn/conn.php");
$sql = "SELECT * FROM configuracoes_site";
$query = mysqli_query($conn, $sql);
$config = mysqli_fetch_assoc($query);




?>
<!doctype html>
<html lang="pt-br">

<head>
    <title><?php echo utf8_encode($config['title']); ?></title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="<?php echo utf8_encode($config['description']); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="<?php echo utf8_encode($config['keywords']); ?>">
    <meta name="author" content="Pedro Amorim, Edeveloper">
    <meta name="google-site-verification" content="<?php echo utf8_encode($config['google_site_verification']); ?>">
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="http://www.josivaneozelita.com.br">
    <!-- Required meta tags -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!--Menu  do site(Classes Navbar)-->
    <nav class="navbar navbar-expand-lg navStyle">
        <a class="brand-navbar" href="index.php"><img src="img/logo.jpg" alt="Logomarca" height="100px" width="180px"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
            <span><i class="fa fa-align-right iconStyle"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ml-auto navList">
                <li class="nav-item">
                    <a href="index.php" class="nav-link"><i class="fa fa-home  fa-1x fa-fw"></i>Home<span class="sr-only">(current)</span></a></li>
                <li class="nav-item">
                    <a href="sobre_nos.php" class="nav-link"><i class="fa fa-users fa-1x fa-fw"></i>Sobre Nós</a>
                </li>
                <li class="nav-item ">
                    <a href="imoveis.php" class="nav-link" href="venda"><i class="fa fa-eye  fa-1x fa-fw"></i>Imóveis</a>
                </li>
                <li class="nav-item">
                    <a href="contato.php" class="nav-link"><i class="fa fa-envelope fa-1x fa-fw"></i>Contato</a>
                </li>
            </ul>
        </div>
    </nav>



    <!--comeco  da campanha do site (Class conatiner)-->




    <div class="container">
        <h1 class="text-center text-body">Termos de Uso</h1>
    </div>
    <div class="container">

        <div class="row form-group">
            <div class="col-md-12">



                <h3 class="text-center text-body">DEFINIÇÕES</h3>
                <p>SITE: é a empresa proprietária do portal http://www.Josivaneozelitaimóveis.com.br.</p>
                <p>Josivan Sousa & Ozelita Santos Corretores de Imóveis: é o portal cujo endereço é http://www.Josivaneozelitaimóveis.com.br, com todos os recursos relacionados a este.</p>
                <p>USUÁRIO(S): são as pessoas que acessam o Josivan Sousa & Ozelita Santos Corretores de Imóveis.</p>
                <p>Este documento visa informar as responsabilidades, deveres e obrigações que todo USUÁRIO assume ao acessar Josivan Sousa & Ozelita Santos Corretores de Imóveis.</p>
                <p>O USUÁRIO deve ler com atenção os termos abaixo antes de acessar ou usar o SITE, pois o acesso ou uso deste implica em concordância com tais termos. O SITE e os demais participantes deste portal somente fornecerão ao USUÁRIO informações e serviços mediante expressa concordância aos termos, condições e informações aqui contidas, assim como aos demais documentos incorporados ao mesmo por referência. O

                    uso do Site significa a total concordância com tais termos, condições e informações.</p>
                <p>O SITE atua como disponibilizador de anúncios advindos de Clientes, como Intermediário nas negociações e consultoria.</p>
                <h3 class="text-center text-body">LIMITAÇÃO DE USO</h3>
                <p>O USUÁRIO poderá acessar, utilizar e imprimir materiais deste portal para seu uso pessoal e não-comercial.
                    O USUÁRIO não poderá copiar, distribuir, transmitir, exibir, reproduzir, modificar, publicar, licenciar, criar trabalho derivado,
                    colocar e/ou usar em outra página da Internet, transferir ou vender qualquer informação.</p>

                <h3 class="text-center text-body">PROPRIEDADE INTELECTUAL, DIREITOS AUTORAIS E MARCAS</h3>
                <p>Todo o material do Site (a sua apresentação e "layout", marcas, logotipos, produtos, sistemas, denominações de
                    serviços e outros materiais), incluindo programas, bases de dados, imagens, arquivos ou materiais de qualquer
                    outra espécie e que têm contratualmente autorizadas as suas inserções neste portal, é protegido pela legislação
                    de Propriedade Intelectual, sendo de titularidade do SITE, suas afiliadas, fornecedores ou clientes. A reprodução,
                    distribuição e transmissão de tais materiais não são permitidas sem o expresso consentimento por escrito do SITE
                    ou do respectivo titular, especialmente para fim comercial ou econômico.</p>
                <p>O uso indevido de materiais protegidos por propriedade intelectual (direito autoral,
                    marcas comerciais, patentes etc.) apresentados no SITE será caracterizado como infração da legislação pertinente,
                    sujeitando o infrator às ações judiciais cabíveis e dando ensejo à respectiva indenização aos prejudicados, seja ao SITE,
                    seja a terceiros, sem prejuízo de perdas e danos e honorários advocatícios.</p>


            </div>
        </div>



    </div>







    <!--Fim da  campanha do site (Class buscar)-->
    <!--Começo do Rodape (Classesfooter)-->
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="index"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="sobre_nos.php"><i class="fa fa-angle-double-right"></i>Sobre Nós</a></li>
                        <li><a href="contato.php"><i class="fa fa-angle-double-right"></i>Contato</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Imóveis</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="imoveis.php"><i class="fa fa-angle-double-right"></i>Imóveis</a></li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Política da Privacidade</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="termos.php"><i class="fa fa-angle-double-right"></i>Termos de Uso</a></li>
                        <li><a href="politica.php"><i class="fa fa-angle-double-right"></i>Política de cookies</a></li>
                    </ul>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.facebook.com/Josivan-Sousa-Ozelita-Santos-Corretores-de-Imoveis-841861672836250/"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p><i class="text-warning h7">Endereço:</i> Rua das Camélias, Nº64 Loja Residencial Praia Âncora - Rio das
                    Ostras - RJ</p>
                <p><i class="text-warning">Contato do Corretor:</i> Josivan Sousa creci (051628/RJ) Tel (22)99758-7727<i class="text-warning h7"> Email:</i> josivan.corretor@gmail.com</P>
                <p><i class="text-warning ">Contato da Corretora:</i> Ozelita Santos creci (064447/RJ) Tel (22)99702-1033<i class="text-warning h7"> Email:</i> ozelita01@outlook.com</P>
                <p class="h6">
                    <?Php echo date('Y'); ?> &copy Todos Os Direitos reservados a Josivan Sousa & Ozelita Santos Corretores De Imóveis. <a href="http://www.developersolucoesweb.com.br" target="_self"><img src="img/developerlogo.png" width="120px" heith="60px"></a></p>
            </div>


    </section>
    <!--Fim de rodapé (Classes footer)-->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>






</body>

</html>