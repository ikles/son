		<div class="bottom">
			<div class="w_1200">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<a href="/" class="logo logo2">
						<img src="<? bloginfo('template_url') ?>/img/logo.png" alt="">
						<div>
							<div>Сервис оптимизации налогов</div>
							<span>Сохраним ваши деньги и время!</span>
						</div>
					</a>
				</div>
				<?php dynamic_sidebar('bot-mnu'); ?>
				<?php dynamic_sidebar('footer_contacts'); ?>				
			</div>
			<?php dynamic_sidebar('social'); ?>	
		</div>
		<?php dynamic_sidebar('footer'); ?>	
		<div class="footer">
			<?php dynamic_sidebar('copy'); ?>	
		</div>	
	</div><!--wrapper-->
	<? wp_footer(); ?>
</body>
</html>