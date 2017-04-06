<?php
get_header();
?>
<div class="page-header">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-9">
				<h1><?php _e('Services','yourprofile'); ?></h1>
				<?php echo do_shortcode('[headerText class="pageheadertext"]'.__("This is the services i can give you","yourprofile").'[/headerText]'); ?>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-9">
			<div class="row">
				<?php
					if( have_posts() ):
						$i = 1;
						while( have_posts() ): the_post();
							?>
							<div class="col-md-6">
								<div class="service-item-image align-middle">
									<?php the_post_thumbnail('service-thumbnail'); ?>
								</div>
								<div class="service-item-title">
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="service-item-text">
									<?php the_content(); ?>
								</div>
							</div>
							<?php
							/* Add line between posts. cut at 2 per row */
							$i++;
							if($i%2) {
								?>
			</div><!-- //.row -->
		</div><!-- //.col-md-9 -->
		<div class="col-md-12 border-break"></div>
		<div class="col-md-9">
			<div class="row">
								<?php
							}
						endwhile;
					endif;
				?>
			</div><!-- //.row -->
		</div><!-- //.col-md-9 -->
	</div><!-- //.row .justify-content-md-center -->
</div><!-- //.container -->

<?php
get_footer();
?>