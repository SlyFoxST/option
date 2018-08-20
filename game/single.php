<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<? //If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
			<?php $args = array(
	// изменяем текст кнопки отправки 
	'label_submit'=>'Запостить коммент',
	// удаляем сообщение со списком разрешенных HTML-тегов из-под формы комментирования
	'comment_notes_after' => '',
	// указываем собственный HTML-код для вывода поля комментария
	'comment_field' => '<p class="comment-form-comment"><label for="comment">Твой коммент</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);
comment_form( $args );?>


<?php
get_sidebar();
get_footer();
