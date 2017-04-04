<?php

$args = [
	'post_type'	=>	'post',
	'cat'		=>	'-9'
];

$articles_query = new WP_Query($args);
if( $articles_query->have_posts() ):
    while( $articles_query->have_posts() ): $articles_query->the_post();
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
else:
    echo __('Sorry. No articles have been wroten yet','yourprofile');
endif;
?>