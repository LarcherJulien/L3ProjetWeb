<?php require("../../Projet/html/headerHTML.html"); ?>

    <header>
        <div class="logo">
            <h1><a href="home.php">Ac<i class="fa fa-television" aria-hidden="true"></i>ty</a></h1>
        </div>
        <div class="search">
            <form method="get">
                <input type="text" name="rechercher" placeholder="Une série, un acteur...">
                <input type="submit" class="search-button" value="&#xf002;">
            </form>
        </div>
        <nav class="header-menu">
            <ul>
                <li>
                    <a href="home.php">Acceuil</a>
                </li>
                <li>
                    <a href="series.php">Séries</a>
                </li>
                <li>
                    <a href="deco.php">Déconnexion</a>
                </li>
            </ul>
        </nav>
        <div class="suggest">
            <h1>Notre coup de coeur</h1>
            <a href="#"><img src="../../Projet/images/vampire.jpg" width="50" height="50" alt="favoris"/></a>
        </div>

    </header>

    </body>

</html>