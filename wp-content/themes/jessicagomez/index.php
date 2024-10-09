<?php get_header(); ?>


<div class="p-blog">
    <div class="p-blog__header">
        <div class="o-container">
            <div class="p-blog__header-wrapper">
                <?php $pagina_blog = get_post(get_option('page_for_posts')); ?>
                <h1> <?php echo esc_html($pagina_blog->post_title); ?> </h1>
                <div> <?php echo apply_filters('the_content', $pagina_blog->post_content); ?> </div>
            </div>
        </div>
    </div>
    
    <div class="p-blog__posts">
        <div class="o-container">

            <?php get_search_form(); ?>

            <div class="p-blog__posts-wrapper">
                <?php if ( have_posts() ) {
                    while (have_posts()) : the_post();
                        get_template_part('content', 'post');
                    endwhile;
                    jessicagomez_posts_navigation();
                } else {
                    get_template_part('content', 'none');
                } ?>
            </div>
        </div>
    </div>
    
</div>

<?php get_footer(); ?>
