<?php get_header(); ?>
<div class="wrapper">
	<div class="slider">
		<?php dynamic_sidebar('slider'); ?>
		<div class="top">
			<div class="w_1200 logo-top-mnu">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-logo-mnu">
					<div class="col-lg-3 col-md-5 col-sm-5 col-xs-5 col-logo nopadding">
						<a href="/" class="logo">
							<img src="<? bloginfo('template_url') ?>/img/logo.png" alt="">
							<div>
								<div>Сервис оптимизации налогов</div>
								<span>Сохраним ваши деньги и время!</span>
							</div>
						</a>
					</div>
					<div class="col-lg-9 col-md-7 col-sm-7 col-xs-7 col-mnu nopadding">
						<div class="mnu-search-wrap">
							<div class="hidden-lg">
								<a href="#" class="toggle-mnu"><span></span></a>
							</div>
							<div class="search">
								<div class="glass"></div>
								<?php dynamic_sidebar('search'); ?>
							</div>
							<?php dynamic_sidebar('top-mnu'); ?>
						</div>
					</div><!--col-mnu-->
				</div><!--lg-12-->
			</div><!--w_1200 logo-top-mnu-->
		</div><!--top-->		
	</div><!--slider-->
	<div class="w_1200 blocks">			
		<?php dynamic_sidebar('blocks'); ?>			
	</div><!--w_1200 blocks-->
	<?php dynamic_sidebar('order_consalt'); ?>			
	<?php dynamic_sidebar('two_words_about_us'); ?>			
	<?php dynamic_sidebar('our_services_line'); ?>				
	<div class="our_services">
		<div class="w_1200">				
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a class="img_a" href="#"><img src="img/service1.jpg" alt=""></a>
				<h3><a href="#">Обналичивание</a></h3>
				<p>Идейные соображения высшего порядка, а также укрепление и развитие структуры</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a class="img_a" href="#"><img src="img/service2.jpg" alt=""></a>
				<h3><a href="#">Обезнал</a></h3>
				<p>Идейные соображения высшего порядка, а также укрепление и развитие структуры</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a class="img_a" href="#"><img src="img/service3.jpg" alt=""></a>
				<h3><a href="#">Финансовый транзит</a></h3>
				<p>Идейные соображения высшего порядка, а также укрепление и развитие структуры</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a class="img_a" href="#"><img src="img/service4.jpg" alt=""></a>
				<h3><a href="#">Оптимизация налогов</a></h3>
				<p>Идейные соображения высшего порядка, а также укрепление и развитие структуры</p>
			</div>
		</div><!--w_1200 our_services-->
	</div>
	<div class="order_consalt order_consalt2">
		<div class="w_1200">
			<div class="col-lg-3 col-dm-12 col-sm-12 col-xs-12 order_consalt_text">
				<div class="like_h3">Заказать консультацию</div>
				<p>Наш специалист проконсультирует вас бесплатно.</p>
			</div>
			<div class="col-lg-9 col-dm-12 col-sm-12 col-xs-12 order_consalt_form">				
				<form>
					<input type="text" placeholder="Ваше имя">
					<input type="text" placeholder="Ваш телефон">
					<input type="submit" value="Заказать консультацию">
				</form>
			</div>
		</div>
	</div><!--order_consalt-->
	<div class="w_1200 last_art our_services">
		<div class="col-lg-3 col-md-12 col-xs-12 last_art_heading">
			<div class="like_h2">Последние <br><b>статьи</b></div>
		</div>
		<div class="col-lg-9 col-md-12 col-xs-12 nopadding">
			<div class="last_art_text">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<a class="img_a" href="#"><img src="img/art1.jpg" alt=""></a>
					<h3>
						<a href="#">Процесс внедрения и модернизации<span class="date1">20 сент 2015</span></a>							
					</h3>
					<p>Идейные соображения высшего порядка, а также укрепление и развитие структуры</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<a class="img_a" href="#"><img src="img/art2.jpg" alt=""></a>
					<h3><a href="#">Укрепление и развитие структуры<span class="date1">20 сент 2015</span></a></h3>
					<p>Идейные соображения высшего порядка, а также укрепление и развитие структуры</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<a class="img_a" href="#"><img src="img/art3.jpg" alt=""></a>
					<h3><a href="#">Укрепление и развитие структуры<span class="date1">20 сент 2015</span></a></h3>
					<p>Идейные соображения высшего порядка, а также укрепление и развитие структуры</p>
				</div>
			</div>
		</div>
	</div><!--w_1200 last_art our_services-->
	<?php get_footer(); ?>