<?php

if ( post_password_required() ){
    return;
}
$comments_facebook = get_theme_mod('custom_comments_single_facebook',false);
?>
<div id="comments" class="box box-comment">
    <?php if($comments_facebook){?>
        <div id="fb-comments" class="fb-comments" order_by="reverse_time" data-width="100%" data-href="<?php echo esc_url(get_permalink()) ?>" data-num-posts="10"></div>
    <?php }
    else{ ?>
        <div class="comments-list">

            <?php comments_number( '', '<h5 class="heading"><span>'.esc_html__('1 Comment','bootstrap_template').'</span></h5>', '<h5 class="heading"><span>'.esc_html__('% Comments','bootstrap_template').'</span></h5>' ); ?>

            <?php if ( have_comments() ) { ?>
                <div class="comment-lists">
                    <ol class="comment-list list-unstyled">
                        <?php wp_list_comments('callback=custom_list_comments'); ?>
                    </ol>
                    <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                        ?>
                        <footer class="navigation comment-navigation">
                            <div class="previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'bootstrap_template' ) ); ?></div>
                            <div class="next right"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'bootstrap_template' ) ); ?></div>
                        </footer><!-- .comment-navigation -->
                    <?php endif; // Check for comment navigation ?>

                    <?php if ( ! comments_open() && get_comments_number() ) : ?>
                        <p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'bootstrap_template' ); ?></p>
                    <?php endif; ?>
                </div>
            <?php } ?>
        </div>
        <?php
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
            'title_reply'=> '<span class="heading widgettitles">'.esc_html__('Leave a Comment','bootstrap_template').'</span>',
            'comment_field' => '<div class="form-group">
                                                    <textarea rows="8" id="comment" class="form-control" placeholder="'.esc_attr__('Comment*', 'bootstrap_template').'" name="comment"'.$aria_req.'></textarea>
                                                </div>',
            'fields' => apply_filters(
                'comment_form_default_fields',
                array(
                    'author' => '<div class="row"><div class="form-group col-md-6">
                                                <input type="text" name="author" placeholder="'.esc_attr__('Name*', 'bootstrap_template').'" class="form-control" id="author" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' />
                                                </div>',
                    'email' => '<div class="form-group col-md-6">
                                                <input id="email" name="email" class="form-control" placeholder="'.esc_attr__('Email*', 'bootstrap_template').'" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' />
                                                </div> </div>',
                    'url' => false,
                )),
            'label_submit' => 'Post Comment',
            'comment_notes_before' => '<p class="h-info">'.__('Your email address will not be published.','bootstrap_template').'</p>',
            'comment_notes_after' => '',
        );
        ?>
        <?php if('open' == $post->comment_status){ ?>
            <div class="commentform">
                <?php custom_comment_form($comment_args,'btn-variant'); ?>
            </div><!-- end commentform -->
        <?php } ?>
    <?php }?>
</div><!-- end comments -->