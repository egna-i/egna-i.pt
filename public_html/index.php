<?php
/* use https://api.ipify.org */
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}
?> 
<!DOCTYPE html>
<html>

<head>
    <title>Egna-i</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="max-age=120" />
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Egna-i Ltd">
    <meta name="application-name" content="Egna-i App">
    <meta name="keywords" content="Egna, Egna-i, lavandaria, secagem, engomadoria, self-service, automática, inovação">
    <meta name="description" content="Egna-i Ltd: Lavandaria self-service e Engomadoria">
    <meta name="viewport" content="initial-scale=1,width=device-width">
    <meta name="google-site-verification" content="O50yIc5qpsqYt1OmQUq29g3sIn94wywGRvTCuEsHWAQ" />


    <link rel=preload href="img/png/logo.png" as="image" />
    <link rel=preload href="img/png/googlemap.png" as="image" />
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="preload" href="css/vendor/normalize.min.css" />
    <link rel="preload" href="http://fonts.googleapis.com/css?family=Open+Sans:400" />
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
    <!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
    <link rel="alternate" type="application/rss+xml" title="Egna-i" href="rss/main.xml">
    <script src="js/vendor/jquery-2.1.0.min.js"></script>
    <!--<script src="js/angular.min.js"></script>-->

    <!--script src="js/config.min.js"></script-->
    <script>
        <?php include "js/config.min.js"; ?>
    </script>

    <!--script src="js/skel.min.js"></script-->
    <script>
        <?php include "js/skel.min.js"; ?>
    </script>

    <noscript>
        <link rel="stylesheet" href="css/skel-noscript.min.css" />
        <link rel="stylesheet" href="css/style.min.css" />
        <link rel="stylesheet" href="css/style-desktop.min.css" />
    </noscript>
    <link rel="preload" href="css/style.min.css" />
</head>

<body>

    <!-- Nav -->
    <div class="wrapper wrapper-style2 container">
        <nav id="nav">
            <ul class="row">
                <!--<li class="u">
                    <a href="#top"><img src="favicon.ico" alt="logo" /></a>
                </li>-->
                <li class="2u">
                    <a href="#">Egna</a>
                </li>
                <li class="2u">
                    <a href="#selfservice">Self-service</a>
                </li>
                <li class="2u">
                    <a href="#customservices">Personalizados</a>
                </li>
                <li class="2u">
                    <a href="#map">Localização</a>
                </li>
                <li class="2u">
                    <a href="#contact">Contactos</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Top -->
    <div class="wrapper wrapper-style1 wrapper-first">
        <article class="container top" id="top">
            <div class="row">
                <div class="4u">
                    <span class="me image image-full">
                        <img src="img/png/logo.png" alt="logo" />
                    </span>
                </div>
                <div class="8u" itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness">
                    <header>
                        <h1>
                            <strong itemprop="name">Egna-i</strong>
                        </h1>
                    </header>
                    <p>Venha conhecer o nosso espaço na <span itemprop="location">Amadora</span> com serviços para o lar. Pode
                        tratar a sua roupa.
                    </p>
                    <a href="#selfservice" class="button">Serviços</a>
                    <a href="#pricing" class="button">Preçário</a>
                    <a href="#map" class="button">Localização</a>
                </div>
                <div class="12u">
                    <div class="slider">
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- self-service -->
    <div class="wrapper wrapper-style1">
        <article id="selfservice">
            <header>
                <h2>Self-service</h2>
                <span>Serviços de lavandaria e secagem self-service</span>
            </header>
            <div class="container">
                <div class="row">
                    <div class="6u">
                        <section class="">
                            <h3>Lavandaria</h3>
                            <p>Lave você mesmo a sua roupa a um preço simpático, com um horário alargado.</p>
                        </section>
                    </div>
                    <div class="6u">
                        <section class="">
                            <h3>Secagem</h3>
                            <p>Está mau tempo e não consegue secar a sua roupa em casa? Utilize as secadoras automáticas.</p>
                        </section>
                    </div>
                </div>
            </div>
            <footer>
                <p>Não tem tempo para esperar? Nós fazemos.</p>
                <a href="#customservices" class="button button-big">Serviços Personalizados</a>
            </footer>
        </article>
    </div>

    <!-- Custom Services -->
    <div class="wrapper wrapper-style1">
        <article id="customservices">
            <header>
                <h2>Serviços Personalizados.</h2>
                <span>Pode encontrar aqui um catálogo de serviços à sua medida que satisfaçam as necessidades do seu lar.</span>
            </header>
            <div class="container">
                <div class="row">
                    <div class="6u">
                        <section class="">
                            <h3>Tratamento de roupa</h3>
                            <p>Não tem tempo para esperar? Nós podemos lavar, secar e engomar a sua roupa com os nossos serviços.</p>
                        </section>
                    </div>
                    <div class="6u">
                        <section class="">
                            <h3>Engomadoria</h3>
                            <p>Além de lavar e secar pode ter a sua roupa engomada.</p>
                        </section>
                    </div>
                </div>
            </div>
            <footer>
                <p>Consulte em detalhe os nossos preços</p>
                <a href="#pricing" class="button button-big">Preçário</a>
            </footer>
        </article>
    </div>

    <!-- Pricing -->
    <div class="wrapper wrapper-style1">
        <article id="pricing">
            <header>
                <h2>Preçário</h2>
                <span>Preços em vigor salvo erro tipográfico. Para informações sobre as campanhas em vigor visite a nossa loja.</span>
            </header>

            <div class="container">
                <div class="row">
                    <div class="6u">
                        <section class="">
                            <h3>Self-Service</h3>
                            <table class="pricingtable">
                                <tr>
                                    <td class="pricingname">Lavagem 7Kg (máquina pequena)</td>
                                    <td class="pricingvalue">4,00
                                        <span class="fa fa-euro"></span>
                                    </td>
                                    <td class="pricingvalue">3,50
                                        <span class="fa fa-euro pricingremark1"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pricingname">Lavagem 16Kg (máquina grande)</td>
                                    <td class="pricingvalue">6,50
                                        <span class="fa fa-euro"></span>
                                    </td>
                                    <td class="pricingvalue">6,00
                                        <span class="fa fa-euro pricingremark1"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pricingname">Secagem</td>
                                    <td class="pricingvalue">1,80
                                        <span class="fa fa-euro"></span>
                                    </td>
                                    <td class="pricingvalue">1,50
                                        <span class="fa fa-euro pricingremark1"></span>
                                    </td>
                                </tr>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" style="text-align:left">
                                            <br/>
                                            <span>1 - Preços com cartão de fidelização. O cartão tem o custo de 10 euros sob forma de caução.</span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </section>
                    </div>
                    <div class="6u">
                        <section class="">
                            <h3>Serviço Lavandaria & Engomadoria</h3>
                            <span>Consulte os preços na nossa loja.</span>
                        </section>
                    </div>
                </div>
            </div>
            <footer>
                <p>Para algum esclarecimento pode contactar-nos</p>
                <a href="#contact" class="button button-big">Contactos</a>
            </footer>

        </article>
    </div>

    <div class="wrapper wrapper-style1">
        <article id="map" class="container small">
            <header>
                <h2>Localização @ Buraca</h2>
                <span>A nossa loja fica na freguesia de Águas Livres na Amadora, perto do nó de Pina Manique.</span>
            </header>
            <div>
                <div class="row" itemprop="place" itemscope itemtype="http://schema.org/Place">
                    <div class="6u">
                        <section class="bbox box-style1" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <h3>Endereço</h3>
                            <p>
                                <span itemprop="streetAddress">Praça Helena Vaz da Silva, nº 4A</span>
                                <span itemprop="postalCode">2610-304</span><span itemprop="addressLocality">Amadora</span>
                            </p>
                        </section>
                        <section class="bbox box-style1" itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
                            <h3>Coordenadas</h3>
                            <p>
                                <span itemprop="latitute">N 38°44'30.7"</span>
                                <span itemprop="longitude">W 09°12'46.6"</span>
                            </p>
                        </section>
                    </div>
                    <div class="6u">
                        <section class="bbox box-style1">
                            <h3>Mapa</h3>
                            <p>
                                <span>
                                    <a href="https://www.google.com/maps?t=m&amp;sll=38.7418544,-9.212935&amp;sspn=0.0064268,0.0109864&amp;q=Pra%C3%A7a+Helena+Vaz+da+Silva+4A&amp;output=classic&amp;dg=ntvo"><img alt="mapa" src="img/png/googlemap.png" /></a>
                                </span>
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- Contact -->
    <div class="wrapper wrapper-style1">
        <article id="contact" class="container small">
            <header>
                <h2>Contacte-nos</h2>
                <span>Para algum esclarecimento pode contactar-nos.</span>
            </header>
            <div>
                <div class="row">
                    <div class="4u" itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness">
                        <section class="bbox box-style1" itemprop="openingHours" datetime="Mon-Sun 08:00-22:00">
                            <h3>Horário</h3>
                            <p>
                                <span>Serviço Self-service: 08h00 às 22h00 todos os dias</span>
                            </p>
                        </section>
                    </div>
                    <div class="4u">
                        <section class="bbox box-style1">
                            <h3>Redes Sociais</h3>
                            <ul class="social">
                                <li class="facebook">
                                    <a href="https://www.facebook.com/pages/Egna-i/1400671466849736" class="fa fa-facebook">
                                        <span>Siga-nos no Facebook</span>
                                    </a>
                                </li>
                                <li class="rss">
                                    <a type="application/rss+xml" href="http://egna-i.pt" class="fa fa-rss">
                                        <span>Leitor de RSS</span>
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="4u">
                        <section class="bbox box-style1">
                            <h3>Emails</h3>
                            <p>
                                <a href="mailto:geral@egna-i.pt">geral[AT]egna-i.pt</a>
                            </p>
                            <h3>Telefones</h3>
                            <p>+351 915 043 028</p>
                        </section>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- Contact -->
    <div class="wrapper wrapper-style4 wrapper-last">
        <footer class="mainfooter">
            <ul id="copyright" class="copyright">
                <li>Copyright &copy; 2014 - 2020 Egna-i Ltd. Todos os direitos reservados</li>
                <li>Templates:
                    <a href="http://html5up.net/">HTML5 UP</a>
                </li>
            </ul>
        </footer>
    </div>
</body>

</html>