<?php
get_header();
?>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-9 col-md-offset-3">
			<?php
			if( have_posts() ):
				while( have_posts() ) : the_post();
					?>
						<h1><?php echo the_title(); ?></h1>
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