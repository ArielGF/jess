<?php get_header(); ?>


<div class="p-blog">
    <div class="p-blog-header">
        <?php echo the_content(); ?>
    </div>
    
    <div class="p-posts">
        <?php if ( have_posts() ) {
            while (have_posts()) : the_post();
                get_template_part('content', 'post');
            endwhile;

            jessicagomez_posts_navigation();

        } else {

            get_template_part('content', 'none');

        } ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
