<?php
    $strIndex=' <li id="nav_index">
                    <a href="../../index.php?page=index" class="menu-link">
                        <span class="hover">
                            <span class="icon-container"><span class="icon"></span></span>
                            <span class="title">Bsolidaire</span>
                        </span>
                    </a>
                </li>';
    $strLivres='<li id="nav_book">
                    <a href="include/pages/book.php?page=livres" class="menu-link">
                        <span class="hover">
                            <span class="icon-container"><span class="icon"></span></span>
                            <span class="title">Livres</span>
                        </span>
                    </a>
                </li>';
    $strFilms= '<li id="nav_movie">
                    <a href="../../index.php?page=movie" class="menu-link">
                        <span class="hover">
                            <span class="icon-container"><span class="icon"></span></span>
                            <span class="title">Films</span>
                        </span>
                    </a>
                </li>';
    $strJeuxVideos='<li id="nav_game">
                        <a href="../../index.php?page=gaming" class="menu-link">
                            <span class="hover">
                                <span class="icon-container"><span class="icon"></span></span>
                                <span class="title">Jeux Vidéo</span>
                            </span>
                        </a>
                    </li>';
    $strJeuxSocietes=  '<li id="nav_party">
                            <a href="../../index.php?page=party" class="menu-link">
                                <span class="hover">
                                    <span class="icon-container"><span class="icon"></span></span>
                                    <span class="title">Jeux de Société</span>
                                </span>
                            </a>
                        </li>';
    $strScolaire= '<li id="nav_school">
                        <a href="../../index.php?page=school" class="menu-link">
                            <span class="hover">
                                <span class="icon-container" ><span class="icon"></span></span>
                                <span class="title">Scolaire</span>
                            </span>
                        </a>
                    </li>';
    $arrayMenu= array(  
         'livres' => $strLivres,
         'films' => $strFilms,
         'jeuxVideos' => $strJeuxVideos,
         'jeuxSociete' => $strJeuxSocietes,
         'scolaire' => $strScolaire,
         'index' => $strIndex,
    );


    $arrayIcone= array(
         'Livres'=> "background-image: url(images/book.png);",
         'Films'=> "background-image: url(images/movie.png);",
         'Jeux de vidéo'=> "background-image: url(images/gamming.png);",
         'Jeux de société'=> "background-image: url(images/party.png);",
         'Scolaire'=> "background-image: url(images/book.png);",
         'Bsolidaire'=> "background-image: url(images/book.png);",
    );
    $arrayPage=  array_keys($arrayMenu);
    $menu = new Menu($arrayMenu,$arrayIcone,$arrayPage);
    $arrayResult = $menu->initialisation();
?>
<div id="barre">
    <div class="conteneur">
        <?php echo $arrayResult[1]; ?>
        <div id="nav_site">
            <button id="btn_nav"></button>
            <nav id="nav_page" itemprop="breadcrumb">
                <div id="nav_cache">    
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Bibliothèque</a></li>
                        <li><a href="#">Mon compte</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="conteneur cf">
    <!-- Menu latéral gauche -->
    <aside class="sidebar iblock">
        <ul class="alt-nav" role="navigation">
        <?php
            echo $arrayResult[0];
        ?>
        </ul>
    </aside>