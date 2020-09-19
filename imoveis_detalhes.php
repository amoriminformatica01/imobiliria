<?php
include_once("conn/conn.php");
$codigo = $_GET['codigo'];
$sql = "SELECT * FROM imoveis WHERE codigo='$codigo'";
$query_locacao = mysqli_query($conn, $sql);
$locacao = mysqli_fetch_assoc($query_locacao);





?>
<!doctype html>
<html lang="pt-br">

<head>
    <title><?php echo utf8_encode($locacao['descricao']); ?> <?php echo utf8_encode($locacao['bairro']); ?> <?php echo utf8_encode($locacao['cidade']); ?></title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="<?php echo utf8_encode($locacao['descricao']); ?> <?php echo utf8_encode($locacao['bairro']); ?> <?php echo utf8_encode($locacao['cidade']); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="<?php echo utf8_encode($locacao['descricao']); ?> <?php echo utf8_encode($locacao['bairro']); ?> <?php echo utf8_encode($locacao['cidade']); ?>">
    <meta name="author" content="Pedro Amorim, Edeveloper">
    <meta name="google-site-verification" content="<?php echo utf8_encode($locacao['descricao']); ?> <?php echo utf8_encode($locacao['bairro']); ?> <?php echo utf8_encode($locacao['cidade']); ?>">
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
                <li class="nav-item.php">
                    <a href="sobre_nos.php" class="nav-link"><i class="fa fa-users fa-1x fa-fw"></i>Sobre Nós</a>
                </li>
                <li class="nav-item active">
                    <a href="imoveis.php" class="nav-link" href="venda"><i class="fa fa-eye fa-pulse fa-1x fa-fw"></i>Imóveis</a>
                </li>
                <li class="nav-item">
                    <a href="contato.php" class="nav-link"><i class="fa fa-envelope fa-1x fa-fw"></i>Contato</a>
                </li>
            </ul>
        </div>
    </nav>



    <!--comeco  da campanha do site (Class conatiner)-->





    <div class="container">
        <div class="row form-group">
            <div class="col-md-8">
                <div class="card mb-4 shadow-sm">



                    <img class="rounded img-fluid mx-auto d-block  bg-primary  active" src="img/imoveis/<?php echo $locacao['imagem1']; ?>" alt="">



                </div>
            </div>



            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <h6 class="card-body text-center  text-primary">Codigo do Imóvel <?php echo utf8_decode($locacao['codigo']); ?></h6>

                    <h4 class="card-text text-center text-primary">Bairro:<?php echo utf8_decode($locacao['bairro']); ?></h4>
                    <h2 class="text-center text-danger alert-heading"><?php echo utf8_decode($locacao['tipo']); ?></h2>
                    <h5 class="text-center alert alert-heading">R$: <?php echo utf8_decode($locacao['valor']); ?></h5>
                    <h2 class="text-center  alert-heading"><?php echo utf8_decode($locacao['cidade']); ?></h2>
                    <h3 class="text-center  alert-heading">Descrição</h3>
                    <h5 class="text-center  alert-heading"><?php echo utf8_decode($locacao['descricao']); ?></h5>
                </div>
            </div>




            <table class="table-responsive">
                <thead class="thead-">
                    <tr>
                        <th scope="col"><a href="img/imoveis/<?php echo $locacao['imagem1']; ?>"><img src="img/imoveis/<?php echo $locacao['imagem1']; ?>" alt="" width="200" class="rounded "></a></th>
                        <th scope="col"><a href="img/imoveis/<?php echo $locacao['imagem2']; ?>"><img src="img/imoveis/<?php echo $locacao['imagem2']; ?>" alt="" width="200" class="rounded "></a></th>
                        <th scope="col"><a href="img/imoveis/<?php echo $locacao['imagem3']; ?>"><img src="img/imoveis/<?php echo $locacao['imagem3']; ?>" alt="" width="200" class="rounded "></a></th>
                        <th scope="col"><a href="img/imoveis/<?php echo $locacao['imagem4']; ?>"><img src="img/imoveis/<?php echo $locacao['imagem4']; ?>" alt="" width="200" class="rounded "></a></th>
                        <th scope="col"><a href="img/imoveis/<?php echo $locacao['imagem5']; ?>"><img src="img/imoveis/<?php echo $locacao['imagem5']; ?>" alt="" width="200" class="rounded "></a></th>
                        <th scope="col"><a href="img/imoveis/<?php echo $locacao['imagem6']; ?>"><img src="img/imoveis/<?php echo $locacao['imagem6']; ?>" alt="" width="200" class="rounded "></a></th>
                        <th scope="col"><a href="img/imoveis/<?php echo $locacao['imagem7']; ?>"><img src="img/imoveis/<?php echo $locacao['imagem7']; ?>" alt="" width="200" class="rounded "></a></th>
                        <th scope="col"><a href="img/imoveis/<?php echo $locacao['imagem8']; ?>"><img src="img/imoveis/<?php echo $locacao['imagem8']; ?>" alt="" width="200" class="rounded "></a></th>
                        <th scope="col"><a href="img/imoveis/<?php echo $locacao['imagem9']; ?>"><img src="img/imoveis/<?php echo $locacao['imagem9']; ?>" alt="" width="200" class="rounded "></a></th>
                        <th scope="col"><a href="img/imoveis/<?php echo $locacao['imagem10']; ?>"><img src="img/imoveis/<?php echo $locacao['imagem10']; ?>" alt="" width="200" class="rounded "></a></th>
                    </tr>
                </thead>
            </table>
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