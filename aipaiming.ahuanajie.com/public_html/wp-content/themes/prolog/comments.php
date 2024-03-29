<?php
/* This comments template */

if ( post_password_required() )
    return;
?>
<div id="comments" class="comments-area comments">
    <?php if ( have_comments() ) : ?>
        <h3 class="comments-title">
            <?php comments_number( __('没有评论', 'themeum' ), __('一条评论', 'themeum' ), __('% 评论', 'themeum' ) ); ?>
        </h3>

        <ul class="comment-list">

            <?php
                wp_list_comments( array(
                    'style'       => 'ul',
                    'short_ping'  => true,
                    'callback' => 'themeum_comment',
                    'avatar_size' => 80
                ) );
            ?>
        </ul><!-- .comment-list -->

        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( '评论导航', 'themeum' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; 以前的评论', 'themeum' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( '新的评论 &rarr;', 'themeum' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( '评论关闭.' , 'themeum' ); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $fields =  array(
            'author' => '<div class="col-md-6"><div class="row"><div class="col-md-12"><input id="author" name="author" type="text" placeholder="'. __( '姓名', 'themeum' ) .'" value="" size="30"' . $aria_req . '/></div>',
            'email'  => '<div class="col-md-12"><input id="email" name="email" type="text" placeholder="'. __( '邮件', 'themeum' ) .'" value="" size="30"' . $aria_req . '/></div>',
            'url'  => '<div class="col-md-12"><input id="url" name="url" type="text" placeholder="'. __( '网址', 'themeum' ) .'" value="" size="30"/></div></div></div>',
        );

        
         
        $comments_args = array(
            'fields' =>  $fields,
            'comment_notes_before'      => '',
            'comment_notes_after'       => '',
            'comment_field'             => '<div class="clearfix"></div><div class="col-md-12"><textarea id="comment" placeholder="'. __( '评论', 'themeum' ) .'" name="comment" aria-required="true"></textarea></div>',
            'label_submit'              => '发表评论'
        );
        ob_start();
        comment_form($comments_args);
        $search = array('class="comment-form"','class="form-submit"');
        $replace = array('class="comment-form row"','class="form-submit col-md-12"');
        echo str_replace($search,$replace,ob_get_clean());
    ?>
</div>