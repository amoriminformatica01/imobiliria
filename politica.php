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

    </div>
    <div class="container">

        <div class="row form-group">
            <div class="col-md-12">
                <div class="mb-8  ">
                    <h1 class="text-center ">Termos De Uso De Cookies</h1>
                    <h3 class="text-center">O que são cookies</h3>
                    <p>Cookies são arquivos-texto gerados pelo site e transferidos para seu computador sendo
                        armazenados pelos programas de navegação (“Browsers”). Em geral, os Cookies são utilizados para uma
                        otimização de sua experiência de navegação junto ao nosso site, quando permitido pelo nível de segurança
                        configurado por você junto ao seu navegador. Sempre que o seu navegador estiver assim configurado,
                        utilizaremos cookies conforme acima explicado.</p>
                    <p>Os cookies utilizados pelo website têm como finalidade identificar as tendências de navegação
                        do usuário, buscando aprimorar e personalizar seus acessos futuros, tais como, páginas navegadas ou links
                        clicados. Quaisquer dos cookies utilizados não são usados para executar programas, tampouco possibilitam
                        a infecção de seu computador com vírus ou programas maliciosos.</p>
                    <p>Desta forma, recomendamos que você configure seu programa de navegação no nível de segurança desejado
                        antes de navegar em nosso site em todos os computadores e dispositivos que deseje utilizar.</p>
                    <h3 class="text-center text-body">Como usamos os cookies</h3>
                    <p>Os cookies utilizados no site atendem aos requisitos</p>
                    legais e são enquadrados nas seguintes categorias:</p>

                    <p>• COOKIES ESTRITAMENTE NECESSÁRIOS</p>
                    <p>• COOKIES DE DESEMPENHO</p>
                    <p>• COOKIES DE FUNCIONALIDADE</p>
                    <p>• COOKIES DE SEGMENTAÇÃO</p>

                    <p> Cookies Estritamente Necessários: São aqueles cookies que permitem a você navegar pelo site e usar recursos essenciais,
                        como áreas seguras, por exemplo. Esses cookies não guardam quaisquer informações sobre você que possam ser usadas em
                        ações de comunicação de produto ou serviço ou para lembrar as páginas navegadas no site.</p>

                    <p> Para o que nós os usamos:</p>

                    <p>• Identificá-lo como um usuário conectado.</p>
                    <p>• Lembrar de informações que você digitou previamente em eventuais formulários de pedidos para pré-popular formulários.</p>
                    <p>• Certificar-se de que você se conecta ao serviço correto em nosso site quando fizermos alguma mudança na forma
                        como ele funciona.</p>

                    <p> COOKIES DE DESEMPENHO: Os cookies de "Desempenho" coletam informações sobre como você usa o nosso website, por
                        exemplo, quais páginas você visita, se elas possuem erros, erros em formulários e etc. Esses cookies não coletam
                        quaisquer informações que possam identificá-lo. Toda a informação coletada é realizada de forma codificada, anônima
                        e somente usada para ajudar a melhorar a forma como o nosso site funciona, entender o que interessa
                        aos nossos usuários e medir a eficácia da nossa comunicação.</p>

                    <p> Para o que nós os usamos:</p>

                    <p>• Fornecer estatísticas sobre como nosso site é utilizado.</p>
                    <p>• Verificar a eficiência da nossa comunicação, não nos utilizando dessa informação para direcionamento de anúncios
                        quando em visita a outros sites.</p>
                    <p>• Prestar informações aos nossos parceiros que um dos nossos visitantes também visitou seu site. Isso permite
                        que nossos parceiros melhorem seus sites, mas nós não permitimos que eles se utilizem dessa informação para fins
                        comerciais ou de publicidade.</p>
                    <p>• Ajudar na melhoria de nosso site pela medição de erros que eventualmente possam ocorrer.</p>
                    <p> • Realizar melhorias e aperfeiçoamentos em nosso site decorrentes do comportamento de navegação de nossos usuários.</p>

                    <p>COOKIES DE FUNCIONALIDADE: Os cookies de "Funcionalidade" são usados para fornecer serviços ou para lembrar definições de
                        navegações de forma a melhorar sua visita.</p>

                    <p> Para o que nós os usamos:</p>

                    <p> • Lembrar eventualmente das configurações que você aplicou, como layout, tamanho do texto, preferências e cores.</p>
                    <p> • Lembrar eventualmente se já perguntamos se você deseja preencher uma pesquisa para que, dessa forma, não precisemos
                        perguntar reiteradas vezes.</p>


                    <p> COOKIES DE SEGMENTAÇÃO: Os cookies de "Segmentação" estão ligados aos serviços prestados por terceiros, tais como,
                        por exemplo, botões de "Like" e botões de "Compartilhar" contidos em outros sites que não o nosso site . O
                        terceiro fornece esses serviços por reconhecer que você visitou nosso site.</p>

                    <p>Para o que nós os usamos:</p>

                    <p> • Para conectar-se a redes sociais como o Facebook, que, por serem terceiros e pelos quais não termos controle,
                        poderão, posteriormente, utilizar as informações sobre a sua visita para direcionar publicidade de seu interesse
                        para você em outros sites.</p>
                    <p> • Para fornecermos às agências de publicidade informações sobre a sua visita e para que estas possam eventualmente
                        apresentar lhe anúncios pertinentes ao seu perfil de navegação.</p>

                    <p> Em relação aos cookies acima mencionados, você pode controlar se serão usados ou não (vide tópico abaixo “
                        Como Desativar os Cookies”), mas seu bloqueio pode nos impedir de oferecer alguns serviços ou
                        prejudicar a boa navegação junto ao nosso site.</p>
                    <h3 class="text-center text-body"> Como desativar os cookies</h3>
                    <p> Normalmente as configurações para desativar os cookies estão presentes nas "opções" ou o menu
                        "Preferências" do seu navegador. Para saber melhor consulte as opções de ajuda de seu navegador.
                        Abaixo você encontrará alguns links para os navegadores mais conhecidos:</p>

                    <p> • Internet Explorer</p>
                    <p> • Firefox</p>
                    <p> • Chrome</p>
                    <p> • Safari Web e iOS</p>

                    <p> Os cookies praticados pelo site são seguros e necessários a boa utilização das ferramentas
                        e opções oferecidas pelo site. Caso você opte por não aceita-los e/ou executá-los eventualmente o comportamento
                        de algumas destas ferramentas e alguns dos dispositivos oferecidos poderão ter suas funções comprometidas
                        durante a sua visita.</p>
                    <h3 class="text-center text-body">Recomendações finais</h3>
                    <p> É importante que os Usuários internautas verifiquem os termos de Uso de Cookies de todos os sites nos quais
                        eventualmente navegue, buscando informar-se sempre de que formas coletarão e tratarão as suas informações.</p>



                </div>
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