<footer class="bottom">
    <?php wp_footer() ?>
    <h2>Pied de page</h2>
    <img src="" alt="Logo de easyspacy">
    <nav>
        <h3>Pages</h2>
            <ul>
                <?php foreach (es_menu('footer') as $link) : ?>
                    <li>
                        <a href="<?= $link->url; ?>" class="menu__link">
                            <?= $link->label; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
    </nav>
    <section>
        <h3>Nous countacter</h3>
        <ul>
            <li>Email</li>
            <li>Insta</li>
        </ul>
    </section>


</footer>
<script src="<?= es_asset('js/app.js') ?>"></script>
</body>

</html>