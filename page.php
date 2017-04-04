<?php
get_header();

while ( have_posts() ) : the_post();
echo get_page_template();
endwhile;

?>

<?php
echo "page.php";
get_footer();