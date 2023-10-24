
<?php 


    function component_head()
    {
        $element = 
        '
        
            <meta charset="utf-8">
            <!--RESPONSIVE-->
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!--META INFORMATION-->
            <title>Pizzomania</title>
            <meta name="description" content="Pizzomania to najlepsza restauracja w Wojcieszowie! Pizza na miejcu i na wynos.">
            <meta name="keywords" content="restauracja, pizzeria, pizzomania, Wojceiszów, piwo, pizza, jedzenie">
            <meta name="author" content="Grzegorz Aleksander Klementowski">
            
            <!--COMPATIBILITY-->
            <meta http-equiv="X-Ua-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!--CSS & FONTS-->
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="css/icons/font/flaticon.css"> 
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
            <!--jquery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://github.com/flesler/jquery.scrollTo.git"></script>
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
        
        ';
        echo $element;
    }
    
    function component_nav()
    {
        $element = 
        '
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
                                <a href="kontakt.php" class="nav-link">Kontakt</a>
                            </li>
                        </ul>
                    </div>
            </nav>
        ';
        echo $element;
    }

    function component_page_header()
    {
        $element = 
        '<header>
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
        </header>';
        echo $element;
    }

    function component_footer()
    {
        $element =
        '
        <footer class="text-center container-fluid" >
                <p>
                    &copy; 2020 Pizzomania | developer contact: <a href="mailto:grzegorz.klementowski@outlook.com" class="text-light">grzegorz.klementowski@outlook.com</a> SetWebUp Grzegorz Klementowski
                </p>
            </footer>
        ';

        echo $element;
    }

    function component_footer_main()
    {
        $element = 
        '
        <footer class="col-12 border-secondary text-center jumbotron bg-dark text-light footer border">
            <div class="footer-header">
                <h3>Nasze dania</h3>
            </div>
            <div>
                <p>Przygotowujemy nasze pizze najlepiej jak potrafimy, z staranną dokładnością, sercem i wieloletnim doświadczeniem ze sprawdzonych przepisów, specjalnie dla ciebie.</p>
            </div>
            <div class="footer-footer">
                <strong>Serdecznie zapraszamy!</strong>
            </div>
        </footer>
        ';
        echo $element;
    }

    function component_scripts()
    {
        $element = 
        '
        <script src="scripts/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

        ';
        echo $element;
    }

    function component_index_content()
    {
        $element = 
        '
        <!--<button style="z-index: 2000; position: fixed; top: 50%;" onscroll="readScroll();" onclick="scrollWin();">Click me check the scrollY!</button><br>
                        <br><button type="button" onclick="hidenHeader();">Hide header!</button>
                        <div style="position: fixed;left: 0;top: 50%;"><p>Scrolled <span id="scroll">0</span> times.</p></div>-->
                        
                            <div class="col-md-12 jumbotron bg-danger text-light text-center">
                                <h1>Przyjdź do nas!</h1>
                            </div>
                            <div class="col-md-8">
                                <figure>
                                    <img src="css/img/index_pictures/ip1.jpg" class="img-fluid index-pic" alt="pizza">
                                </figure>
                            </div>
                            <div class="col-md-4 text-justify">
                                <p class="index-text">Przyjedź na najlepszą pizzę w okolicy w samym centrum Gór Kaczawskich i dowiedz się jak smakuje prawdziwa pizza!</p>
                            </div>
                            <div class="col-md-12 jumbotron bg-danger text-light text-center">
                                <h1>Czas na zabawę!</h1>
                            </div>
                            <div class="col-md-4">
                                <p class="index-text">Wspólnena rozmowę, dyskusję i zabawę! Spędź weekend w  niesamowitej atmoswerze, zaproś znajomych i wynajmij sale by zrobić swoje wymarzone przyjęcie!</p>                                
                            </div>
                            <div class="col-md-8">
                                <figure>
                                    <img src="css/img/index_pictures/ip2.jpg" class="img-fluid" alt="alkohol i pizza">
                                </figure>
                            </div>
                            <div class="col-md-12 jumbotron bg-danger text-light text-center">
                                <h1>Twoja ulubiona kuchnia</h1>
                            </div>
                            <div class="col-md-8">
                                <figure>
                                    <img src="css/img/index_pictures/ip3.jpg" class="img-fluid" alt="kuchnia">
                                </figure>
                            </div>
                            <div class="col-md-4"><p class="index-text">Znajdź swoje ulubione miejsce spotkań, skuś się na pyszny, domowy obiad, który spawi, że szybko tu wrócisz!</p>
                            </div>
                            <div class="col-md-12 jumbotron bg-danger text-light text-center">
                                <h1>Wieczorny relaks?</h1>
                            </div>
                            <div class="col-md-4">
                                <p class="index-text">Poznaj najlepsze smaki piwa, polskie, czeskie lub znany wybitnym smakoszom "Złoty Lew".</p>
                            </div>
                            <div class="col-md-8">
                                <figure>
                                    <img src="css/img/index_pictures/ip4.jpg" class="img-fluid" alt="piwo">
                                </figure>
                            </div>
        ';
        echo $element;
    }

function makeCardDishes($id, $name, $description, $price_s, $price_l)
{

    echo '
    <section class="col-md-3 col-sm-6">
            <div class="dish border border-light">
                <figure>
                    <img class="img-fluid" alt="pizza" src="css/img/pizza.jpg">
                    <figcaption>
                        <div class="dish-tab-header"> <h1>'.$name.'</h1> </div>
                        <div class="dish-tab-description">'.$description.'</div>
                        <div class="dish-tab-button">
                            <table class="menu-table">
                                <tr>
                                    <th>28 cm</th><th>40cm</th>
                                </tr>
                                <tr>
                                    <form action="menu.php" method="POST">
                                        <input type="hidden" name="name_s" value="'.$name.'">
                                        <input type="hidden" name="description_s" value="'.$description.'">
                                        <input type="hidden" name="price_s" value="'.$price_s.'">
                                        <td><button type="submit" onclick="pickUpLargeDish('.$id.', 1, '.$price_s.')" class="btn btn-danger">'.$price_s.'.00 zł</button></td>
                                    </form>
                                    <form action="menu.php" method="POST">
                                        <input type="hidden" name="name_l" value="'.$name.'">
                                        <input type="hidden" name="description_l" value="'.$description.'">
                                        <input type="hidden" name="price_l" value="'.$price_l.'">
                                        <td><button type="submit" onclick="pickUpLargeDish('.$id.', 2, '.$price_l.')" class="btn btn-danger">'.$price_l.'.00 zł</button></td>
                                    </form>
                                </tr>
                            </table>
                        </div>
                    </figcaption>
                </figure>
            </div>
    </section>';


}
?>