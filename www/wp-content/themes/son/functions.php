<?php
add_theme_support('post-thumbnails');

register_nav_menu('top-mnu', 'Верхнее меню');
register_nav_menu('bot-mnu', 'Нижнее меню');

register_sidebar(array(
	'name' => 'Верхнее меню',
	'id' => 'top-mnu',
	'description' => '',
	'before_widget' => '<div class="top_mnu main-mnu">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Поиск',
	'id' => 'search',
	'description' => '',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Слайдер записей',
	'id' => 'slider',
	'description' => '',
	'before_widget' => '<div class="inner_slider">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => ''
	));


register_sidebar(array(
	'name' => 'Блоки достоинств на главной',
	'id' => 'blocks',
	'description' => '',
	'before_widget' => '<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12"><div class="blocks_text">',
	'after_widget' => '</div></div>',
	'before_title' => '<div class="like_h3">',
	'after_title' => '</div>'
	));


register_sidebar(array(
	'name' => 'Заказать консультацию на главной',
	'id' => 'order_consalt',
	'description' => '',
	'before_widget' => '<div class="order_consalt"><div class="w_1200">',
	'after_widget' => '</div></div>',
	'before_title' => '<div class="like_h3">',
	'after_title' => '</div>'
	));

register_sidebar(array(
	'name' => 'Пару слов о нашей компании',
	'id' => 'two_words_about_us',
	'description' => '',
	'before_widget' => '<div class="two_words_about_us"><div class="w_1200">',
	'after_widget' => '</div></div>',
	'before_title' => '<div class="about_us_heading"><div class="two_words_about_us_like_h2">',
	'after_title' => '</div></div>'
	));

register_sidebar(array(
	'name' => 'Наши услуги заголовок',
	'id' => 'our_services_line',
	'description' => '',
	'before_widget' => '<div class="our_services_line"><div class="w_1200"><div class="our_services_heading">',
	'after_widget' => '</div></div></div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));




add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

/*add_filter('loop_shop_per_page', create_function('$cols', 'return 3;'));

add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
function loop_columns() {
	return 3;
}
}*/

add_action( 'product_cat_edit_form_fields', 'wpm_taxonomy_edit_meta_field', 10, 2 );

function wpm_taxonomy_edit_meta_field($term) {

	$t_id = $term->term_id;
	$term_meta = get_option( "taxonomy_$t_id" );
	$content = $term_meta['custom_term_meta'] ? wp_kses_post( $term_meta['custom_term_meta'] ) : '';
	$settings = array( 'textarea_name' => 'term_meta[custom_term_meta]' );
	?>
	<tr class="form-field">
		<th scope="row" valign="top"><label for="term_meta[custom_term_meta]">Описание под товарами</label></th>
		<td>
			<?php wp_editor( $content, 'product_cat_details', $settings ); ?>

		</td>
	</tr>
	<?php
}

add_action( 'edited_product_cat', 'save_taxonomy_custom_meta', 10, 2 );  
add_action( 'create_product_cat', 'save_taxonomy_custom_meta', 10, 2 );

function save_taxonomy_custom_meta( $term_id ) {
	if ( isset( $_POST['term_meta'] ) ) {
		$t_id = $term_id;
		$term_meta = get_option( "taxonomy_$t_id" );
		$cat_keys = array_keys( $_POST['term_meta'] );
		foreach ( $cat_keys as $key ) {
			if ( isset ( $_POST['term_meta'][$key] ) ) {
				$term_meta[$key] = wp_kses_post( stripslashes($_POST['term_meta'][$key]) );
			}
		}

		update_option( "taxonomy_$t_id", $term_meta );
	}
}

//add_action( 'woocommerce_after_shop_loop', 'wpm_product_cat_archive_add_meta' );



add_filter('widget_text', 'do_shortcode');

add_filter('loop_shop_per_page', create_function('$cols', 'return 20;'));

//переопределени стандартной функции

function woocommerce_content() {
	if ( is_singular( 'product' ) ) {
		while ( have_posts() ) : the_post();
		wc_get_template_part( 'content', 'single-product' );
		endwhile;
	} else { ?>
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<div class="page-title"><?php woocommerce_page_title(); ?></div>
	<?php endif; ?>
	<?php do_action( 'woocommerce_archive_description' ); ?>
	<?php if ( have_posts() ) : ?>
	<?php do_action('woocommerce_before_shop_loop'); ?>
	<?php woocommerce_product_loop_start(); ?>
	<?php woocommerce_product_subcategories(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php wc_get_template_part( 'content', 'product' ); ?>
<?php endwhile; // end of the loop. ?>
<?php woocommerce_product_loop_end(); ?>
<?php do_action('woocommerce_after_shop_loop'); ?>
<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
	<?php wc_get_template( 'loop/no-products-found.php' ); ?>
<?php endif;
}
}

wp_dequeue_script ( 'prettyPhoto'); 
wp_dequeue_script ( 'prettyPhoto-Init');

remove_filter ( 'the_content', 'easy_image_gallery_append_to_content');