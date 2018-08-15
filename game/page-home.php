<?php get_header();?>

<body>
	
		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

		
<?php
$args=array(
'category__in' => 2, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
'showposts'=>3, //сколько показать статей
'orderby'=>data, //сортировка по дате
'caller_get_posts'=>1);
$my_query = new wp_query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) {
$my_query->the_post();
?>
<div class="news1">
<div class="news2">
<a class="news3"><img src="<?php if(get_the_post_thumbnail_url($post->ID, array(370, 217))) echo get_the_post_thumbnail_url($post->ID, array(370, 217)); else echo 'http://blogprogram.ru/wp-content/uploads/2016/05/noimg.png'; ?>"/></a>
</div>
<div class="news4">
<h5 class="news5"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h5>
<div class="news6"><?php echo iconv ('windows-1251', 'utf-8', substr(iconv ('utf-8', 'windows-1251', strip_tags($post->post_content)), 0, 150)); //выводит текст статьи ?></div>
<div class="news7"><?php echo $post->post_date; ?></div>
</div>
</div>
<?php } }
wp_reset_query(); ?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	<?php get_footer();?>