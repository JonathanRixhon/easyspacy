<h2 class="comments__title">Commentaires</h2>
<section class="existing-comments">
    <h3 class="existing-comments__title sro">Commentaires des autres utilisateurs</h3>
    <div class="existing-comments__wrapper">
        <?php if (get_comments_number()) : ?>
            <?php if (es_post_comments_array()) : ?>
                <?php foreach (es_post_comments_array() as $comment) : ?>
                    <article class="single-comment">
                        <h4 class="single-comment__title sro ">Commentaire de <?= $comment['author'] ?></h4>
                        <p class="single-comment__content">
                            <span class="single-comment__name"><?= $comment['author'] ?>&nbsp;:</span>
                            <?= $comment['content'] ?>
                        </p>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php else : ?>
            <article class="single-comment">
                <h4 class="single-comment__title sro ">Pas de commentaire à ce jour</h4>
                <p class="single-comment__content">
                    Il n'y a pas de commentaire à ce jour.
                </p>
            </article>
        <?php endif; ?>
    </div>
    <button type="button" class="existing-comments__discover">Lire d'autre commentaires</button>
</section>
<?php comment_form(es_form_array()); ?>