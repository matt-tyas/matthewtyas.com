<?php
function blackops_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="commentmeta"><?php echo get_avatar($comment,$size='32',$default='<path_to_url>' ); ?><span class="author"><?php printf(__('<cite>%s</cite>'), get_comment_author_link()) ?> said on <a href="<?php comment_ID() ?>"><?php printf(__('%1$s'), get_comment_date('F jS, Y')) ?></a>:</span>
				</div>
      				<?php comment_text() ?>
         <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"></a><?php edit_comment_link(__('Edit'),'  ','') ?>
         <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <?php endif; ?>
	</li>
<?php
}
?>