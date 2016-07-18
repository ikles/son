<?php get_header(); ?>
<div class="wrapper">
  <div class="left_and_right">
    <div class="left">
      <a href="/" class="logo">
        <div>vodoem<span>.su</span></div>
        <span class="desc_logo">Строительство водоемов</span>
      </a>
      <?php dynamic_sidebar('left_mnu'); ?>
      <?php dynamic_sidebar('left_phones'); ?>
      <?php dynamic_sidebar('blue_block'); ?>
      <?php dynamic_sidebar('left_licenz'); ?>  
      <?php dynamic_sidebar('left_interst'); ?>
      <?php dynamic_sidebar('left_news'); ?>        
    </div><!--left-->
    <div class="right">
      <?php dynamic_sidebar('slider'); ?>
      <?php dynamic_sidebar('main_gal'); ?>
      <div class="main_content">
        <div class="main_articles">
          <h1 class="archive-title"><?php single_cat_title(); ?></h1>
          <table class="main_articles_table">
            <thead>
              <tr>
                <td>№</td>
                <td>Заголовок материала</td>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <td><?php echo $i; $i++; ?></td>
                <td><a href="<?php the_permalink();?>"><?php the_title(); ?></a></td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div><!--main-articles--> 
  </div>
</div><!--right-->
</div><!--left_and_right-->
<?php dynamic_sidebar('brands'); ?>
<?php get_footer(); ?>