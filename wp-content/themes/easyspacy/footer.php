<footer class="bottom">
    <h2 class="bottom__main-title sro">Pied de page</h2>
    <?php wp_footer() ?>
    <a href="" class="bottom__link">
        Retour à la page d'acceuil
    </a>
    <nav class="secondary-navigation">
        <h3 class="secondary-navigation__title">Pages du site</h2>
            <ul class="secondary-navigation__list">
                <?php foreach (es_menu('footer') as $link) : ?>
                    <li class="secondary-navigation__item">
                        <a href="<?= $link->url; ?>" class="secondary-navigation__link">
                            <?= $link->label; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
    </nav>
    <nav class="social-navigation">
        <h3 class="social-navigation__title">Nous contacter</h3>
        <ul class="social-navigation__list">
            <?php foreach (es_menu('social_media') as $link) : ?>
                <li class="social-navigation__item">
                    <a href="<?= $link->url; ?>" target="_blank" class="social-navigation__link">
                        <?= $link->label; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</footer>
<script src="<?= es_asset('js/app.js') ?>"></script>
</body>

</html>