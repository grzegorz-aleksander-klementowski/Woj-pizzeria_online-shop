<?php 
    require_once "connect.php"; 
    session_start();
?>
<!DOCTYPE html>
    <html lang="pl">
        <head>
            <meta charset="utf-8">
            <!--RESPONSIVE-->
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!--META INFORMATION-->
            <title>Menu</title>
            <meta name="description" content="Pizzomania to najlepsza restauracja w Wojcieszowie! Pizza na miejcu i na wynos.">
            <meta name="keywords" content="restauracja, pizzeria, pizzomania, Wojceiszów, piwo, pizza, jedzenie">
            <meta name="author" content="Grzegorz Aleksander Klementowski">
            
            <!--COMPATIBILITY-->
            <meta http-equiv="X-Ua-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!--CSS & FONTS-->
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="css/page.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="css/icons/font/flaticon.css">
            <link rel="stylesheet" type="text/css" href="css/icons/font/flaticon-pizza-foot-drink-salad/font/flaticon.css">
            <link rel="stylesheet" type="text/css" href="css/icons/font/facebook/css/fontello.css">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
            <!--jquery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://github.com/flesler/jquery.scrollTo.git"></script>
            <script type="text/javascript" src="main.js"></script>
            <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
            <![endif]-->
            <!--SOURCES THEMES
            <a href="https://pixnio.com/pl/">darmowe obrazy</a>
            <a href="<a href="https://pixnio.com/pl/">darmowe obrazy</a>
            <a href="<a href="https://pixabay.com/pl/photos/pizza-tabela-żywności-3870780/">darmowe obrazy</a>
            INDEX CONTENT PICTURES SORUCES
            Obraz <a href="https://pixabay.com/pl/users/marketingastronomicoc-6892240/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2906902"> Camilo Antonio Moreno</a> z <a href="https://pixabay.com/pl/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2906902"> Pixabay</a>
            https://fshoq.com/pl/darmowe-zdjecia/p/189/pomidory-i-bazylia-na-stole-w-kuchni
            ICONS
            <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
            -->
        </head>
        <body class="bg-dark text-light" onload="main();" onscroll="readScroll();">
            
            <div class="facebook-bottom" onclick="window.open('https://www.facebook.com/PizzoManiaWojcieszow/', '_blank');">
                <i class="demo-icon icon-facebook">&#xf09a;</i>
            </div>
            
            <nav class="navbar navbar-expand-sm navbar-expand-md bg-dark navbar-dark fixed-top nav-border">
                    <a href="index.php" class="navbar-brand text-danger">
                        <i class="glyph-icon flaticon-food-and-restaurant"></i> 
                        <strong>PizzoMania</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav text-center">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="menu.php" class="nav-link">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a href="godziny_otwarcia.php" class="nav-link">Godziny otwarcia</a>
                            </li>
                            <li class="nav-item">
                                <a href="galeria.php" class="nav-link">Galeria</a>
                            </li>
                            <li class="nav-item">
                                <a href="kontakt.php" class="nav-link">Kontact</a>
                            </li>
                        </ul>
                    </div>
            </nav>
            
            <header>
                <div class="text-center header" style="background-color:rgba(255,0,0,0.5);">
                    <div id="header-image" class="header-image">
                        <div class="header-opacity">
                            <div class="header-text">
                                <h1>Masz manię na pizzę?</h1>
                                <h3>Zapraszamy do Pizzomani!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <main>
                <div id="order-collect-box" class="border">
                    <div id="scrollbox">
                        <table id="table-order">
                            <caption id="top-order-table">Twoje zamówienie:</caption>
                        </table>
                    </div>
                    <button id="buy-now-buttom" class="btn btn-danger">0,00 zł</button>
                </div>

                <div class="container">
                    <div class="row">
                        
                        <header class="col-md-12 jumbotron bg-danger text-light text-center">
                            <h2>
                                Odkryj
                            </h2>
                            <h1>
                                Nasze Menu
                            </h1>
                        </header>
                        
                        <nav class="col-md-12 navbar-menu">
                            <ul>
                                <li id="pizza-menu-button" onclick="changeDishType(0)"><span class="icon-dish"><i class="glyph-icon flaticon-pizza"></i></span>  Pizza</li>
                                <li id="homedish-menu-buttom" onclick="changeDishType(1)"><span class="icon-dish"><i class="glyph-icon flaticon-dish"></i></span> Dania domowe</li>
                                <li id="salad-menu-buttom" onclick="changeDishType(2)"><span class="icon-dish"><i class="glyph-icon flaticon-salad"></i></span> Sałatki</li>
                                <li id="drink-menu-buttom" onclick="changeDishType(3)"><span class="icon-dish"><i class="glyph-icon flaticon-wine-glass"></i></span> Napoje</li>
                                <li id="add-menu-buttom" onclick="changeDishType(4)"><span class="icon-dish"><i class="glyph-icon flaticon-green-sause"></i></span> Dodatki</li>
                            </ul>
                        </nav>
                    </div>
                    
                    <div id="dish" class="row">

                        <?php include "dishes.php"; ?>
                        
                    </div>
                    <div class="row">
                        <footer class="col-12 border-secondary text-center jumbotron bg-dark text-light footer border">
                            <div class="footer-header">
                                <h3>Nasze dania</h3>
                            </div>
                            <div>
                                <p>
                                    Przygotowujemy nasze pizze najlepiej jak potrafimy, z staranną dokładnością, sercem i wieloletnim doświadczeniem ze sprawdzonych przepisów, specjalnie dla ciebie.
                                </p>
                            </div>
                            <div class="footer-footer">
                                <strong>Serdecznie zapraszamy!</strong>
                            </div>
                        </footer>
                    </div>
                </div>
                
            </main>
            
            <footer class="text-center container-fluid" >
                <p>
                    &copy; 2020 Pizzomania | developer contact: <a href="mailto:grzegorz.klementowski@outlook.com" class="text-light">grzegorz.klementowski@outlook.com</a> SetWebUp Grzegorz Klementowski
                </p>
            </footer>

            <script type="text/javascript" src="main.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            
        </body>
    </html>