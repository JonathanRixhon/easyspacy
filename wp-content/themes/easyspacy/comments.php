<h2 class="comments__title">Commentaires</h2>
<section class="existing-comments">
    <h3 class="existing-comments__title sro">Commentaires des autres utilisateurs</h3>
    <?php if (comments_open() || get_comments_number()) : ?>
        <ul class="comments-list">
            <?php if (es_post_comments_array()) : ?>
                <?php foreach (es_post_comments_array() as $comment) : ?>
                    <li class="comments-list__item_username" id="comment-<?= $comment['id'] ?>">
                        <span class="comments-list__item_username"><?= $comment['author'] ?></span>: <?= $comment['content'] ?>
                    </li>
                <?php endforeach; ?>
                <button type="button">Lire d'autre commentaires</button>
            <?php endif; ?>
        </ul>
    <?php else : ?>
        <p class="existing-comments_no-comments-alert">Il n'y a pas encore de commentaire</p>
    <?php endif; ?>
</section>

<?php comment_form(es_form_array()); ?>

<!-- <section class="add-comment">
    <h3 class="add-comment__title">Rédigez votre commentaire</h3>
    <form action="<?php //get_home_url() 
                    ?>/wp-comments-post.php" id="commentform" method="post">
        <fieldset>
            <legend>Identité</legend>
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        </fieldset>
        <label for="comment">Message</label>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        <button type="submit">Envoyer</button>
    </form>
</section> -->