<?php
get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'templates/page/content', 'page' );
endwhile;

?>

<?php
echo "page.php";
get_footer();