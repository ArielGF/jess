<div class="user-profile media">
    <div class="author-avatar pull-left">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
    </div>

    <div class="media-body">
        <div class="profile-heading text-uppercase">
            <?php the_author_posts_link(); ?>
        </div>
        <div class="author-description">
            <?php echo esc_attr(the_author_meta('description')); ?>
        </div>
    </div>
</div><!-- .user-profile -->