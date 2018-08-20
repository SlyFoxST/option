wp_reset_query(); ?>
<?php
$args = array(
'numberposts' => 5,
'category__in' => 2,3,4
);
$posts = get_posts($args);
foreach($posts as $post => $key){
setup_postdata($post);

	echo the_title();
}

?>

<?php echo get_post_meta(get_the_ID(),'description_img',true);?><!--Вывод пользовательских функций-->
<?php echo get_post_meta(get_the_ID(),'image_for_post',true);?>
<?php echo get_field('description_img');?><!--вывод пользовательских функций-->
<?php echo get_field('image_for_post');?><!--вывод пользовательских функций-->


<?php query_posts('cat=7,9,12'); ?>
<?php 
$args = array(
'walker' => null,
'max-depth' => '',
'style' => 'ul',
'callback' => null,
'end-callback' => null,
'type' => 'all',
'reply_text' => 'Reply',
'page' => '',
'per_page' => '',
'avatar_size' => 32,
'reverse_top_level' => null,
'reverse_children' => '',
'format' => 'html5',
'short_ping' => fslse,
'echo' => true,
);


///выбор постов по категории

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
  Это страница блог поста
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


<!--Выбор поста по категории-->


<?php
$query = $WP_query->post();
$catquery = new WP_Query( 'category&tag_ID=2' ); ?>
<ul>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
	 Это страница блог поста
<li><h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<ul><li><?php the_content(); ?></li>
</ul>
</li>
<?php endwhile; ?> 
</ul>
<?php wp_reset_postdata(); 


		
 $wp_query = new WP_Query(); 
        $wp_query->query('showposts=5' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
 
        <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
        <?php the_post_thumbnail();?>
        <?php the_excerpt(); ?>
 
        <?php endwhile; ?>
 
        <?php if ($paged > 1) { ?>
 
 иппапи
        <?php } else { ?>
 
        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
        </nav>
 
        <?php } ?>
 
        <?php wp_reset_postdata(); ?>
		?>
