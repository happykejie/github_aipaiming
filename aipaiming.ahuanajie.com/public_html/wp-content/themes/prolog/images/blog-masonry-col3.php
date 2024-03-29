<?php
/*
 * Template Name: Blog Masonry column 3
 */

?>
<?php get_header(); ?>

<section id="main" class="container">
    <div class="row">
        <div id="content" class="site-content col-md-12" role="main">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array('post_type' => 'post','paged' => $paged);
            query_posts($args); 
            ?>

            <?php if ( have_posts() ) : ?>
                <div class="masonery_area column-3 row">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-4"><?php get_template_part( 'post-format/content', get_post_format() ); ?></div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <div class="clearfix">
                    <?php get_template_part( 'post-format/content', 'none' ); ?>
                </div>
            <?php endif; ?>

        </div> <!-- #content -->
        <div class="col-md-12">
           <div class="btn btn-style pull-right"><?php next_posts_link( '&laquo; 下一篇' ); ?></div>
                <div class="btn btn-style pull-left"><?php previous_posts_link( '上一篇 &raquo;' ); ?></div>
        </div>

    </div> <!-- .row -->
</section> <!--/#page-->

<?php get_footer();