<?php
get_header();
?>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-9">
			<?php
			if( have_posts() ):
				while( have_posts() ) : the_post();
					?>
						<div class="alignright"><?php the_post_thumbnail('article-thumbnail'); ?></div>
						<h1><?php echo the_title(); ?></h1>
						<div class="meta"><?php echo the_date(); ?>
							<?php echo the_category(' '); ?>
						</div>
					<?php
						the_content();
				endwhile;
			endif;
			?>
		</div>
	</div>
</div>
<?php
get_footer();
