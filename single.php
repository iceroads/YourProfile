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
						<h1><?php echo the_title(); ?></h1>
						<cite><?php echo the_date(); ?>
							<?php echo the_category(' '); ?>
						</cite>
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
