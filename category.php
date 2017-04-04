<?php
get_header();

if( have_posts() ):
	while( have_posts() ) : the_post();
		?>
		<div class="container">
		            <div class="row justify-content-md-center">
		                <div class="col-md-9">
		                    <article>
		                        <a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('article-thumbnail'); ?></a>
		                        <a href="<?php echo the_permalink(); ?>"><h3><?php echo the_title(); ?></h3></a>
		                        <div class="meta">
		                            <?php the_time('j F, Y'); ?>
		                            <?php the_category(' '); ?>
		                        </div>
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