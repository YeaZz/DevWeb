  <?php
    function redirect($page, $content) {
        return ($_SERVER["PHP_SELF"] === $page)
        ? "<li class='active'>" . $content . "</li>"
        : "<li><a href=" . $page . ">" . $content . "</a></li>";
    }
  ?>
  
  <header>
    <nav>
        <ul>
            <?= redirect("/index.php", "Accueil") ?>
            <?= redirect("/presentation.php", "Présentation") ?>
            <?= redirect("/contact.php", "Contact") ?>
            <li class="blog">
                <a href="blog">Blog</a>
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