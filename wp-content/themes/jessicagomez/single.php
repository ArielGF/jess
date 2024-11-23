<?php include("inc/schema-post.php"); ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
        "@type": "BlogPosting",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo $url; ?>"
        },
        "headline": "<?php echo $title; ?>",
        "description": "<?php echo $description; ?>",
        "image": "<?php echo $image; ?>",
        "author": {
            "@type": "Person",
            "name": "Jessica Gómez",
            "url": "https://jessicagomezautora.com/"
        },
        "datePublished": "<?php echo $date; ?>",
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Sitio Oficial de Jessica Gómez",
    "item": "https://jessicagomezautora.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "<?php echo $title; ?>",
    "item": "<?php echo $url; ?>"  
  }]
}
</script>
<?php get_header(); ?>

<div class="p-single">
    <div class="p-single__header">
        <div class="o-container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="o-container">
        <div class="p-single__wrapper">
            <div class="p-single__content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part( 'content', 'single'); ?>

                <?php
                    get_template_part('user-profile');
                ?>					
                
                <?php

                if (comments_open() || '0' != get_comments_number()) {
                    comments_template();
                }?>

                <?php
                // don't-delete
                $count_post = get_post_meta( $post->ID, 'post_views_count', true);

                if( $count_post == 'post_views_count'){
                    $count_post = 0;
                    delete_post_meta( $post->ID, 'post_views_count');
                    add_post_meta( $post->ID, 'post_views_count', $count_post);
                }
                else
                {
                    $count_post = (int)$count_post + 1;
                    update_post_meta( $post->ID, 'post_views_count', $count_post);

                }
                ?>

                <?php endwhile; // end of the loop. ?>

                <?php else : ?>

                <?php get_template_part('content', 'none'); ?>

                <?php endif; ?>
            </div>

            <div class="p-single__sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<!-- main-content section end -->

<?php get_footer(); ?>
