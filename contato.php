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
                <li class="nav-item active">
                    <a href="contato.php" class="nav-link"><i class="fa fa-envelope fa-1x fa-pulse fa-fw"></i>Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--comeco  da campanha do site (Class conatiner)-->






    <div class="container">

        <h1 class="text-center text-success text-capitalize">Entre em contato</h1>
        <div class="col-md-12">

            <form class=" form-group" action="mail.php" method="post">
                <fieldset>

                    <div class="form-group">
                        <label class="col-md-12 text-success" for="nome">Nome</label>
                        <div class="col-md-12">
                            <input id="nome" name="nome" placeholder="digitar nome completo" class="form-control input-md" required type="text">
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-md-12 col-form-label-lg text-success" for="email">Email</label>
                        <div class="col-md-12">
                            <input id="email" name="email" placeholder="digite um email válido" class="form-control input-md" required type="text">
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-md-12 text-success" for="tel">Tel</label>
                        <div class="col-md-12">
                            <input id="tel" name="tel" placeholder="digite o Telefone" class="form-control input-md" required type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 text-success" for="mensagem">Mensagem</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="mensagem" name="mensagem" placeholder="digite sua mensagem"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 text-success" for="singlebutton_enviar">Enviar</label>
                        <div class="col-md-12">
                            <button id="singlebutton_enviar" name="singlebutton_enviar" class="btn btn-primary">enviar</button>
                        </div>
                    </div>

                    <div class="container col-md-12 row">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3686.563644827282!2d-41.916994773319786!3d-22.483026259994578!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51913d9510f1e5b!2sJosivan+Sousa+%26+Ozelita+Santos+Corretores+de+Im%C3%B3veis!5e0!3m2!1spt-BR!2sbr!4v1561413322783!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>


                </fieldset>
            </form>


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
                        <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
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