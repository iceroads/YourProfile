<?php /* Template Name: Portfolio With Sidebar */ 
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

<?php
/////////////////
// WIDGET AREA //
/////////////////
if( is_active_sidebar( 'portfolio-sidebar' ) ) {
	get_sidebar('portfolio');
}
?>

<?php
get_template_part( 'templates/page/content', 'portfolio' );

get_footer();