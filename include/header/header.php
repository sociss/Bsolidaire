<header>
    <div class="conteneur cf">
        <!-- Logo -->
        <div class="left iblock cf" role="banner">
            <a class="logo" href="#"><img src="images/logo.png" alt="Logo de Bsolidaire" class="img" /></a>
        </div><div class="right iblock">
            <div class="part1 iblock cf">
            <!-- Titre+Recherche -->
                <h1>L'abc-daire de la solidarité</h1>
                <form id="search" action="index.php?page=recherche" method="get" role="search">
                    <input class="search_data iblock" name="query" type="text" placeholder="Recherchez un livre, un DVD, un jeux vidéo ..." /><input type="submit" id="submit_search" name="submit_search" class="loupe iblock" value="" />
                </form>
            </div><div class="part2 iblock cf">
            <!-- Bouton connect -->
				<?php
				if(isset($_SESSION['user']))
				{
					echo '<a href="index.php?page=deco" class="deco">Deconnexion</a>';
				}
                else
				{
					echo '<a href="index.php?page=login" class="connect">Connexion</a>';
					echo '<a href="index.php?page=inscription" class="signin">Inscription</a>';
				}
				
				?>
            </div>
        </div>
    </div>
</header>