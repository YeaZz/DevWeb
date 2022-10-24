<?php include_once(__DIR__ . "/../include/config.php"); ?>
  
<header>
    <nav>
        <ul>
            <?= redirect("/index.php", "Accueil") ?>
            <?= redirect("/presentation.php", "Présentation") ?>
            <?= redirect("/contact.php", "Contact") ?>
            <li class="blog">
                <a>Blog</a>
                <ul>
                    <?= redirect("/articles/article1.php", "Cuisine et là") ?>
                    <?= redirect("/articles/article2.php", "Y quéa") ?>
                    <?= redirect("/articles/article3.php", "Car fours") ?>
                </ul>
            </li>
            <?= redirect("/subscribe.php", "Abonnez-vous") ?>
            <?= redirect("/statistics.php", "Statistiques") ?>
        </ul>
    </nav>
</header>