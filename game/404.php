<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package theme
 */

get_header();
?>
        
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						 <div class="content-not-page">
						<img src="<?php echo get_template_directory_uri();?>/img/404.png" class="img-responsive" />
					     </div>
					</div>
				</div>
			</div>


<?php
get_footer();
