<?php
include_once("conn/conn.php");


$sql = "SELECT * FROM configuracoes_site";
$query = mysqli_query($conn, $sql);
$config = mysqli_fetch_assoc($query);





//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

//Selecionar todos os cursos da tabela
$result = "SELECT * FROM imoveis ";

$resultado = mysqli_query($conn, $result);

//Contar o total de cursos
$total = mysqli_num_rows($resultado);

//Seta a quantidade de cursos por pagina
$quantidade_pg = 8;

//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total / $quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg * $pagina) - $quantidade_pg;


$sql = "SELECT * FROM imoveis limit $incio, $quantidade_pg";
$query = mysqli_query($conn, $sql);
$search = mysqli_fetch_assoc($query);

if (isset($_POST['Buscar'])) {
    $consulta = $_POST['campo'];

    $sql = "SELECT * FROM imoveis WHERE cidade LIKE '%$consulta%' OR codigo LIKE '%$consulta%' OR bairro LIKE '%$consulta%' OR tipo LIKE '%$consulta%' OR valor LIKE '%$consulta%'  ";
    $query = mysqli_query($conn, $sql);
    $search = mysqli_fetch_assoc($query);
}


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
                <li class="nav-item active">
                    <a href="imoveis.php" class="nav-link" href="venda"><i class="fa fa-eye fa-pulse fa-1x fa-fw"></i>Imóveis</a>
                </li>
                <li class="nav-item">
                    <a href="contato.php" class="nav-link"><i class="fa fa-envelope fa-1x fa-fw"></i>Contato</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Começo do search (busca)-->
    <div class="container p-2 text-muted bg-success">
        <div class="text-center h1 text-white">Busca Avançada</div>

        <div class="form-row align-items-center">
            <form class="form-row col-md-12" action="imoveis.php" method="POST">
                <div class="col-md-8">
                    <input name="campo" id="campo" class="form-control" placeholder="Busca por categorias ex Casa, bairro, cidade etc...">
                </div>
                <div class="col-md-4">
                    <input type="submit" id="Buscar" name="Buscar" class="form-control" name="Buscar">
                </div>
            </form>
        </div>
        <p></p>
    </div>
    <div class="container">
        <div class="col-md-12">
            <h1 class="text-center text-body">Imóveis para Locação</h1>
        </div>
    </div>
    <!--comeco  da campanha do site (Class conatiner)-->

    <div class="container">

        <div class="row form-group">
            <?php do { ?>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <h6 class="card-body text-center  text-primary">
                            Codigo <?php echo utf8_encode($search['codigo']); ?></h6>
                        <h2 class="card-body text-center bg-success text-white"><?php echo utf8_decode($search['cidade']); ?></h2>
                        <h3 class="card-text text-center text-primary"><?php echo utf8_decode($search['bairro']); ?></h3>
                        <img class="rounded img-fluid mx-auto d-block  bg-primary  active" src="img/imoveis/<?php echo $search['imagem1']; ?>" alt="">
                        <h5 class="text-center alert alert-heading"><?php echo utf8_decode($search['tipo']); ?></h5>
                        <h5 class="text-center alert alert-heading">R$:<?php echo utf8_decode($search['valor']); ?></h5>
                        <a href="imoveis_detalhes.php?codigo=<?php echo $search['codigo']; ?>" class="btn btn-info btn-sm">Veja
                            mais detalhes...</button></a>

                    </div>
                </div>
            <?php } while ($search = mysqli_fetch_assoc($query)); ?>


        </div>
        <div class="container col-md-4">
            <?php
            //Verificar a pagina anterior e posterior
            $pagina_anterior = $pagina - 1;
            $pagina_posterior = $pagina + 1;
            ?>
            <nav class="Page navigation">
                <ul class="pagination">

                    <li class="page-item">
                        <?php

                        if ($pagina_anterior != 0) { ?>
                            <a class="page-link" href="imoveis.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        <?php } else { ?>

                        <?php }  ?>
                    </li>
                    <?php
                    //Apresentar a paginacao
                    for ($i = 1; $i < $num_pagina + 1; $i++) { ?>
                        <li class="page-item">
                            <a class="page-link " href="imoveis.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php } ?>
                    <li class="page-item">
                        <?php
                        if ($pagina_posterior <= $num_pagina) { ?>
                            <a class="page-link" href="imoveis.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        <?php } else { ?>

                        <?php }  ?>


                    </li>
                </ul>
            </nav>
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

    <script>
        $(document).ready(function() {

            var clickEvent = false;
            $('#myCarousel').carousel({
                interval: 4000
            }).on('click', '.list-group li', function() {
                clickEvent = true;
                $('.list-group li').removeClass('active');
                $(this).addClass('active');
            }).on('slid.bs.carousel', function(e) {
                if (!clickEvent) {
                    var count = $('.list-group').children().length - 1;
                    var current = $('.list-group li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if (count == id) {
                        $('.list-group li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        })

        $(window).load(function() {
            var boxheight = $('#myCarousel .carousel-inner').innerHeight();
            var itemlength = $('#myCarousel .item').length;
            var triggerheight = Math.round(boxheight / itemlength + 1);
            $('#myCarousel .list-group-item').outerHeight(triggerheight);
        });
    </script>

    <script>
        $(document).ready(function() {

            $.getJSON('cidades_bairros.json', function(data) {
                var items = [];
                var options = '<option value="">Selecione a Cidade...</option>';
                $.each(data, function(key, val) {
                    options += '<option value="' + val.nome + '">' + val.nome + '</option>';
                });
                $("#cidade").html(options);

                $("#cidade").change(function() {

                    var bairro = '';
                    var str = "";

                    $("#cidade option:selected").each(function() {
                        str += $(this).text();
                    });

                    $.each(data, function(key, val) {
                        if (val.nome == str) {
                            $.each(val.bairro, function(key_city, val_city) {
                                bairro += '<option value="' + val_city + '">' + val_city + '</option>';
                            });
                        }
                    });
                    $("#bairro").html(bairro);

                }).change();

            });

        });
    </script>
</body>

</html>