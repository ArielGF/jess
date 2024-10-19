<div class="c-author-link">
    <div class="c-author-link__wrapper">
        <div class="c-author-link__name">
            <?php the_author_posts_link(); ?>
        </div>
        <div class="c-author-link__description">
            <?php echo esc_attr(the_author_meta('description')); ?>
        </div>
    </div>
</div><!-- .user-profile -->