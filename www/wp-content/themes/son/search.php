<? get_header(); ?> <!--Подключаем шапку-->  
		<div id="bread"><h2>Результаты поиска</h2></div>
		<div class="content">
			
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!--Цикл вордпресс-->
			<div class="post-main">
				
				<h1><a href="<? the_permalink();?>"><? the_title(); ?></a> <span><? the_time('d.m.Y'); ?></span></h1>
				<div class="post">
				<? the_post_thumbnail('full','class=imgstyle'); ?>
				<?php the_content(); ?>	
<p><a href="<? the_permalink();?>">Подробнее</a></p>

				</div>
				</div>
				<?php endwhile; ?>
	<div class="pagination">
<?php
//Пагинация
$big = 999999999; 
echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>
</div>
	<?php else: ?>
	<p>Ничего не найдено...</p> <!--Вывод если нет записей-->
	<?php endif; ?>
			</div>
		<? get_sidebar(); ?>	
	</div>
	<? get_footer(); ?>
</div>
<? wp_footer(); ?>
</body>
</html>