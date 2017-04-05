<?php
get_header();
?>
<div class="page-header">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-9">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-9">
			<div class="content">				
				<?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
				?>
			</div><!-- //.content -->
		</div><!-- //.col-md-9 -->
	</div><!-- //.row .justify-content-md-center -->
</div><!-- //.container -->

<?php
get_footer();