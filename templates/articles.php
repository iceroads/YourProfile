<?php /* Template Name: Articles Page */ 
get_header();
?>
<div class="page-header">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-9">
				<?php
				while ( have_posts() ) : the_post();
					echo "<h1>";
					the_title();
					echo "</h1>";
					the_content();
				endwhile;
				?>
			</div> <!-- // .col-md-8 -->
		</div><!-- // .row -->
	</div><!-- // .container -->
</div><!-- // .page-header -->
<hr>
<?php
get_template_part( 'templates/page/content', 'articles' );

get_footer();