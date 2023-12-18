<?php

/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package Biziver
 *
 *
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */

if (post_password_required()) {
	return;
}
?>
<div class="blog-all-comments">
	<h3 class="wow fadeInUp" data-wow-delay="0.3s"><?php comments_number() ?></h3>
	<?php wp_list_comments(array(
		'callback' => 'biziver_comments_list',
		
	)) ?>

</div>
<div class="blog-comment-form wow fadeInUp" data-wow-delay="0.3s">	
	<?php comment_form() ?>
</div>