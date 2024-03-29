<?php get_header(); ?>

<?php global $themeum_options; ?>

<section id="main" class="container">
    <div class="row">
        <div id="content" class="site-content col-md-8" role="main">

            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'post-format/content', get_post_format() );
                    endwhile;
                else:
                    get_template_part( 'post-format/content', 'none' );
                endif;
            ?>
			<div class="btn btn-style pull-left"><?php previous_posts_link( '上一篇 &raquo;' ); ?></div>
            <div class="btn btn-style pull-right"><?php next_posts_link( '&laquo; 下一篇' ); ?></div>
   

        </div> <!-- #content -->

        <div id="sidebar" class="col-md-4" role="complementary">
            <?php get_template_part( 'my-profile'); ?>

            <div class="sidebar-inner">
                <aside class="widget-area">
                    <?php dynamic_sidebar( 'sidebar' ); ?>
                </aside>
            </div>

        </div> <!-- #sidebar -->
        
    </div> <!-- .row -->
</section> <!-- .container -->

<?php get_footer();