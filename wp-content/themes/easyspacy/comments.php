<h2 class="comments__title">Commentaires</h2>
<section class="existing-comments">
    <h3 class="existing-comments__title sro">Commentaires des autres utilisateurs</h3>
    <?php if (comments_open() || get_comments_number()) : ?>
        <div class="existing-comments__wrapper">
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
        </div>
        <button type="button" class="existing-comments__discover">Lire d'autre commentaires</button>
    <?php endif; ?>
<?php else : ?>
    <p class="existing-comments_no-comments-alert">Il n'y a pas encore de commentaire</p>
<?php endif; ?>
</section>

<?php comment_form(es_form_array()); ?>