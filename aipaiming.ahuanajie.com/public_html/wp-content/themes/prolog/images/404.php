<?php get_header('alternative'); 
/*
*Template Name: 404 Page Template
*/
?>

<div class="content-404">
	<h1><?php _e( '404','themeum');?> </h1>
	<h2><?php _e( '您所访问的页面没有找到', 'themeum' ); ?></h2>
	请尝试访问<a class="btn btn-lg btn-commom" href="<?php echo site_url(); ?>"><?php _e( '首页', 'themeum' ); ?></a>
	
	
</div>

<?php get_footer('alternative'); ?>
