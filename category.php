<?php
get_header();

if( have_posts() ):
	while( have_posts() ) : the_post();
		?>
		<div class="container">
		            <div class="row justify-content-md-center">
		                <div class="col-md-8">
		                    <article>
		                        <?php the_post_thumbnail('article-thumbnail'); ?>
		                        <h3><?php echo the_title(); ?></h3>
		                        <?php the_excerpt(); ?>
		                    </article>
		                </div>
		            </div>
		        </div>
		    <hr>
		<?php
	endwhile;
endif;

get_footer();