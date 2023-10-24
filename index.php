<?php require_once("./components.php") ?>

<!DOCTYPE html>
    <html lang="pl">
        <head>
            <?php component_head(); ?>        
        </head>
        <body class="bg-dark text-light">
            
            <div class="facebook-bottom" onclick="window.open('https://www.facebook.com/PizzoManiaWojcieszow/', '_blank');">
                <i class="glyph-icon flaticon-facebook text-light"></i>
            </div>
            
            <?php
                component_nav();
                component_page_header();
            ?>            
            
            <main>
                <div class="container">
                    <div class="row">
                        
                            <?php
                                component_index_content();
                                component_footer_main();
                            ?>
                        
                    </div>
                </div>
            </main>
            <footer class="text-center container-fluid" >
                <p>
                    &copy; 2020 Pizzomania | developer contact: <a href="mailto:grzegorz.klementowski@outlook.com" class="text-light">grzegorz.klementowski@outlook.com</a> SetWebUp Grzegorz Klementowski
                </p>
            </footer>
            <?php
                
                component_scripts();
            ?>
        </body>
    </html>