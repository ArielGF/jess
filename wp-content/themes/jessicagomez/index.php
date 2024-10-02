<?php get_header(); ?>

<!-- main-content section start -->
<div class="main-content">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) {
                while (have_posts()) : the_post();

                    get_template_part('content', 'post');

                endwhile;

                zinnias_lite_posts_navigation();

            } else {

                get_template_part('content', 'none');

            } ?>
        </div>

        <?php get_sidebar(); ?>

    </div>
</div>
<!-- main-content section end -->

<?php get_footer(); ?>
